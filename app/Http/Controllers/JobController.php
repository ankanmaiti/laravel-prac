<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{

    public function index(): View
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(5);

        return view(
            'jobs.index',
            [
                'jobs' => $jobs,
            ]
        );
    }

    public function show(Job $job): View
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    public function create(): View
    {
        return view('jobs.create');
    }

    public function store(Request $request): RedirectResponse
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

    public function edit(Job $job): View
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Request $request, Job $job): RedirectResponse
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

    public function destroy(Job $job): RedirectResponse
    {
        // authorize

        // delete
        $job->delete();

        // redirect
        return redirect('/jobs');
    }
}
