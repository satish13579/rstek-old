<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hiring;
use Carbon\Carbon;

use App\Services\CsvService;

class HiringController extends Controller
{
    protected $csvService;

    public function __construct(CsvService $csvService)
    {
        $this->csvService = $csvService;
    }

    public function index()
    {
        $hirings = Hiring::paginate(15); 
        return view('forms.hiring.index', compact('hirings'));
    }

    public function view(Hiring $hiring)
    {
        return view('forms.hiring.view', compact('hiring'));
    }

    public function download() 
    {
        $hirings = Hiring::all();
        $data = $hirings->toArray();

        $newData[] = [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'email' => 'Email',
            'company' => 'Company',
            'title' => 'Title',
            'phone_number' => 'Phone Number',
            'testing_type' => 'Testing Type',
            'other_text' => 'Other Testing Type',
            'experience' => 'Experience',
            'managerial_position' => 'Managerial Position',
            'location_type' => 'Location Type',
            'location' => 'Location',
            'job_description' => 'Job Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];

        foreach ($data as $key => $value) {
            $solution_data = json_decode($value['form_data'], true);
            $newData[] = [
                'id' => $value['id'],
                'full_name' => $solution_data['full_name'],
                'email' => $solution_data['email'],
                'company' => $solution_data['company'],
                'title' => $solution_data['title'],
                'phone_number' => $solution_data['phone_number'],
                'testing_type' => $solution_data['testing_type'],
                'other_text' => isset($solution_data['other_text']) ? $solution_data['other_text'] : '',
                'experience' => $solution_data['experience'],
                'managerial_position' => $solution_data['managerial_position'],
                'location_type' => $solution_data['location_type'],
                'location' => $solution_data['location'],
                'job_description' => $solution_data['job_description'],
                'created_at' => Carbon::parse($value['created_at'])->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::parse($value['updated_at'])->format('Y-m-d H:i:s'),
            ];
        }
        
        $fileName = 'hiring_form_data_'.date("Y-m-d",time()).'.csv';
        return $this->csvService->downloadCsv($newData, $fileName);
    }
}