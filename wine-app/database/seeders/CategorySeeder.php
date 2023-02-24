<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        DB::table('categories')->insert([
          [
            'name' => 'ロマンス',
            'image' => 'romance.jpg'
          ],
          [
            'name' => 'チル',
            'image' => 'chill.jpg'
          ],
          [
            'name' => 'アニバーサリー',
            'image' => 'anniversary.jpg'
          ],
          [
            'name' => 'アコースティック',
            'image' => 'acoustic.jpg'
          ],
          [
            'name' => 'パーティ',
            'image' => 'party.jpeg'
          ],
          [
            'name' => 'ランキング',
            'image' => 'ranking.jpg'
          ],
          [
            'name' => '和食',
            'image' => 'japanese-food.jpeg'
          ],
          [
            'name' => 'イタリアン',
            'image' => 'italian.jpg'
          ]
        ]);
    }
}
