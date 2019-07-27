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
        App\User::create([
            'name' => 'Abdulfatai Suleiman',
            'email' => 'staticdev20046@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
