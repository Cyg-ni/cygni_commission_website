<?php

namespace Database\Seeders;

use App\Models\Commission;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use RuntimeException;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $ownerName = env('OWNER_NAME', 'Cygni');
        $ownerEmail = env('OWNER_EMAIL', 'you@example.com');
        $ownerPassword = env('OWNER_PASSWORD');

        if (blank($ownerPassword)) {
            throw new RuntimeException('OWNER_PASSWORD is not set. Set OWNER_PASSWORD in .env before seeding.');
        }

        // Create or update owner user for commission management
        User::query()->updateOrCreate(
            ['email' => $ownerEmail],
            [
                'name' => $ownerName,
                'password' => Hash::make($ownerPassword),
            ]
        );

        // Create 15 sample commission records
        Commission::factory(15)->create();
    }
}
