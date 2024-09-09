<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            ['id' => 1, 'question_text' => 'How do you typically approach decision-making?', 'multiplier' => 1.0],
            ['id' => 2, 'question_text' => 'What motivates you to connect with others?', 'multiplier' => 1.5],
            ['id' => 3, 'question_text' => 'How do you handle failure?', 'multiplier' => 1.25],
            ['id' => 4, 'question_text' => 'What is your primary goal in life?', 'multiplier' => 1.5],
            ['id' => 5, 'question_text' => 'How do you typically respond to stress?', 'multiplier' => 1.5],
            ['id' => 6, 'question_text' => 'How do you usually resolve conflicts?', 'multiplier' => 1.25],
            ['id' => 7, 'question_text' => 'What is most important to you in your relationships?', 'multiplier' => 1.0],
            ['id' => 8, 'question_text' => 'How do you feel when someone disagrees with you?', 'multiplier' => 1.25],
            ['id' => 9, 'question_text' => 'How do you handle uncertainty in life?', 'multiplier' => 1.5],
            ['id' => 10, 'question_text' => 'How do you prioritize your personal needs?', 'multiplier' => 1.0],
            ['id' => 11, 'question_text' => 'What do you tend to focus on in a new situation?', 'multiplier' => 1.5],
            ['id' => 12, 'question_text' => 'How do you react when someone disappoints you?', 'multiplier' => 1.25],
            ['id' => 13, 'question_text' => 'What is most important to you in your daily routine?', 'multiplier' => 1.0],
            ['id' => 14, 'question_text' => 'How do you behave in a group setting?', 'multiplier' => 1.0],
            ['id' => 15, 'question_text' => 'How do you typically handle unexpected challenges?', 'multiplier' => 1.5],
        ];

        DB::table('questions')->insert($questions);
    }
}
