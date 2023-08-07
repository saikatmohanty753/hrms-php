<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Pratap Kumar Nayak';
        $user->email = 'pratap.kumar@gmail.com';
        $user->password = bcrypt('1234');
        $user->role_id = 1;
        $user->username = 'principalsecretary';
        $user->save();
    }
}
