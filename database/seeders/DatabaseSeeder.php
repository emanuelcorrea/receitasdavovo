<?php

namespace Database\Seeders;

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
        \App\Models\Recipe::factory()
            ->hasIngredients(rand(1, 4))
            ->hasCategory(1)
            ->hasHowPrepare(rand(1,4))
            ->count(3)
            ->create();
    }
}
