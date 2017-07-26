<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LandingController extends Controller
{
    //
    public function index()
    {
        $news = DB::select('select userId,title,content,updated_at from news order by updated_at limit 3');
        return view('landing',['title' => 'Home', 'news' => $news]);
        //return var_dump($news->userId);
    }

    public function learning()
    {
        return view('learning',
        [
          'title' => 'Learning',
          'prodi' => 'Human Computer Interaction2014',
          'nama_mapel' => 'Dasar-Dasar Animasi',
          'kode_mapel' => 'HCI000001',
          'angkatan' => '2014'
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
    /*survey*/
    public function survey()
    {
        return view('survey',
        [
          'title' => 'Survey',
          'survey_title' => 'Pengguna Android'
        ]);
    }

    public function survey2()
    {
       return view('survey-view',
       [
         'title' => 'Survey',

       ]);
    }
    public function survey3()
    {
        return view('survey-makeSurvey',['title' => 'Survey']);
    }
    /* forum */
    public function forum1()
    {

        return view('forum1',
        [
          'title' => 'Forum',
          'course' => 'education technology',
          'sum_topic' => '1'
        ]);
    }
    public function forum2()
    {
        return view('forum2',
        [
          'title' => 'Forum',
          'course' => 'educational technology',
          'topic_tittle'=> 'visual audio',
          'topic_short_content' => 'bagaimana cara mempertimbangaknn knknknknknknk',
          'topic_reply_sum' => '2',
          'topic_owner' => 'arie',
          'topic_time' => '2 jan 2017 12:12'
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
    public function forum4()
    {
        return view('forum4',['title' => 'Forum']);
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
