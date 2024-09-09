<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /*

    # Carefully completing the string and making sure the final version is fully handled

full_updated_answers_all_fixed = {
    'What drives you to work hard in life?': [
        {'answer_text': 'The need to do things perfectly.', 'type_1_weight': 3, 'type_2_weight': 0, 'type_3_weight': 0, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
        {'answer_text': 'The need to achieve and be successful.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 3, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
        {'answer_text': 'The need to avoid conflict and maintain harmony.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 0, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 3},
    ],
    'How do you feel when someone criticizes your work?': [
        {'answer_text': 'I feel frustrated and anxious about mistakes.', 'type_1_weight': 3, 'type_2_weight': 0, 'type_3_weight': 0, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
        {'answer_text': 'I take the feedback and use it to improve.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 0, 'type_4_weight': 3, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
        {'answer_text': 'I feel hurt and unappreciated.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 0, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 3, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
    ],
    'What makes you feel most fulfilled?': [
        {'answer_text': 'Being loved and appreciated by others.', 'type_1_weight': 0, 'type_2_weight': 3, 'type_3_weight': 0, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
        {'answer_text': 'Achieving success and recognition.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 3, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
        {'answer_text': 'Experiencing new and exciting things.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 0, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 3, 'type_8_weight': 0, 'type_9_weight': 0},
    ],
    'How do you react when someone doesn’t appreciate your efforts?': [
        {'answer_text': 'I feel hurt and try to help them more.', 'type_1_weight': 0, 'type_2_weight': 3, 'type_3_weight': 0, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
        {'answer_text': 'I move on and focus on my goals.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 3, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
        {'answer_text': 'I withdraw and feel misunderstood.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 0, 'type_4_weight': 3, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
    ],
    'How important is success to you?': [
        {'answer_text': 'Success is everything to me.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 3, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
        {'answer_text': 'It is important but relationships matter more.', 'type_1_weight': 0, 'type_2_weight': 3, 'type_3_weight': 0, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
        {'answer_text': 'I enjoy success, but I prioritize inner peace.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 0, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 3},
    ],
    'How do you feel when you don’t meet a goal?': [
        {'answer_text': 'I feel deeply disappointed.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 3, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
        {'answer_text': 'I reflect on what went wrong and move forward.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 0, 'type_4_weight': 3, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
        {'answer_text': 'I feel anxious and lose focus on future goals.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 0, 'type_4_weight': 0, 'type_5_weight': 0, 'type_6_weight': 3, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
    ],
    'How do you express your emotions?': [
        {'answer_text': 'I prefer to keep them private.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 0, 'type_4_weight': 3, 'type_5_weight': 0, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
        {'answer_text': 'I express them openly.', 'type_1_weight': 0, 'type_2_weight': 0, 'type_3_weight': 0, 'type_4_weight': 0, 'type_5_weight': 3, 'type_6_weight': 0, 'type_7_weight': 0, 'type_8_weight': 0, 'type_9_weight': 0},
        {'answer_text': 'I try to balance my emotions and avoid overwhelming others.', '


     */

    public function run()
    {
        $answers = [
            ['id' => 1, 'question_id' => 1, 'answer_text' => 'I follow a structured and logical process.', 'type_1_weight' => 3, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 2, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 2, 'question_id' => 1, 'answer_text' => 'I consult with others and consider their needs.', 'type_1_weight' => 0, 'type_2_weight' => 3, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 2, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 1],
            ['id' => 3, 'question_id' => 1, 'answer_text' => 'I make quick decisions based on intuition and gut feelings.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 3, 'type_8_weight' => 2, 'type_9_weight' => 0],
            ['id' => 4, 'question_id' => 2, 'answer_text' => 'I want to feel valued and appreciated.', 'type_1_weight' => 0, 'type_2_weight' => 3, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 1],
            ['id' => 5, 'question_id' => 2, 'answer_text' => 'I enjoy sharing new ideas and experiences.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 3, 'type_8_weight' => 0, 'type_9_weight' => 1],
            ['id' => 6, 'question_id' => 2, 'answer_text' => 'I seek deep emotional connection and understanding.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 3, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 7, 'question_id' => 3, 'answer_text' => 'I withdraw and reflect on the situation.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 2, 'type_5_weight' => 3, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 8, 'question_id' => 3, 'answer_text' => 'I confront the issue head-on and solve it.', 'type_1_weight' => 2, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 3, 'type_9_weight' => 0],
            ['id' => 9, 'question_id' => 3, 'answer_text' => 'I try to avoid conflict and keep things peaceful.', 'type_1_weight' => 0, 'type_2_weight' => 2, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 3],
            ['id' => 10, 'question_id' => 4, 'answer_text' => 'To help others and be of service.', 'type_1_weight' => 2, 'type_2_weight' => 3, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 11, 'question_id' => 4, 'answer_text' => 'To be successful and recognized for my achievements.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 3, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 2, 'type_9_weight' => 0],
            ['id' => 12, 'question_id' => 4, 'answer_text' => 'To feel secure and avoid uncertainty.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 3, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 1],
            ['id' => 13, 'question_id' => 5, 'answer_text' => 'I stay calm and assess the situation logically.', 'type_1_weight' => 3, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 2, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 14, 'question_id' => 5, 'answer_text' => 'I seek reassurance from others and rely on their support.', 'type_1_weight' => 0, 'type_2_weight' => 2, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 3, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 15, 'question_id' => 5, 'answer_text' => 'I distract myself with new, exciting experiences.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 3, 'type_8_weight' => 0, 'type_9_weight' => 1],
            ['id' => 16, 'question_id' => 6, 'answer_text' => 'I take charge and solve the issue head-on.', 'type_1_weight' => 2, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 3, 'type_9_weight' => 0],
            ['id' => 17, 'question_id' => 6, 'answer_text' => 'I try to mediate and keep the peace.', 'type_1_weight' => 0, 'type_2_weight' => 2, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 3],
            ['id' => 18, 'question_id' => 6, 'answer_text' => 'I avoid conflict whenever possible.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 1, 'type_8_weight' => 0, 'type_9_weight' => 3],
            ['id' => 19, 'question_id' => 7, 'answer_text' => 'Being dependable and loyal.', 'type_1_weight' => 2, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 3, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 20, 'question_id' => 7, 'answer_text' => 'Feeling emotionally understood.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 3, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 1],
            ['id' => 21, 'question_id' => 7, 'answer_text' => 'Maintaining peace and harmony.', 'type_1_weight' => 0, 'type_2_weight' => 2, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 3],
            ['id' => 22, 'question_id' => 8, 'answer_text' => 'I listen and try to find common ground.', 'type_1_weight' => 0, 'type_2_weight' => 2, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 3],
            ['id' => 23, 'question_id' => 8, 'answer_text' => 'I assert my position and defend myself.', 'type_1_weight' => 2, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 3, 'type_9_weight' => 0],
            ['id' => 24, 'question_id' => 8, 'answer_text' => 'I feel hurt and wonder if they value me.', 'type_1_weight' => 0, 'type_2_weight' => 3, 'type_3_weight' => 0, 'type_4_weight' => 1, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 25, 'question_id' => 9, 'answer_text' => 'I plan ahead to avoid uncertainty.', 'type_1_weight' => 2, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 3, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 26, 'question_id' => 9, 'answer_text' => 'I embrace uncertainty as an opportunity for growth.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 3, 'type_8_weight' => 2, 'type_9_weight' => 0],
            ['id' => 27, 'question_id' => 9, 'answer_text' => 'I feel anxious and seek reassurance.', 'type_1_weight' => 0, 'type_2_weight' => 1, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 3, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 28, 'question_id' => 10, 'answer_text' => 'I put others\' needs before my own.', 'type_1_weight' => 0, 'type_2_weight' => 3, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 1],
            ['id' => 29, 'question_id' => 10, 'answer_text' => 'I focus on success and improvement.', 'type_1_weight' => 2, 'type_2_weight' => 0, 'type_3_weight' => 3, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 30, 'question_id' => 10, 'answer_text' => 'I seek balance and avoid overwhelming situations.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 1, 'type_8_weight' => 0, 'type_9_weight' => 3],
            ['id' => 31, 'question_id' => 11, 'answer_text' => 'I focus on what needs fixing.', 'type_1_weight' => 3, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 2, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 32, 'question_id' => 11, 'answer_text' => 'I look for ways to connect and help others.', 'type_1_weight' => 0, 'type_2_weight' => 3, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 1],
            ['id' => 33, 'question_id' => 11, 'answer_text' => 'I try to find ways to stand out and succeed.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 3, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 2, 'type_9_weight' => 0],
            ['id' => 34, 'question_id' => 12, 'answer_text' => 'I withdraw and process my feelings.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 2, 'type_5_weight' => 3, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 35, 'question_id' => 12, 'answer_text' => 'I confront the issue directly.', 'type_1_weight' => 2, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 3, 'type_9_weight' => 0],
            ['id' => 36, 'question_id' => 12, 'answer_text' => 'I try to keep things peaceful.', 'type_1_weight' => 0, 'type_2_weight' => 2, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 3],
            ['id' => 37, 'question_id' => 13, 'answer_text' => 'Discipline and achieving my goals.', 'type_1_weight' => 3, 'type_2_weight' => 0, 'type_3_weight' => 2, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 38, 'question_id' => 13, 'answer_text' => 'Being flexible and open to new experiences.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 3, 'type_8_weight' => 0, 'type_9_weight' => 1],
            ['id' => 39, 'question_id' => 13, 'answer_text' => 'Feeling secure and avoiding surprises.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 3, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 1],
            ['id' => 40, 'question_id' => 14, 'answer_text' => 'I take charge and make sure things are efficient.', 'type_1_weight' => 3, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 2, 'type_9_weight' => 0],
            ['id' => 41, 'question_id' => 14, 'answer_text' => 'I listen to others and meet their needs.', 'type_1_weight' => 0, 'type_2_weight' => 3, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 1],
            ['id' => 42, 'question_id' => 14, 'answer_text' => 'I stay in the background and avoid attention.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 3, 'type_5_weight' => 2, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 43, 'question_id' => 15, 'answer_text' => 'I get anxious and seek advice from others.', 'type_1_weight' => 0, 'type_2_weight' => 2, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 3, 'type_7_weight' => 0, 'type_8_weight' => 0, 'type_9_weight' => 0],
            ['id' => 44, 'question_id' => 15, 'answer_text' => 'I face challenges head-on and take control.', 'type_1_weight' => 2, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 0, 'type_8_weight' => 3, 'type_9_weight' => 0],
            ['id' => 45, 'question_id' => 15, 'answer_text' => 'I adapt and look for new possibilities.', 'type_1_weight' => 0, 'type_2_weight' => 0, 'type_3_weight' => 0, 'type_4_weight' => 0, 'type_5_weight' => 0, 'type_6_weight' => 0, 'type_7_weight' => 3, 'type_8_weight' => 0, 'type_9_weight' => 1],
        ];

        // Insert answers into the answers table
        DB::table('answers')->insert($answers);
    }
}
