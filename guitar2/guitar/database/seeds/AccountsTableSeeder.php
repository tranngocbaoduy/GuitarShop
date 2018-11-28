<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('accounts')->insert([
            ['USERNAME' => 'ADMIN', 'PASSWORD' => '123', 'ID_ROLE' => '1'],
            ['USERNAME' => 'STAFF', 'PASSWORD' => '123', 'ID_ROLE' => '2'],
            ['USERNAME' => 'USER', 'PASSWORD' => '123', 'ID_ROLE' => '3']
        ]);
    }
}
