<?php

use Illuminate\Database\Seeder;
use App\Models\Configuration\Settings;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $settings =  [
            [
                'label' => 'Description',
                'name' => 'description',
                'value' => 'wating',
            ],
            [
                'label' => 'Phone',
                'name' =>'phone',
                'value' => '1-888-777-990',
            ],
            [
                'label' => 'a',
                'name' =>'working_hours',
                'value' => 'Mon - Fri 10 to 5pm',
            ],
            [
                'label' => 'Email',
                'name' =>'email',
                'value' => 'hello@logistics.com',
            ],
            [
                'label' => 'Address',
                'name' =>'address',
                'value' => '25/2 Lake Circus <br/> North Dhanmondi <br/> Kolabagan<br/>Dhaka-1205',
            ],
        ];

        foreach ($settings as $setting){
            Settings::create([
                'label' => $setting['label'],
                'name' => $setting['name'],
                'value' => $setting['value'],
                'is_active' => 1,
            ]);
        }
    }
}
