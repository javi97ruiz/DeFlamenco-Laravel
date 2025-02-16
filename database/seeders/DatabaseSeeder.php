<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\Cliente;
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
        Ticket::factory(10)->create();
        User::factory()->count(50)->create();
        Cliente::factory()->count(50)->create();
    }
}
