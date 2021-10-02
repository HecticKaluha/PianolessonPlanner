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
            'email' => 'sunny6094@naver.com',
            'email_verified_at' => Carbon::now(),
            'password' => '$2y$10$dWKF8HpwkkLbDWnB24vwf.8hHnd6wC3z2/xnMwzC2Wv.gOcgjisje',
        ]);
        $this->command->info("Seeded user Sunny");
    }
}
