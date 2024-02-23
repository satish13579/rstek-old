<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;

use App\Services\CsvService;

class ContactController extends Controller
{
    protected $csvService;

    public function __construct(CsvService $csvService)
    {
        $this->csvService = $csvService;
    }

    public function index()
    {
        $contacts = Contact::paginate(15); 
        return view('contacts.index', compact('contacts'));
    }

    public function view(Contact $contact)
    {
        return view('contacts.view', compact('contact'));
    }

    public function download() {
        $contacts = Contact::all();
        $data = $contacts->toArray();

        $newData[] = [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'email' => 'Email',
            'company' => 'Company',
            'title' => 'Title',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];

        foreach ($data as $key => $value) {
            $contact_data = $value['contact_data'];
            $newData[] = [
                'id' => $value['id'],
                'full_name' => $contact_data['full_name'],
                'email' => $contact_data['email'],
                'company' => $contact_data['company'],
                'title' => $contact_data['title'],
                'created_at' => Carbon::parse($value['created_at'])->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::parse($value['updated_at'])->format('Y-m-d H:i:s'),
            ];
        }
        
        $fileName = 'contact_form_data_'.date("Y-m-d",time()).'.csv';
        return $this->csvService->downloadCsv($newData, $fileName);
    }
}