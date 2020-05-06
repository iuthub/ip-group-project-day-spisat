<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function getJobs() {
        return view('jobs.jobs');
    }

    public function getAbout() {
        return view('aboutPage.about');
    }
}
