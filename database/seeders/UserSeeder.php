<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [

            'name' => 'admin',
            'email' => 'admin@almomayezhospital.com',
            'password' => bcrypt(123456),
            'role_id' => 1,
        ];

        User::create($user);
    }
}
