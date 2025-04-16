<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Insertar usuarios manualmente
        DB::table('users')->insert([
            ['name' => 'Roberto', 'email' => 'roberto@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Laura', 'email' => 'laura@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ramón', 'email' => 'ramon@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Isabel', 'email' => 'isabel@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ricardo', 'email' => 'ricardo@example.com', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Insertar pedidos asociados a los usuarios
        DB::table('orders')->insert([
            ['user_id' => 1, 'product' => 'Teclado', 'quantity' => 1, 'total' => 150.00, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'product' => 'Mouse', 'quantity' => 2, 'total' => 60.00, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'product' => 'Monitor', 'quantity' => 1, 'total' => 200.00, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 5, 'product' => 'USB', 'quantity' => 4, 'total' => 80.00, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'product' => 'Laptop', 'quantity' => 1, 'total' => 1200.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
