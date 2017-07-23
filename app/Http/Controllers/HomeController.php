<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('landing',['title' => 'Home']);
    }

    public function dosen()
    {
        return view('dosen.landing',['title' => 'Home']);
    }
    public function dosenAssign()
    {
        return view('dosen.assigned',
            [
                'title' => 'Assigned Subject',
                'assigned' => [
                    'Fisika Dasar',
                    'Fisika Modern',
                    'Fisika Energy',
                    'Fisika Material'
            ]
        ]);
    }

    public function dosenAssignDetail($course)
    {
        return view('dosen.assignedDetail',
            [
                'title' => 'Assigned Subject',
                'assigned' => [
                    'Fisika Dasar',
                    'Fisika Modern',
                    'Fisika Energy',
                    'Fisika Material'
                    ],
                'course' => $course
            ]
        );
    }
}
