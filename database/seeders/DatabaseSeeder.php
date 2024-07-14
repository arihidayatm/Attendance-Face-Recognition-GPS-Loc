<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'MAHDEV Admin',
            'email' => 'mahdev@fic16.com',
            'password' => Hash::make('qwerty123'),
        ]);

        // data dummy for company
        \App\Models\Company::create([
            'name' => 'PT. MAHDEV',
            'email' => 'fic16@mahdev.com',
            'address' => 'Rusunawa Blok B 416, Sawahlunto, SUMBAR',
            'latitude' => '-0.658244',
            'longitude' => '100.756543',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
