<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solution;
use Carbon\Carbon;

use App\Services\CsvService;

class SolutionController extends Controller
{
    protected $csvService;

    public function __construct(CsvService $csvService)
    {
        $this->csvService = $csvService;
    }

    public function index()
    {
        $solutions = Solution::paginate(15); 
        return view('forms.solution.index', compact('solutions'));
    }

    public function view(Solution $solution)
    {
        return view('forms.solution.view', compact('solution'));
    }

    public function download()
    {
        $solutions = Solution::all();
        $data = $solutions->toArray();

        $newData[] = [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'email' => 'Email',
            'company' => 'Company',
            'title' => 'Title',
            'phone_number' => 'Phone Number',
            'interested_service' => 'Interested Service',
            'other_text' => 'Other Service',
            'project_description' => 'Project Description',
            'estimated_timeline' => 'Estimated Timeline',
            'company_size' => 'Company Size',
            'additional_comments' => 'Additional Comments',
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
                'interested_service' => $solution_data['interested_service'],
                'other_text' => $solution_data['other_text'],
                'project_description' => $solution_data['project_description'],
                'estimated_timeline' => $solution_data['estimated_timeline'],
                'company_size' => $solution_data['company_size'],
                'additional_comments' => $solution_data['additional_comments'],
                'created_at' => Carbon::parse($value['created_at'])->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::parse($value['updated_at'])->format('Y-m-d H:i:s'),
            ];
        }
        
        $fileName = 'solution_form_data_'.date("Y-m-d",time()).'.csv';
        return $this->csvService->downloadCsv($newData, $fileName);
    }
}