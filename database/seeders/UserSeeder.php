<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'student@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'student',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'instructor@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'instructor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mike Wilson',
                'email' => 'student2@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'student',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        User::insert($users);
    }
}
