<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        if (!count(User::all())) {
            $roleAdmin = Role::where('nomRole', 'Admin')->first();
            $roleUser = Role::where('nomRole', 'Client')->first();
            // User::create(
            //     [
            //         'role_id' => $roleAdmin->id,
            //         'nom' => 'ADJAHO Super Admin',
            //         'prenoms' => 'Jean-Paul',
            //         'email' => 'adjahoSuperAdminJP@gmail.com',
            //         'phoneNumber' => '65000000',
            //         'adresseResidence' => 'Cotonou',
            //         'password' => bcrypt('1234567890'),

            //     ]
            // );
            User::create(
                [
                    'role_id' => $roleUser->id,
                    'nom' => 'SOSSA',
                    'prenoms' => 'Judes',
                    'email' => 'sossajudes@gmail.com',
                    'phoneNumber' => '99000000',
                    'adresseResidence' => 'Abomey-Calavi',
                    'password' => bcrypt('1234567890'),
                ]
            );
        }
    }
}
