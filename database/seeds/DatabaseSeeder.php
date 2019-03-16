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
        // For adding default admin users
        $user = new App\User;
        $user->user_type = "1";
        $user->first_name = "Admin";
        $user->last_name = "User";
        $user->email = "admin@example.com";
        $user->password = Hash::make('123456');
        $user->status = "1";
        $user->save();

        // Update user detail 
        /*$user = App\User::find(2);
        $user->user_type = 0;
        $user->save();
        dd($user->toArray());*/
        // $this->call(UsersTableSeeder::class);
    }
}
