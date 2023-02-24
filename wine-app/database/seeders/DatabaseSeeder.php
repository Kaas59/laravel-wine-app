<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Country;
use App\Models\WineCategory;
use App\Models\WineList;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
        WinerySeeder::class,
        WineTypeSeeder::class,
        WineColorSeeder::class,
        BreedSeeder::class,
        CountrySeeder::class,
        AreaSeeder::class,
        ImporterSeeder::class,
        CategorySeeder::class,
        ListRavelSeeder::class,
        WineSeeder::class,
        WineCategorySeeder::class,
        WineListSeeder::class
      ]);
    }
}
