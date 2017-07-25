<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
                    'Fisika-Dasar',
                    'Fisika-Modern',
                    'Fisika-Energy',
                    'Fisika-Material'
            ]
        ]);
    }

    public function dosenAssignDetail($course)
    {
        return view('dosen.assignedDetail',
            [
                'title' => 'Assigned Subject',
                'assigned' => [
                    'Fisika-Dasar',
                    'Fisika-Modern',
                    'Fisika-Energy',
                    'Fisika-Material'
                    ],
                'course' => $course,
                'content' => 'test content'
            ]
        );
    }

    public function assignDosenToCourse($value)
    {
        $lecturers = DB::select('select id,name from users where type="2"');
        $courses = DB::select('select * from courses',['year' => date('Y')]);
        return view('dosen.assignDosenToCourse',
            [
                'title' => 'Assign Lecturer',
                'lecturers'=>$lecturers,
                'courses' => $courses
            ]);
    }

    public function makeCourse()
    {
        return view('dosen.makeCourse', ['title' => 'Make Course']);
    }

    public function makeCoursePost(Request $request)
    {
        DB::table('courses')->insert(
            ['email' => 'john@example.com', 'votes' => 0]
        );
        return;
    }
}
