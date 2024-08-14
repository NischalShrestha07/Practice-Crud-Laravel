<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call garxu RamSeeder
        // $this->call(RamSeeder::class);
        // $this->call(PostSeeder::class);

        $this->call([
            RamSeeder::class,
            PostSeeder::class,
        ]);
    }
}
