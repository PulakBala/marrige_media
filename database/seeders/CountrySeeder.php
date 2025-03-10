<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // এই লাইনটি যোগ করুন

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            ['name' => 'Bangladesh', 'code' => 'BD'],
            ['name' => 'India', 'code' => 'IN'],
            ['name' => 'Pakistan', 'code' => 'PK'],
            ['name' => 'Indonesia', 'code' => 'ID'],
            ['name' => 'Nigeria', 'code' => 'NG'],
            ['name' => 'Egypt', 'code' => 'EG'],
            ['name' => 'Iran', 'code' => 'IR'],
            ['name' => 'Turkey', 'code' => 'TR'],
            ['name' => 'Algeria', 'code' => 'DZ'],
            ['name' => 'Sudan', 'code' => 'SD'],
            ['name' => 'Iraq', 'code' => 'IQ'],
            ['name' => 'Morocco', 'code' => 'MA'],
            ['name' => 'Ethiopia', 'code' => 'ET'],
            ['name' => 'Afghanistan', 'code' => 'AF'],
            ['name' => 'Saudi Arabia', 'code' => 'SA']
        ]);
    }
}
