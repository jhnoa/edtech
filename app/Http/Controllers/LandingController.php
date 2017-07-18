<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function index()
    {
        return view('landing',['title' => 'Home']);
    }

    public function learning()
    {
        return view('learning',['title' => 'Learning']);
    }

    public function course()
    {
    	return view('learning-view-course',['title' => 'View Course']);
    }

    public function folder()
    {
        return view('learning-course-folder',['title' => 'View Course']);
    }
}
