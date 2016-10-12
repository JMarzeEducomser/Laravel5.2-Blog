<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'J. Marcelo Arze',
            'email' => 'arze.jesus@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
