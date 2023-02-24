<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class BreedSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->delete();
        DB::table('breeds')->insert([
          [
            'name' => '品種名AAA'
          ],
          [
            'name' => '品種名BBB'
          ]
        ]);
    }
}
