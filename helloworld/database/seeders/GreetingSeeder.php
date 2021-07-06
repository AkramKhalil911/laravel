<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GreetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('greetings')->insert([
            ['greeting' => 'Hello, world!'],
            ['greeting' => 'Hallo wereld!'],
            ['greeting' => 'Bonjour le monde!'],
            ['greeting' => 'Hallo Welt!'],
            ['greeting' => 'marhabana bialealami!'],
        ]);
    }
}
