<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id'        => 1,
            'role_name' => 'Administrador',
        ]);

        Role::create([
            'id'        => 2,
            'role_name' => 'Funcionario',
        ]);
    }
}
