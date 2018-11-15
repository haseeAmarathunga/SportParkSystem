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
            'username' => 'admin',
            'email' => 'haseeamarathunga@gmail.com',
            'password' => 'Hasee123',
            'remember_token' => str_random(10)
        ]);
    }
}
