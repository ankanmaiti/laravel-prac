<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
        $request->validate([
            'title' => ['required', 'min:5'],
            'salary' => ['required']
        ]);

        $job = Job::create([
            'title' => $request->title,
            'salary' => $request->salary,
            'employer_id' => Auth::user()->id
        ]);

        Mail::to($job->employer->user)
            ->send(new JobPosted($job));

        return redirect('/jobs');
    }

    public function edit(Job $job): View | RedirectResponse
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Request $request, Job $job): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'min:5'],
            'salary' => ['required']
        ]);

        $job->update([
            'title' => $request->title,
            'salary' => $request->salary
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job): RedirectResponse
    {
        $job->delete();

        return redirect('/jobs');
    }
}
