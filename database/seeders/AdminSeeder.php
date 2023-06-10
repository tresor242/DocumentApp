<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'nom' => "Admin",
            'prenom' => "Jamal",
            'email' => "admin@admin.com",
            'password' => Hash::make('Admindevoir2023@'),
            'usertype' => '1',
        ]);
    }
}
