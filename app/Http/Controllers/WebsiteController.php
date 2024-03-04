<?php

namespace App\Http\Controllers;

// use Validator;
use App\Mail\ContactAdminSubmission;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Resources\SolutionCollection;
use App\Models\Solution;
use App\Models\Marketing;
use App\Models\Hiring;
use App\Mail\ContactFormMail;
use App\Mail\solutionFormAdmin;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\IpUtils;

class WebsiteController extends Controller
{
    public $bccEmail;

    public function __construct()
    {
        $this->bccEmail = env("ADMIN_MAIL", "operations@rsteksolutions.com");
    }
    public function home()
    {
        return view('website.home');
    }

    public function about()
    {
        return view('website.about');
    }

    public function partnership()
    {
        return view('website.partnership');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function saveContact(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string',
            'email' => 'required|email',
            'company' => 'nullable|string',
            'title' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'interested_services' => 'required|array|min:1',
            'interested_services.*' => 'string',
            'attachment_link' => 'nullable|string',
            'message' => 'required|string',
        ]);

        // If validation fails, return back with errors and input data
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $recaptcha_response = $request->input('g-recaptcha-response');

        if (is_null($recaptcha_response)) {
            return redirect()->back()->with('gcaptcha', 'Please Complete the Recaptcha to proceed')->withInput();
        }

        $url = "https://www.google.com/recaptcha/api/siteverify";

        $body = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha_response,
            'remoteip' => IpUtils::anonymize($request->ip()) //anonymize the ip to be GDPR compliant. Otherwise just pass the default ip address
        ];

        $response = Http::asForm()->post($url, $body);

        $result = json_decode($response);

        if ($response->successful() && $result->success == true) {
            // If validation passes, get the validated data
            $validatedData = $validator->validated();

            $contact = new Contact();
            $contact->name = $validatedData['full_name'];
            $contact->email = $validatedData['email'];
            $contact->company_name = $validatedData['company'];
            $contact->title = $validatedData['title'];
            $contact->ph_no = $validatedData['phone_number'];
            $contact->interested_services = implode(",", $validatedData['interested_services']);
            $contact->attachment_links = $validatedData['attachment_link'];
            $contact->message = $validatedData['message'];

            $mailData["name"] = $validatedData['full_name'];
            $mailData["type"] = "contact";
            $mailData["subject"] = "We've Received Your Inquiry at RS TekSolutions";

            $mailSent = Mail::to($validatedData['email'])
                ->send(new ContactFormMail($mailData));

            $mailSent2 = Mail::to($this->bccEmail)->send(new ContactAdminSubmission($validatedData));

            if ($mailSent && $mailSent2) {
                if ($contact->save()) {
                    return redirect()->route('website.contact')
                        ->with('success', "Thank you for reaching out! Your message is on its way to our team. We're excited to connect and will be in touch shortly");
                } else {
                    return redirect()->route('website.contact')
                        ->with('error', 'Something went wrong. Kindly try again');
                }
            } else {
                // Email sending failed
                return redirect()->route('website.contact')
                    ->with('error', 'Failed to send email. Kindly try again');
            }
        } else {
            return redirect()->back()->with('gcaptcha', 'Please Complete the Recaptcha to proceed')->withInput();
        }
    }

    public function uiTesting()
    {
        return view('website.solutions.ui-testing');
    }

    public function mobileTesting()
    {
        return view('website.solutions.mobile-testing');
    }

    public function performanceTesting()
    {
        return view('website.solutions.performance-testing');
    }

    public function apiTesting()
    {
        return view('website.solutions.api-testing');
    }

    public function testPlan()
    {
        return view('website.solutions.test-plan');
    }

    public function testSolutions()
    {
        return view('website.services.test-solutions');
    }

    public function talentHiring()
    {
        return view('website.services.talent-hiring');
    }

    public function marketYourself()
    {
        return view('website.services.market-yourself');
    }

    public function qaTraining()
    {
        return view('website.services.qa-training');
    }

    public function career()
    {
        return view('website.career');
    }

    public function editorialPolicy()
    {
        return view('website.editorial-policy');
    }

    public function submissionGuidelines()
    {
        return view('website.submission-guidelines');
    }

    public function solutionForm()
    {
        return view('website.forms.solution-form');
    }

    public function getAllSolutions() // Not in use
    {
        $solutions = Solution::all();
        return new SolutionCollection($solutions);
    }

    public function saveSolutionForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string',
            'email' => 'required|email',
            'company' => 'required|string',
            'title' => 'required|string',
            'phone_number' => 'required|string',
            'selected_services' => 'required|array|min:1',
            'selected_services.*' => 'string',
            'project_description' => 'required|string',
            'estimated_timeline' => 'required|string',
            'company_size' => 'required|string',
            'additional_comments' => 'nullable|string',
            'other_text' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $recaptcha_response = $request->input('g-recaptcha-response');

        if (is_null($recaptcha_response)) {
            return redirect()->back()->with('gcaptcha', 'Please Complete the Recaptcha to proceed')->withInput();
        }

        $url = "https://www.google.com/recaptcha/api/siteverify";

        $body = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha_response,
            'remoteip' => IpUtils::anonymize($request->ip()) //anonymize the ip to be GDPR compliant. Otherwise just pass the default ip address
        ];

        $response = Http::asForm()->post($url, $body);

        $result = json_decode($response);

        if ($response->successful() && $result->success == true) {

            $validatedData = $validator->validated();

            if (in_array("Others", $validatedData['selected_services'])) {
                $validatedData['selected_services'] = array_merge(array_diff($validatedData['selected_services'], array("Others")), array($validatedData['other_text']));
            }

            $solution = new Solution();
            $solution->name = $validatedData['full_name'];
            $solution->email = $validatedData['email'];
            $solution->company_name = $validatedData['company'];
            $solution->title = $validatedData['title'];
            $solution->ph_no = $validatedData['phone_number'];
            $solution->selected_services = implode(",", $validatedData['selected_services']);
            $solution->project_description = $validatedData['project_description'];
            $solution->estimated_timeline = $validatedData['estimated_timeline'];
            $solution->company_size = $validatedData['company_size'];
            $solution->additional_comments = $validatedData['additional_comments'];

            $mailData["name"] = $validatedData['full_name'];
            $mailData["title"] = $validatedData['title'];
            $mailData["type"] = "solution";
            $mailData["subject"] = "We've Received Your Inquiry at RS TekSolutions";



            $mailSent = Mail::to($validatedData['email'])
                ->send(new ContactFormMail($mailData));

            $mailSent2 = Mail::to($this->bccEmail)->send(new solutionFormAdmin($validatedData));

            if ($mailSent && $mailSent2) {
                if ($solution->save()) {
                    return redirect()->route('website.forms.solution-form')
                        ->with('success', "Success! Your inquiry has been submitted. Our software testing experts will review your needs and get back to you promptly to discuss tailored solutions that ensure your project's quality and efficiency.");
                } else {
                    return redirect()->route('website.forms.solution-form')
                        ->with('error', 'Something went wrong. Kindly try again');
                }
            } else {
                // Email sending failed
                return redirect()->route('website.forms.solution-form')
                    ->with('error', 'Failed to send email. Kindly try again');
            }
        } else {
            return redirect()->back()->with('gcaptcha', 'Please Complete the Recaptcha to proceed')->withInput();
        }
    }

    public function marketingForm()
    {
        return view('website.forms.marketing-form');
    }

    public function saveMarketingForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string',
            'email' => 'required|email',
            'marketing_type' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $inputData = $request->all();
        $jsonData = json_encode($inputData);

        $marketing = new Marketing();
        $marketing->form_data = $jsonData;

        $mailData["name"] = $inputData['full_name'];
        $mailData["title"] = $inputData['title'];
        $mailData["type"] = "marketing";
        $mailData["subject"] = "Your Submission to RS TekSolutions QA Magazine";

        Mail::to($inputData['email'])
            ->bcc($this->bccEmail)
            ->send(new ContactFormMail($mailData));

        if ($marketing->save()) {
            return response()->json(['success' => "Brilliant! You've taken the first step towards amplifying your market presence. Whether it's your innovative product or your unique personal brand, we're on deck to help you shine. Expect a conversation soon—we can't wait to strategize your success."], 200);
        } else {
            return response()->json(['error' => "Something went wrong. Kindly try again"], 500);
        }
    }

    public function hiringForm()
    {
        return view('website.forms.hiring-form');
    }

    public function saveHiringForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string',
            'email' => 'required|email',
            'testing_type' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $inputData = $request->all();
        $jsonData = json_encode($inputData);

        $hiring = new Hiring();
        $hiring->form_data = $jsonData;

        $mailData["name"] = $inputData['full_name'];
        $mailData["title"] = $inputData['title'];
        $mailData["type"] = "hiring";
        $mailData["subject"] = "Confirmation of Your Talent Hiring Request - RS TekSolutions";

        Mail::to($inputData['email'])
            ->bcc($this->bccEmail)
            ->send(new ContactFormMail($mailData));

        if ($hiring->save()) {
            return response()->json(['success' => "Thank you for submitting your inquiry! We're thrilled to assist you in finding the talent that not only meets your technical needs but also complements your team's dynamic. We'll be in touch with next steps shortly."], 200);
        } else {
            return response()->json(['error' => 'Something went wrong. Kindly try again'], 500);
        }
    }
}
