<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
// use Illuminate\Http\Request;


class JobController extends Controller
{

    public function __invoke()
    {
        $jobs = Job::with('employer')->simplePaginate(5);

        return view(
            'jobs',
            [
                'jobs' => $jobs,
            ]
        );
    }

    public function show(string $id)
    {
        return view('job', [
            'job' => Job::find($id)
        ]);
    }
}
