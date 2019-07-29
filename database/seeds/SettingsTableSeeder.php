<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'Nerdsweb',
            'contact_number' => '+2348161846658',
            'contact_email' => 'info@nerdsweb.com',
            'address' => 'Nigeria, Abuja'

        ]);
    }
}
