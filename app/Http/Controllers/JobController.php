<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Carbon\Carbon;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::paginate(15); 
        return view('jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'vacancy' => 'required|integer|min:1',
            'job_tenure' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'domain' => 'required|string|max:255',
            'mandatory_skills' => 'required|string',
            'skills' => 'required|string',
            'roles_responsibilities' => 'required|string',
            'key_skills' => 'required|string',
            'job_type' => 'required|string|in:remote,office,hybrid',
            'is_published' => 'boolean',
            'published_at' => 'required|date',
        ]);

        $validatedData['published_at'] = Carbon::parse($request->published_at)->format('Y-m-d H:i:s');

        if(Job::create($validatedData)) {
            return redirect()->route('jobs.create')
                ->with('success', 'Job created successfully.');
        } else {
            return redirect()->route('jobs.create')
                ->with('error', 'Job creation failed.');
        }
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        $validatedData = $request->validate([
            'vacancy' => 'required|integer|min:1',
            'job_tenure' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'domain' => 'required|string|max:255',
            'mandatory_skills' => 'required|string',
            'skills' => 'required|string',
            'roles_responsibilities' => 'required|string',
            'key_skills' => 'required|string',
            'job_type' => 'required|string|in:remote,office,hybrid',
            'is_published' => 'boolean',
            'published_at' => 'required|date',
        ]);

        $validatedData['published_at'] = Carbon::parse($request->published_at)->format('Y-m-d H:i:s');

        if($job->update($validatedData)) {
            return redirect()->route('jobs.edit', $job->id)
                ->with('success', 'Job updated successfully.');
        } else {
            return redirect()->route('jobs.edit', $job->id)
                ->with('error', 'Job update failed.');
        }
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index')
            ->with('success', 'Job deleted successfully.');
    }
}