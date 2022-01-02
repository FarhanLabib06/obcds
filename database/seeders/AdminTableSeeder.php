<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'gender'=>'gender',
            'blood_type'=>'blood_type',
            'role'=>'admin',
            'email'=>'admin@gmail.com',
            'address'=>'address',
            'phone'=>'01600000000',
            'password'=>bcrypt('12345'),
            'active'=>'1',
            'role'=>'admin'
            
        ]);
    }
}
