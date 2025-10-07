<?php

use Illuminate\Database\Seeder;
use App\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create(['address' => 'Asa Norte']);
        Address::create(['address' => 'Asa Sul']);
        Address::create(['address' => 'Sudoeste']);
    }
}
