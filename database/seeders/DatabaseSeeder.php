<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Friend;
use App\Models\User;
use App\Models\Voyage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Friend::truncate();
        Voyage::truncate();

        User::factory(1)->create();
        Friend::factory(5)->create();
        Voyage::factory(20)->create();
    }
}
