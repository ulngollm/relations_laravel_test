<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            $name = 'item'. Str::random(10);
            DB::table('items')->insert([
                'name'=> $name,
                'category_id'=>random_int(1,10)
            ]);
        }
    }
}
