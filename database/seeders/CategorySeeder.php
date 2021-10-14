<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('categories')->first()) {
            DB::table('categories')->insert([
                ['name' => '辛いもの'],
                ['name' => '甘いもの'],
                ['name' => 'しょっぱいもの'],
                ['name' => '美味いもの'],
                ['name' => 'インスタ映え'],
            ]);
        }
    }
}
