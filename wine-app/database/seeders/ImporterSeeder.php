<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImporterSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('importers')->insert([
          [
            'name' => 'WINE TO STYLE株式会社'
          ],
          [
            'name' => 'オルカ・インターナショナル株式会社'
          ],
          [
            'name' => 'アークセラーズ'
          ],
          [
            'name' => 'アイコニック ワイン・ジャパン'
          ]
        ]);
    }
}
