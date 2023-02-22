<?php

namespace Database\Seeders;

use App\Models\Continent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('continents')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $dateTime = date('Y-m-d H:i:s');
        $list = [
            [
                'id' => 1,
                'title' => 'Europe',
                'created_at' => $dateTime,
                'updated_at' => $dateTime
            ],
            [
                'id' => 2,
                'title' => 'Asia',
                'created_at' => $dateTime,
                'updated_at' => $dateTime
            ],
            [
                'id' => 3,
                'title' => 'Africa',
                'created_at' => $dateTime,
                'updated_at' => $dateTime
            ],
            [
                'id' => 4,
                'title' => 'South Aerica',
                'created_at' => $dateTime,
                'updated_at' => $dateTime
            ],
            [
                'id' => 5,
                'title' => 'North America',
                'created_at' => $dateTime,
                'updated_at' => $dateTime
            ]
        ];
        Continent::insert($list);
    }
}
