<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents(__dir__ . '/source/questions_and_answers.sql'));
//        User::truncate();
        $user = \App\Models\User::factory(1)->create([
             'username' => '141D',
             'email' => 'jaagup.tomingas@gmail.com',
             'password' => 'q1w2e3r4t5y6',
        ]);
        Quiz::factory(9)->create([
            'submitted' => true,
            'category' => 'art',

        ]);
//         Quiz::factory(2)->create([
//             'user_id' => $user,
//         ]);
//        \App\Models\User::factory(15)->create();
    }
}
