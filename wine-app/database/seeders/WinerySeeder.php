<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WinerySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wineries')->insert([
          [
            'name' => 'ワイナリー名',
            'name_english' => 'Winery Name'
          ]
        ]);
    }
}
