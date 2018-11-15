<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'username' => 'hasee',
            'email' => 'hasee',
            'password' => Hash::make('hasee'),
            'remember_token' => str_random(10)
        ]);
    }
}
