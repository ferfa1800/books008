<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = new \App\User();
        $user->name = 'Prasert Leksito';
        $user->email = 'ferfa1800@gamil.com';
        $user->password = Hash::make('0800660477m');
        $user->save();
    }
}
