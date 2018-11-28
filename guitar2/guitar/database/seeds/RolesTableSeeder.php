<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            ['NAME_ROLE' => 'ADMIN'],
            ['NAME_ROLE' => 'STAFF'],
            ['NAME_ROLE' => 'USER']
        ]);
    }
}
