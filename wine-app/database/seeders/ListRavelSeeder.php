<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ListRavelSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('list_ravels')->delete();
        DB::table('list_ravels')->insert([
          [
            'name' => 'お気に入り',
            'user_id' => 1
          ],
          [
            'name' => '飲んだことがある',
            'user_id' => 1
          ],
          [
            'name' => 'AAAAA',
            'user_id' => 1
          ],
          [
            'name' => 'BBBBB',
            'user_id' => 1
          ],
          [
            'name' => 'CCCCC',
            'user_id' => 1
          ]
        ]);
    }
}
