<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marketing;
use Carbon\Carbon;

use App\Services\CsvService;

class MarketingController extends Controller
{
    protected $csvService;

    public function __construct(CsvService $csvService)
    {
        $this->csvService = $csvService;
    }

    public function index()
    {
        $marketings = Marketing::paginate(15); 
        return view('forms.marketing.index', compact('marketings'));
    }

    public function view(Marketing $marketing)
    {
        return view('forms.marketing.view', compact('marketing'));
    }

    public function download() {
        $marketings = Marketing::all();
        $data = $marketings->toArray();

        $newData[] = [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'email' => 'Email',
            'marketing_type' => 'Marketing Type',
            'phone_number' => 'Phone Number',
            'proposed_title' => 'Proposed Title',
            'summary' => 'Summary',
            'motivation' => 'Motivation',
            'description' => 'Description',
            'attachment_link' => 'Attachment Link',
            'product_description' => 'Product Description',
            'product_link' => 'Product Link',
            'is_customer' => 'Is Customer',
            'no_of_customer' => 'No of Customer',
            'additional_comments' => 'Additional Comments',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];

        foreach ($data as $key => $value) {
            $marketing_data = json_decode($value['form_data'], true);
            $newData[] = [
                'id' => $value['id'],
                'full_name' => $marketing_data['full_name'],
                'email' => $marketing_data['email'],
                'marketing_type' => $marketing_data['marketing_type'],
                'phone_number' => $marketing_data['phone_number'],
                'proposed_title' => isset($marketing_data['proposed_title']) ? $marketing_data['proposed_title'] : '',
                'summary' => isset($marketing_data['summary']) ? $marketing_data['summary'] : '',
                'motivation' => isset($marketing_data['motivation']) ? $marketing_data['motivation'] : '',
                'description' => isset($marketing_data['description']) ? $marketing_data['description'] : '', 
                'attachment_link' => isset($marketing_data['attachment_link']) ? $marketing_data['attachment_link'] : '',
                'product_description' => isset($marketing_data['product_description']) ? $marketing_data['product_description'] : '',
                'product_link' => isset($marketing_data['product_link']) ? $marketing_data['product_link'] : '',
                'is_customer' => isset($marketing_data['is_customer']) ? $marketing_data['is_customer'] : '',
                'no_of_customer' => isset($marketing_data['no_of_customer']) ? $marketing_data['no_of_customer'] : '', 
                'additional_comments' => isset($marketing_data['additional_comments']) ? $marketing_data['additional_comments'] : '',
                'created_at' => Carbon::parse($value['created_at'])->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::parse($value['updated_at'])->format('Y-m-d H:i:s'),
            ];
        }
        
        $fileName = 'marketing_form_data_'.date("Y-m-d",time()).'.csv';
        return $this->csvService->downloadCsv($newData, $fileName);
    }
}