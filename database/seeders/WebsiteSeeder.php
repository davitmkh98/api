<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('websites')->insert([
            'name' => Str::random(10) . 'loc',
        ]);

        DB::table('websites')->insert([
            'name' => Str::random(10) . 'loc',
        ]);

        DB::table('websites')->insert([
            'name' => Str::random(10) . 'loc',
        ]);

        DB::table('websites')->insert([
            'name' => Str::random(10) . 'loc',
        ]);


    }
}
