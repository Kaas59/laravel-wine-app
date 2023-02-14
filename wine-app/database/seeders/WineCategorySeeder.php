<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class WineCategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wine_categories')->delete();
        DB::table('wine_categories')->insert([
          [
            'wine_id' => 1,
            'category_id' => 1
          ],
          [
            'wine_id' => 2,
            'category_id' => 1
          ],
          [
            'wine_id' => 3,
            'category_id' => 1
          ],
          [
            'wine_id' => 4,
            'category_id' => 1
          ],
          [
            'wine_id' => 5,
            'category_id' => 1
          ],
          [
            'wine_id' => 6,
            'category_id' => 2
          ],
          [
            'wine_id' => 7,
            'category_id' => 3
          ]
        ]);
    }
}
