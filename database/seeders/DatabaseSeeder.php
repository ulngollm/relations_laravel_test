<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Owner;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            ItemSeeder::class,
            AdapterSeeder::class,
            OwnerSeeder::class,
            ItemOwnerSeeder::class
        ]);
    }
}
