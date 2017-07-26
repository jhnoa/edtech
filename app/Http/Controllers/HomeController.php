<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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

    public function assignDosenToCourse()
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
        /*$this->validate($request,[
        'name'=>'required|unique:seeders|max:255',
        'address'=>'required`enter code here`',
        'age'=>'required',
        ]); */ 
        DB::table('courses')->insert(
            [
                'name' => $request->input('name'),
                'code' => $request->input('code'),
                'major' => $request->input('major'),
                'year' => $request->input('year'), 
                'semester' => $request->input('semester'),
                'meet' => $request->input('meet'), 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        //\Session::flash('flash_message','successfully saved.');
 
        return view('dosen.makeCourse', ['title' => 'Make Course']);
    }

    public function makeNew()
    {
        //return '<pre>'.var_export(Auth::id()).'</pre>';
        $id = Auth::id();
        $name = Auth::user()->name;
        return view('dosen.makeNews', ['title' => 'Make News', 'id' => $id, 'name' => $name ]);
    }

    public function makeNewPost(Request $request)
    {
        /*$this->validate($request,[
        'name'=>'required|unique:seeders|max:255',
        'address'=>'required`enter code here`',
        'age'=>'required',
        ]); */ 
        DB::table('news')->insert(
            [
                'userId' => $request->input('userId'),
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        //\Session::flash('flash_message','successfully saved.');
        $id = Auth::id();
        $name = Auth::user()->name;
        return view('dosen.makeNews', ['title' => 'Make News', 'id' => $id, 'name' => $name ]);
    }
}