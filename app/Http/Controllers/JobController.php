<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;


class JobController extends Controller
{

    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(5);

        return view(
            'jobs.index',
            [
                'jobs' => $jobs,
            ]
        );
    }

    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        // auto redirect with errors if not validated
        $request->validate([
            'title' => ['required', 'min:5'],
            'salary' => ['required']
        ]);

        // db entry
        Job::create([
            'title' => $request->title,
            'salary' => $request->salary,
            'employer_id' => 1
        ]);

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Request $request, Job $job)
    {
        // validate
        $request->validate([
            'title' => ['required', 'min:5'],
            'salary' => ['required']
        ]);

        // authorized

        // update and persist
        $job->update([
            'title' => $request->title,
            'salary' => $request->salary
        ]);

        // redirect
        return redirect('/jobs/' . $job->id );
    }

    public function destroy(Job $job)
    {
        // authorize

        // delete
        $job->delete();

        // redirect
        return redirect('/jobs');
    }
}
