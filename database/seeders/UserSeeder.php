<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'phone' => '012345678',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Supervisor',
                'phone' => '0123456',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Staff',
                'phone' => '01234567',
                'password' => bcrypt('123456')
            ],
        ];

        foreach ($users as $user){
            if(!User::where('name' , $user['name'])->count()){
                User::create($user);
            }
        }
    }
}
