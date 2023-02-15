<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Category;

use function GuzzleHttp\Promise\each;

class WineController extends Controller
{
    public function home(){
      $categories = DB::select('select * FROM categories');
      return view('dashboard', ['categories' => json_decode(json_encode($categories), true)]);
    }

    public function myPage(ProfileUpdateRequest $request){
      $user = User::whereId($request->user()->id)->first();

      $list_ravel = DB::select('select * FROM list_ravels where user_id = ?', [$user->id]);
      $lists = [];
      foreach($list_ravel as $ravel){
        $wine_list = DB::select('select * FROM wine_lists left JOIN wines ON wine_lists.wine_id = wines.id where ravel_id = ?', [$ravel->id]);
        if(count($wine_list) > 0){
          array_push($lists, [
            $ravel->name,
            json_decode(json_encode($wine_list), true)
          ]);
        }
      }
      return view('mypage', ['lists' => $lists, 'user' => $user]);
    }

    public function new(){
      $lists = json_decode(json_encode(DB::select('SELECT * FROM wines ORDER BY id desc limit ?', [10])), true);
      return view('new', ['lists' => $lists]);
    }

    public function search(){
      $lists = json_decode(json_encode(DB::select('SELECT * FROM wines ORDER BY id desc limit ?', [3])), true);
      return view('search', ['lists' => $lists]);
    }

    public function info(Request $request){
      $id = $request->query()['wine'];
      $list = json_decode(json_encode(DB::select('SELECT * FROM wines ORDER BY id desc limit ?', [3])), true);
      $wine = json_decode(json_encode(DB::select('SELECT * FROM wines where id = ?', [$id])), true);

      return view('info', ['wine' => $wine[0] ,'list' => $list]);
    }
}
