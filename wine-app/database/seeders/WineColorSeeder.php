<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WineColorSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wine_colors')->insert([
          [
            'name' => '白'
          ],
          [
            'name' => '赤'
          ],
          [
            'name' => 'ロゼ'
          ],
          [
            'name' => 'オレンジ'
          ],
          [
            'name' => 'その他'
          ]
        ]);
    }
}
