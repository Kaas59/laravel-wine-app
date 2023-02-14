<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WineTypeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wine_types')->insert([
          [
            'name' => 'ノンアル'
          ],
          [
            'name' => 'ビール'
          ],
          [
            'name' => 'ブランデー'
          ],
          [
            'name' => 'フレーヴァードワイン'
          ],
          [
            'name' => 'リキュール'
          ],
          [
            'name' => 'ワイン'
          ],
          [
            'name' => '清酒強化'
          ],
          [
            'name' => '微発泡'
          ],
          [
            'name' => '泡'
          ]
        ]);
    }
}
