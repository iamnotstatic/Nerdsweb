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
            'address' => 'Nigeria, Abuja',
            'about_site' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus illum a quasi? Magnam aliquam quo beatae nesciunt autem voluptatibus provident quibusdam, cum ea modi quasi harum officiis eius similique laudantium.'

        ]);
    }
}
