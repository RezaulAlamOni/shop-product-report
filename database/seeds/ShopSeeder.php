<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_shops')->insert([
            'shop_name' => Str::random(10),
            'description' => Str::random(10),
            'created_at' => Carbon::now(),
        ]);
    }
}
