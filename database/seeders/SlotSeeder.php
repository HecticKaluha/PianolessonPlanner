<?php

namespace Database\Seeders;

use App\Models\Slot;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 1000;
        if (Schema::hasTable('slots') == false) {
            $this->command->warn("Seeding slots failed; table 'slots' doesn't exist in database...");
            return;
        }

        Slot::factory()->count($amount)->create();
        $this->command->info("Seeded ".$amount." slots");

    }
}
