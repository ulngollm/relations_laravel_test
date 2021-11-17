<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            DB::table('item_owner')->insert([
                "item_id"=>random_int(1,10),
                "owner_id"=>random_int(1,10)
            ]);
        }
    }
}
