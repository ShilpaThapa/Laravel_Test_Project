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
        $user=User::create([
            'email'=>'shilpa@gmail.com',
            'name'=>'Shilpa',
            'password'=>bcrypt('shilpa123'),
            'age'=>'23',
            'bio'=>'My name is Shilpa',
            'image'=>'storage/users/user.png'
        ]);
    }
}
