<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function getJobs()
    {
        return view('job.job');
    }
    public function getJobPost()
    {
        return view('jobPost.post');
    }
    public function getJobPostbyTitle()
    {
        return view('jobPost.post');
    }

    public function getJobInfo()
    {
        return view('aboutPage.about');
    }

    public function getJobContact()
    {
        return view('extra.contacts');
    }


    public function getAdminJob()
    {
        return view('admin.adminIndex');
    }
    public function getAdminAbout()
    {
        return view('admin_extra.adminAbout');
    }
    public function getAdminEditJob()
    {
        return view('admin.adminEdit');
    }
    public function postAdminEditJob(Request $req)
    {
        $this->validate($req, [
            'title' => 'required|min:4',
            'body' => 'required|min:4'
        ]);
    }
    public function getAdminCreateJob()
    {
        return view('admin.adminCreate');
    }
    public function postAdminCreateJob(Request $req)
    {
        $this->validate($req, [
            'title' => 'required|min:4',
            'body' => 'required|min:4'
        ]);
    }
    public function getAdminDeleteJob()
    {
    }
}
