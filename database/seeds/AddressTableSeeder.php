<?php

use Illuminate\Database\Seeder;
use App\Models\Location\Address;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Address::class)->create();
    }
}
