<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
 
        DB::table('groups')->delete();
        DB::table('groups')->insert([
            'name' => 'Admin',
            'group_code' => 1,
        ]);
        DB::table('groups')->insert([
            'name' => 'User',
            'group_code' => 2,
        ]);

        $this->command->info('Group table seeded!');

    }
}