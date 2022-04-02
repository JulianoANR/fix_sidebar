<?php

namespace Database\Seeders;

use App\Models\{
    User
};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('admin'),
            'role_id'   => 1,
            'cnpj'      => '99.999.999/0001-99'
        ]);
    }
}
