<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('groups')->insert([
            'groupid' => 'G1',
            'name' => 'Badminton',
            'leadtrainer' =>''
        ]);
    }
}
