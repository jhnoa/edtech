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
        $lecturers = Auth::User()->id;
        $courses = DB::select('select id,courseId from lecturers where userId=:id',['id'=>$lecturers]);
        return view('dosen.assigned',
            [
                'title' => 'Assigned Subject',
                'assigned' => $courses
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
        $courses = DB::select('select id,name from courses');
        return view('dosen.assignDosenToCourse',
            [
                'title' => 'Assign Lecturer',
                'lecturers'=>$lecturers,
                'courses' => $courses
            ]);
    }

    public function assignDosenToCoursePost(Request $request)
    {
        /*DB::table('lecturers')->insert(
            [
                'courseId' => $request->input('name'),
                'userId' => $request->input('code'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        return view('dosen.assignDosenToCourse',
            [
                'title' => 'Assign Lecturer',
                'lecturers'=>$lecturers,
                'courses' => $courses
            ]);*/
        return $request->all();
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

    public function makeAssignment()
    {
        $id = Auth::id();
        $name = Auth::user()->name;
        return view('dosen.makeNews', ['title' => 'Make News', 'id' => $id, 'name' => $name ]);
    }

    public function makeAssignmentPost(Request $request)
    {
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

    /* forum */
    public function forum1()
    {
    //  $result = DB::select('select * from topicforum');
    //  $sum_topic = mysql_num_rows($result);
        return view('forum1',
        [
          'title' => 'Forum',
          'course' => 'education technology',
          'sum_topic' => '1'
        ]);
    }
    public function forum2()
    {
      $topics = DB::select('select owner,title,content,sumReply from topicforum ');
        return view('forum2',
        [
          'title' => 'Forum',
          'course' => 'educational technology',
          'topics'=> $topics

        ]);
    }
    public function forum3()
    {
        return view('forum3',
        [
          'title' => 'Forum',
          'course' => 'educational technology',
          'topic_tittle'=> 'visual audio',
          'topic_content' => 'bagaimana cara mempertimbangaknn awdawdawdawdawdawdawdawdawdawdawdawd',
          'topic_owner' => 'arie',
          'topic_time' => '2 jan 2017 12:12',
          'topic_reply_sum' => '2',
          'reply_owner' => 'fajar',
          'reply_time' => '2 jan 2017 13:13',
          'reply_conten' =>'asascas asca sa as f sa'
        ]);
    }

    /*learning*/
    public function learning()
    {
        $learnings = DB::select('select name,code,major,year from courses');
        return view('learning',
        [
          'title' => 'Learning',
          'prodi' => 'Human Computer Interaction2014',
          'learnings' => $learnings
        ]);
    }

    public function course()
    {
        return view('learning-course',
      [
        'title' => 'View Course',
        'id_pertemuan'=>'1',
        'file_upload' => 'Materi pertemuan 1',
        'prodi' => 'Human Computer Interaction2014',
      ]);
    }

    public function makeFolder()
    {
        return view('learning-course-folder',['title' => 'Learning']);
    }

    public function sebelumKuis()
    {
        return view('learning-sebelum-kuis',
        [
          'title' => 'Kuis',
          'title_pertemuan' => 'Kuis Kalkulus',
          'deskripsi_text' => 'waktu : 60 menit',
          'prodi' => 'Human Computer Interaction2014'
        ]);
    }

    public function kuis()
    {
        return view('learning-kuis',
        [
          'title' => 'Kuis',



        ]);
    }

    public function forum4(Request $request)
    {
      DB::table('topicforum')->insert(
          [
              'title' => $request->input('title'),
              'content' => $request->input('content'),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s')
          ]
      );
        return view('forum4',
        [
          'title' => 'Forum',
          'course' => 'educational technology'

        ]);
    }

    /*profile*/
    public function profile1()
    {
        return view('profile',
        [
          'title' => 'Profile',
          'name' => 'Handy Tantyo',
          'email' => 'handy.tantyo14@student.surya.ac.id',
          'prodi' => 'Human Computer Interaction',
          'jabatan'=> 'Mahasiswa',
          'nama_mapel' => 'Dasar-Dasar Animasi',
          'kode_mapel' => 'HCI000001'
        ]);
    }
}
