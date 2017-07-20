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
    	return view('learning-course',['title' => 'View Course']);
    }

    public function makeFolder()
    {
        return view('learning-course-folder',['title' => 'Learning']);
    }
    
    public function sebelumKuis()
    {
        return view('learning-sebelum-kuis',['title' => 'Kuis']);
    }

    public function kuis()
    {
        return view('learning-kuis',['title' => 'Kuis']);
    }

    public function survey()
    {
        return view('survey',['title' => 'Survey']);
    }
}
