<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WineSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wines')->insert([
          [
            'name' => 'カリフォルニア・ルーツ ピノ・グリージョ',
            'name_english' => 'California Roots Pinot Grigio',
            'sommelier_point' => 2.0,
            'price' => 1380,
            'color_id' => 1,
            'type_id' => 1,
            'breed_id' => 1,
            'winery_id' => 1,
            'country_id' => 1,
            'area1_id' => 1,
            'area2_id' => 1,
            'importer_id' => 1
          ],
          [
            'name' => 'カリフォルニア・ルーツ ソーヴィニヨン・ブラン',
            'name_english' => 'California Roots Sauvignon Blanc',
            'sommelier_point' => 1.8,
            'price' => 1380,
            'color_id' => 1,
            'type_id' => 1,
            'breed_id' => 1,
            'winery_id' => 1,
            'country_id' => 1,
            'area1_id' => 1,
            'area2_id' => 1,
            'importer_id' => 1
          ],
          [
            'name' => 'カリフォルニア・ルーツ シャルドネ',
            'name_english' => 'California Roots Chardonnay',
            'sommelier_point' => 2.1,
            'price' => 1380,
            'color_id' => 1,
            'type_id' => 1,
            'breed_id' => 1,
            'winery_id' => 1,
            'country_id' => 1,
            'area1_id' => 1,
            'area2_id' => 1,
            'importer_id' => 1
          ],
          [
            'name' => 'カリフォルニア・ルーツ ロゼ',
            'name_english' => 'California Roots Rosé',
            'sommelier_point' => 2.0,
            'price' => 1380,
            'color_id' => 1,
            'type_id' => 1,
            'breed_id' => 1,
            'winery_id' => 1,
            'country_id' => 1,
            'area1_id' => 1,
            'area2_id' => 1,
            'importer_id' => 1
          ],
          [
            'name' => 'カリフォルニア・ルーツ カベルネ・ソーヴィニヨン',
            'name_english' => 'California Roots Cabernet Sauvignon',
            'sommelier_point' => 2.0,
            'price' => 1380,
            'color_id' => 1,
            'type_id' => 1,
            'breed_id' => 1,
            'winery_id' => 1,
            'country_id' => 1,
            'area1_id' => 1,
            'area2_id' => 1,
            'importer_id' => 1
          ],
          [
            'name' => 'ティー・エヌ・ティー シャルドネ エステート・グロウン',
            'name_english' => 'T.N.T Chardonay Estate Grown',
            'sommelier_point' => 2.1,
            'price' => 1400,
            'color_id' => 1,
            'type_id' => 1,
            'breed_id' => 1,
            'winery_id' => 1,
            'country_id' => 1,
            'area1_id' => 1,
            'area2_id' => 1,
            'importer_id' => 1
          ],
          [
            'name' => 'ティー・エヌ・ティー ピノ・ノワール エステート・グロウン',
            'name_english' => 'T.N.T Pinot Noir Estate Grown',
            'sommelier_point' => 2.0,
            'price' => 1400,
            'color_id' => 1,
            'type_id' => 1,
            'breed_id' => 1,
            'winery_id' => 1,
            'country_id' => 1,
            'area1_id' => 1,
            'area2_id' => 1,
            'importer_id' => 1
          ]
        ]);
    }
}
