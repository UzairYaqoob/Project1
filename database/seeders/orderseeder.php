<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class orderseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->insert([
            "owner_name"=>"zubair",
            "owner_phone"=>"03214567893",
            "owner_address"=>"bwp",
            "site_address"=>"kpr",
            "site_area"=>"kpr",
            "total_amount"=>"1000000",
        ]);
    }
}
