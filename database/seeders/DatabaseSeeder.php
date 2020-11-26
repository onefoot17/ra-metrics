<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Felipe Pastana',
            'email' => 'felipe@vcompinc.com',
            'password' => Hash::make('12345678')
        ]);

        User::insert([
            'name' => 'Vio Ivanescu',
            'email' => 'vio@vcompinc.com',
            'password' => Hash::make('12345678')
        ]);

        User::insert([
            'name' => 'Earl Misquitta',
            'email' => 'earl@vcompinc.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
