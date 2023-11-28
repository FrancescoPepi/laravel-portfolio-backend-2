<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new User();
        $users->name = "Admin";
        $users->email = "Admin@gmail.com";
        $users->password = Hash::make("Admin");
        $users->save();
    }
}
