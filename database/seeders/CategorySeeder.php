<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $amount = 7;
        $categories = ['Chords to play pop songs', 'Jazz improvisation', 'Composing and arranging', 'OST from movie or animation', 'Music theory (harmonization)'];
        if (Schema::hasTable('categories') == false) {
            $this->command->warn("Seeding categories failed; table 'categories' doesn't exist in database...");
            return;
        }
        foreach($categories as $category){
            DB::table('categories')->insert([
                'name' => $category,
            ]);
        }


//        Category::factory()->count($amount)->create();
        $this->command->info("Seeded ". sizeof($categories) . " Categories");
    }
}
