<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class allZhkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 3; $i++) {
            DB::table('allzhks')->insert([
                'zhkName' => 'zhk 1'.$i,
                'price' => rand(200000, 500000),
                'picture' => 'https://storage.googleapis.com/bd-kz-01/buildings/26526.jpg',
            ]);
        }
    }
}
