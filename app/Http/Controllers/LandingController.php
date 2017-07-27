<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LandingController extends Controller
{
    //
    public function index()
    {
        $news = DB::select('select users.name,news.title,news.content,news.updated_at from news join users on news.userId=users.id order by updated_at desc limit 3');
        //return '<pre>' . var_dump($news) . '</pre>';
        return view('landing',['title' => 'Home', 'news' => $news]);
        
    }

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
