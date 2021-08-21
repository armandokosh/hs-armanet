<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('bip0000x');
        User::create([
            'name' => 'admin',
            'email' => 'admin@hotspot.com',
            'password' => $password,

        ]);
    }
}
