<?php

namespace Database\Seeders;

use App\Models\User; // Import the User model
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Import Hash for password hashing

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an admin user
        User::create([
            'name' => 'Admin', // Admin's name
            'email' => 'admin@example.com', // Admin's email
            'password' => Hash::make('password'), // Admin's password (hashed)
            'school_name' => 'Admin School', // Admin's school name
            'contact_no' => '1234567890', // Admin's contact number
            'role' => 'admin', // Set role to 'admin'
        ]);

        // Optional: Add a success message
        $this->command->info('Admin user created successfully!');
    }
}
