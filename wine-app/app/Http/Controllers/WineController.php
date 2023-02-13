<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Category;

class WineController extends Controller
{
    //
    public function home(){
      $categories = [
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg'],
        [ "id" => 1, 'name' => 'AAA', 'image' => 'romance.jpg']
      ];
      // $categories = Category::all();
      return view('dashboard', ['categories' => $categories]);
    }

    public function myPage(ProfileUpdateRequest $request){
      $user = User::whereId($request->user()->id)->first();

      $lists = [
        [[],[],[],[],[],[],[],[],[],[],[],[]],
        [[],[]],
        [[],[],[],[],[],[],[],[]],
        [[],[],[],[],[],[],[],[]],
        [[],[],[],[],[],[],[],[]],
      ];
      
      return view('mypage', ['lists' => $lists, 'user' => $user]);
    }

    public function new(){
      return view('new');
    }

    public function search(){
      return view('search');
    }

    public function info(){
      $list = [[],[],[],[],[],[],[],[],[],[],[],[]];
      return view('info', ['list' => $list]);
    }
}
