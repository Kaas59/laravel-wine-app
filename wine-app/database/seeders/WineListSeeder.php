<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class WineListSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wine_lists')->delete();
        DB::table('wine_lists')->insert([
          [
            'ravel_id' => 1,
            'wine_id' => 1
          ],
          [
            'ravel_id' => 1,
            'wine_id' => 2
          ],
          [
            'ravel_id' => 1,
            'wine_id' => 3
          ],
          [
            'ravel_id' => 1,
            'wine_id' => 4
          ],
          [
            'ravel_id' => 1,
            'wine_id' => 5
          ],
          [
            'ravel_id' => 1,
            'wine_id' => 6
          ],
          [
            'ravel_id' => 2,
            'wine_id' => 1
          ],
          [
            'ravel_id' => 2,
            'wine_id' => 2
          ],
          [
            'ravel_id' => 2,
            'wine_id' => 3
          ],
          [
            'ravel_id' => 2,
            'wine_id' => 4
          ],
          [
            'ravel_id' => 3,
            'wine_id' => 2
          ],
          [
            'ravel_id' => 3,
            'wine_id' => 3
          ],
          [
            'ravel_id' => 3,
            'wine_id' => 4
          ],
          [
            'ravel_id' => 3,
            'wine_id' => 5
          ]
        ]);
    }
}
