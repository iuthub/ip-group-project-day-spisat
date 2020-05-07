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
    public function getAdminEdit()
    {
        return view('admin.adminEdit');
    }
    public function postAdminEdit(Request $req)
    {
        $this->validate($req, [
            'title' => 'required|min:4',
            'body' => 'required|min:4'
        ]);
    }
    public function getAdminCreate()
    {
        return view('admin.adminCreate');
    }
    public function postAdminCreate(Request $req)
    {
        $this->validate($req, [
            'title' => 'required|min:4',
            'body' => 'required|min:4'
        ]);
    }
    public function getAdminDelete()
    {
    }
}
