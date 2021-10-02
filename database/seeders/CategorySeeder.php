<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 7;

        Category::factory()->count($amount)->create();
        $this->command->info("Seeded ". $amount . " slots");
    }
}
