<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use Database\Factories\AboutFactory;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            // AdminSeeder::class,
            //ProductSeeder::class,
            CategorySeeder::class,
            // SliderSeeder::class,
            // Postseeder::class,
            //CouponSeeder::class,
            // PostCategorySeeder::class,
            // AboutSeeder::class,
        ]);

    }

}
