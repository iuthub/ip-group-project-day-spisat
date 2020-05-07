<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function getJobs()
    {
        return view('jobs.jobs');
    }

    public function getAbout()
    {
        return view('aboutPage.about');
    }

    public function getContact()
    {
        return view('extra.contacts');
    }
    public function getAdminIndex()
    {
        return view('admin.adminIndex');
    }
    public function getAdminAbout()
    {
        return view('admin_extra.adminAbout');
    }
}
