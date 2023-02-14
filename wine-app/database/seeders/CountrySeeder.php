<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        DB::table('countries')->insert([
          [
            'name' => 'アメリカ'
          ],
          [
            'name' => 'フランス'
          ],
          [
            'name' => 'ドイツ'
          ]
        ]);
    }
}
