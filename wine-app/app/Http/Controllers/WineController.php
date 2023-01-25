<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WineController extends Controller
{
    //
    public function home(){
      return view('dashboard');
    }
    public function mypage(){
      return view('mypage');
    }
    public function new(){
      return view('new');
    }
    public function search(){
      return view('search');
    }
}
