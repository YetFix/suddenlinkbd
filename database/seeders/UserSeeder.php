<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name'=>"Kawsar",
            'email'=>"admin@gmail.com",
            'password'=>Hash::make('123456789')
        ]);
        User::create([
            'name'=>"Prince",
            'email'=>"prince@suddenlinkbd.com",
            'password'=>Hash::make('123456789'),
        ]);
    }
}
