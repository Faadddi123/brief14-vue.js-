<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class push_accounts extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
        {

            
            $this->createUserWithRole('admin@example.com', 'password', 'admin');
            $this->createUserWithRole('subadmin@example.com', 'password', 'subadmin');
            $this->createUserWithRole('owner@example.com', 'password', 'owner');
            $this->createUserWithRole('operator@example.com', 'password', 'operator');
        }
        private function createUserWithRole(string $email, string $password, string $roleName): void
        {
            $user = User::create([
                'name' => 'John Doe',
                'email' => $email,
                'password' => Hash::make($password),
            ]);
            
            $user->assignRole($roleName);
        }
}
