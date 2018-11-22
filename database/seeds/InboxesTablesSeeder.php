<?php

use Illuminate\Database\Seeder;

class InboxesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('inboxes')->insert([
            'sender' => 'kamal',
            'reciever' => 'hasee',
            'message' => 'I want to meet you!'
        ]);
    }
}
