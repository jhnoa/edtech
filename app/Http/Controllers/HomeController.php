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
        foreach ($courses as $a => $key) {
            $x = DB::select('select id,name from courses where id=:id',['id'=>$key->courseId]);
            $res[] = ['name' => $x[0]->name, 'id' => $x[0]->id];
        }
        return '<pre>'.var_export(Auth::user()).'</pre>';
        return view('dosen.assigned',
            [
                'title' => 'Assigned Subject',
                'assigned' => $res
        ]);
        //
    }

    public function dosenAssignDetail($course)
    {
        $lecturers = Auth::User()->id;
        $courses = DB::select('select id,courseId from lecturers where userId=:id',['id'=>$lecturers]);
        foreach ($courses as $a => $key) {
            $x = DB::select('select id,name from courses where id=:id',['id'=>$key->courseId]);
            $res[] = ['name' => $x[0]->name, 'id' => $x[0]->id];
        }
        $courseDetail = DB::select('select * from courses where id=:id',['id'=>$course]);
        $courseName = $courseDetail[0]->name;
        $content['Code']  = $courseDetail[0]->code;
        $content['Meeting']  = $courseDetail[0]->meet;
        //return var_export($content);
        return view('dosen.assignedDetail',
            [
                'title' => 'Assigned Subject',
                'assigned' => $res,
                'course' => $course,
                'courseName' => $courseName,
                'content' => $content
            ]
        );
        
    }

    public function mahasiswa_login(){
        $students = Auth::User()->id;
        $courses = DB::select('select name, prodi, jabatan from data_mahasiswa where id=:id',['id'=>$students]);
        $content['Name']  = $courses[0]->name;
        $content['Major']  = $courses[0]->prodi;
        $content['Status']  = $courses[0]->jabatan;
        $content['Email']  = Auth::user()->email;

        //return var_export($courses);
        return view('profile',
        [
          'title' => 'Profile',
          'name' => $content['Name'],
          'email' => $content['Email'],
          'prodi' => $content['Major'],
          'jabatan'=> $content['Status']
        ]);
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
        DB::table('lecturers')->insert(
            [
                'courseId' => $request->input('name'),
                'userId' => $request->input('code'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        $lecturers = DB::select('select id,name from users where type="2"');
        $courses = DB::select('select id,name from courses');
        return view('dosen.assignDosenToCourse',
            [
                'title' => 'Assign Lecturer',
                'lecturers'=>$lecturers,
                'courses' => $courses
            ]);
        //return $request->all();
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
        return view('dosen.makeAssignment', ['title' => 'Make Assignment', 'id' => $id, 'name' => $name ]);
    }

    public function makeAssignmentPost(Request $request)
    {
        DB::table('weeklyAssignment')->insert(
            [
                'courseId' => $request->input('id'),
                'judul' => $request->input('title'),
                'desctription' => $request->input('desctription'),
                'content' => $request->input('content'),
                'week' => $request->input('week'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        //\Session::flash('flash_message','successfully saved.');
        $id = Auth::id();
        $name = Auth::user()->name;
        return view('dosen.makeNews', ['title' => 'Make News', 'id' => $id, 'name' => $name ]);
    }

    public function embedYoutube($string)
    {
        $result = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<iframe width=\"560\" height=\"315\" src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",$string);
    }

    /* forum */
    public function forum1()
    {
    //  $result = DB::select('select * from topicforum');
    //  $sum_topic = mysql_num_rows($result);
        return view('forum1',
        [
          'title' => 'Forum',
          'course' => 'Education Technology',
          'sum_topic' => '2'
        ]);
    }
    public function forum2()
    {
      $topics = DB::select('select owner,title,content,sumReply from topicforum ');
        return view('forum2',
        [
          'title' => 'Forum',
          'course' => 'Educational Technology',
          'topics'=> $topics

        ]);
    }
    public function forum3()
    {
        return view('forum3',
        [
          'title' => 'Forum',
          'course' => 'Educational Technology',
          'topic_tittle'=> 'visual audio',
          'topic_content' => 'Membuat video visual yang memudahkan seseorang mengedukasi',
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
        return view('forum4',
        [
          'title' => 'Forum',
          'course' => 'Educational Technology'

        ]);
    }

    public function forum4Post(Request $request)
    {
        DB::table('topicforum')->insert(
            [
                'owner' => $request->input('owner'),
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        return view('forum4',
        [
          'title' => 'Forum',
          'course' => 'Educational Technology'

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
