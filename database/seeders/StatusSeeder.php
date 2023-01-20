<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Status;
class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Status::create([
            'status' => 'Pending'
        ]);

        Status::create([
            'status' => 'Approved'
        ]);

        Status::create([
            'status' => 'Declined'
        ]);
    }
}
