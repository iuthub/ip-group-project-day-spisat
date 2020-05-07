<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class JobsController extends Controller
{
    public function getJobs()
    {
        return view('job.job', [
            'posts' => Post::all()
        ]);
    }
    public function getJobPost($id)
    {
        return view('jobPost.post', [
            'post'->Post::find($id)
        ]);
    }
    public function getJobPostbyTitle($title)
    {
        return view('jobPost.post', [
            'post' => Post::where('title', 'like', $title)->first()
        ]);
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
        return view('admin.adminIndex', [
            'posts' => Post::all()
        ]);
    }
    public function getAdminAbout()
    {
        return view('admin_extra.adminAbout');
    }
    public function getAdminEditJob($id)
    {
        $post = Post::find($id);

        return view('admin.adminEdit', [
            'post' => $post,

        ]);
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
