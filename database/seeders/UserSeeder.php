<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
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

            'fullname' => 'Admin Admin',
            'avatar' => 'na',
            'avatar_url' => 'na',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'phone_number' => 'na',
            'address' => 'na',
            'usertype_id' => 1,
            'status_id' => 2
        ]);
    }
}
