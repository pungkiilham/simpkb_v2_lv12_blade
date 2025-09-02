<?php

namespace Database\Seeders;

use App\Models\JenisPengujian;
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
        $this->call([
            KendaraanSeeder::class,
            KodePenerbitanSeeder::class,
            JenisPengujianSeeder::class,
            JenisKendaraanSeeder::class,
            JabatanSeeder::class,
            JenisPemilikSeeder::class,
            // JabatanSeeder::class,
            AsalKendaraanSeeder::class,
            UserSeeder::class,
            RoleSeeder::class
        ]);
    }
}
