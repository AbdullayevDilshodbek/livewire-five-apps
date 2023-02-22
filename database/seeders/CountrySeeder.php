<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->truncate();
        $continents = Continent::get();
        $list = [];
        foreach ($continents as $continent) {
            for ($i = 0; $i < 5; $i++) {
                $list[] = [
                    'continent_id' => $continent['id'],
                    'title' => fake()->text(20),
                    'created_at' => $continent['created_at'],
                    'updated_at' => $continent['updated_at']
                ];
            }
        }
        Country::insert($list);
    }
}
