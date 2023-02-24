<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->delete();
        DB::table('areas')->insert([
          [
            'name' => 'カリフォルニア',
            'country_id' => 1
          ],
          [
            'name' => 'ローダイ',
            'country_id' => 1
          ],
          [
            'name' => 'カーネロス ナパ・ヴァレー',
            'country_id' => 1
          ],
          [
            'name' => 'ジュラ',
            'country_id' => 2
          ],
          [
            'name' => 'ラインガウ',
            'country_id' => 3
          ]
        ]);
    }
}
