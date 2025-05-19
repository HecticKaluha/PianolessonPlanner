<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('users') == false) {
            $this->command->warn("Seeding Users failed; table 'users' doesn't exist in database...");
            return;
        }
        DB::table('users')->insert([
            'name' => 'Sunny',
            'email' => env('ADMIN_EMAIL'),
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt(env('ADMIN_PASSWORD')),
        ]);
        $this->command->info("Seeded user Sunny");
    }
}
