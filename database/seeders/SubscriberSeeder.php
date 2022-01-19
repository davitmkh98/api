<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscribers')->insert([
            'email' => Str::random(10) . '@gmail.com',
            'website_id' => 1
        ]);


        DB::table('subscribers')->insert([
            'email' => Str::random(10) . '@gmail.com',
            'website_id' => 1
        ]);


        DB::table('subscribers')->insert([
            'email' => Str::random(10) . '@gmail.com',
            'website_id' => 2
        ]);


        DB::table('subscribers')->insert([
            'email' => Str::random(10) . '@gmail.com',
            'website_id' => 3
        ]);


    }
}
