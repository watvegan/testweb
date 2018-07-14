<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
      $title = 'about yo~';
      return view('pages.index')->with('title', $title);
    }

    public function about(){
          $title = array(
          'wew'=>'wawa',
          'durhaka' => ['ita', 'dd', 'omang']
      );
      return view('pages.about')->with($title);
    }
}
