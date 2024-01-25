<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'demo',
            'email' => 'demo@gmail.com',
            'is_admin' => true,
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'demo2',
            'email' => 'demo2@gmail.com',
            'is_admin' => true,
            'password' => Hash::make('password'),
        ]);

        Listing::factory(10)->create([
            'by_user_id' => 1
        ]);
        Listing::factory(10)->create([
            'by_user_id' => 2
        ]);
    }
}
