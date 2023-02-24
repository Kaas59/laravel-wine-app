<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Category;
use App\Models\ListRavel;
use App\Models\WineList;

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
            'id' => $ravel->id,
            'name' => $ravel->name,
            'wines' => json_decode(json_encode($wine_list), true)
          ]);
        }
      }
      return view('mypage', ['lists' => $lists, 'user' => $user]);
    }

    public function new(){
      $lists = json_decode(json_encode(DB::select('SELECT wine.id, wine.name, wine.sommelier_point, colors.name as color, types.name AS `type` FROM wines as wine
                                                    LEFT OUTER JOIN wine_colors AS colors ON wine.color_id = colors.id
                                                    LEFT OUTER JOIN wine_types AS types ON wine.type_id = types.id
                                                    ORDER BY id desc limit ?', [10])), true);
      return view('new', ['lists' => $lists]);
    }

    public function search(){
      $lists = json_decode(json_encode(DB::select('SELECT wine.id, wine.name, wine.sommelier_point, colors.name as color, types.name AS `type` FROM wines as wine
                                                    LEFT OUTER JOIN wine_colors AS colors ON wine.color_id = colors.id
                                                    LEFT OUTER JOIN wine_types AS types ON wine.type_id = types.id
                                                    ORDER BY id desc limit ?', [50])), true);
      return view('search', ['lists' => $lists]);
    }

    public function info(Request $request, $id){
      // $id = $request->query()['wine'];

      $category = json_decode(json_encode(DB::select('SELECT categories.id, categories.name
                                                      FROM categories
                                                      LEFT JOIN wine_categories
                                                        ON wine_categories.category_id = categories.id
                                                      WHERE wine_categories.wine_id = ? LIMIT 1', [$id])), true);

      $wine = json_decode(json_encode(DB::select('SELECT * FROM wines where id = ?', [$id])), true);

      $country = json_decode(json_encode(DB::select('SELECT name FROM countries where id = ?', [$wine[0]['country_id']])), true);
      $color = json_decode(json_encode(DB::select('SELECT name FROM wine_colors where id = ?', [$wine[0]['color_id']])), true);
      $type = json_decode(json_encode(DB::select('SELECT name FROM wine_types where id = ?', [$wine[0]['type_id']])), true);
      $breed = json_decode(json_encode(DB::select('SELECT name FROM breeds where id = ?', [$wine[0]['breed_id']])), true);
      $winery = json_decode(json_encode(DB::select('SELECT name FROM wineries where id = ?', [$wine[0]['winery_id']])), true);
      $importer = json_decode(json_encode(DB::select('SELECT name FROM importers where id = ?', [$wine[0]['importer_id']])), true);

      $wine[0]['country'] = array_key_exists('name', $country[0]) ? $country[0]['name'] : "不明";
      $wine[0]['color'] = array_key_exists('name', $color[0])? $color[0]['name'] : "不明";
      $wine[0]['type'] = array_key_exists('name', $type[0]) ? $type[0]['name'] : "不明";
      $wine[0]['breed'] = array_key_exists('name', $breed[0]) ? $breed[0]['name'] : "不明";
      $wine[0]['winery'] = array_key_exists('name', $winery[0]) ? $winery[0]['name'] : "不明";
      $wine[0]['importer'] = array_key_exists('name', $importer[0]) ? $importer[0]['name'] : "不明";

      $wine_list = json_decode(json_encode(DB::select('SELECT * FROM wines ORDER BY id desc limit ?', [5])), true);
      $lists = json_decode(json_encode(DB::select('SELECT list_ravels.id, list_ravels.name, CASE WHEN wine_lists.wine_id is NULL THEN 0 ELSE 1 END AS list_exists
                                                    FROM list_ravels
                                                    LEFT OUTER JOIN wine_lists
                                                      ON list_ravels.id = wine_lists.ravel_id AND wine_lists.wine_id = ? AND list_ravels.user_id = ?',[$id, 1])), true);

      return view('info', ['wine' => $wine[0] ,'wine_list' => $wine_list, 'lists' => $lists, 'category' => $category[0]]);
    }

    public function createList(Request $request){
      $user_id = $request->user()->id;
      $list_name = $request->input('list_name');

      // リストを作成する
      $list = new ListRavel();
      $list->create(['name' => $list_name, 'user_id' => $user_id]);

      return redirect('/mypage');
    }

    public function addList(Request $request){
      $referer = explode('/', $request->headers->get('referer'));
      $wine_id = end($referer);

      $list = [];
      foreach($request->collect() as $item){
        if(str_starts_with($item, 'list-')){
          $list_info = explode('-', $item);
          $list_id = end($list_info);
          array_push($list, ['ravel_id' => (int)$list_id, 'wine_id' => (int)$wine_id]);
        }
      }

      // リストにワインを追加する
      if(count($list) > 0){
        foreach($list as $item){
          $list = new WineList();
          $list->create($item);
        }
      }

      return redirect('/info/' . $wine_id);
    }

    public function editList(Request $request, $id){
      Log::info('editList', [$id]);
      return redirect('/');
    }

    public function destroyList(Request $request){
      Log::info("destroyList");
      return redirect('/');
    }
}
