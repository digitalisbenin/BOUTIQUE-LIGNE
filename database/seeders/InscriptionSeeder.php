<?php

namespace Database\Seeders;

use App\Models\Inscription;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!count(Inscription::all())) {
            $roleUser = User::where('role_id', 2)->first();
            Inscription::create(
              [
                  'user_id' => $roleUser->id,
                  'codeParents' => 'D000'.+1,
                  'codeUser' => 'D000'.+1,
                  'created_at' => now(),
                  'updated_at' => now(),
              ]
            );

        }
    }
}
