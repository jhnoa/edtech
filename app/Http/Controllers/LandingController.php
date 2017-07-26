<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LandingController extends Controller
{
    //
    public function index()
    {
        $news = DB::select('select userId,content from news order by updated_at limit 3');
        //return view('landing',['title' => 'Home']);
        return var_dump($news->userId);
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
    /*survey*/
    public function survey()
    {
        return view('survey',['title' => 'Survey']);
    }

    public function survey2()
    {
       return view('survey-view',['title' => 'Survey']); 
    }
    public function survey3()
    {
        return view('survey-makeSurvey',['title' => 'Survey']);
    }
    /* forum */
    public function forum1()
    {
        return view('forum1',['title' => 'Forum']);
    }
    public function forum2()
    {
        return view('forum2',['title' => 'Forum']);
    }
    public function forum3()
    {
        return view('forum3',['title' => 'Forum']);
    }
    public function forum4()
    {
        return view('forum4',['title' => 'Forum']);
    }
    /*profile*/
    public function profile1()
    {
        return view('profile',['title' => 'Profile']);
    }

}
