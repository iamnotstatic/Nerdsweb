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
        $user = App\User::create([
            'name' => 'Abdulfatai Suleiman',
            'email' => 'staticdev20046@gmail.com',
            'password' => bcrypt('12345678'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam qui perferendis quod saepe quia. Tenetur in nobis est accusantium, dolorem sunt ut! Nulla nobis tempore mollitia asperiores nostrum id impedit!',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
