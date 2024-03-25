<?php

namespace Database\Seeders;

use App\Models\SatisfactionQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SatisfactionQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $question1 = new SatisfactionQuestion;
        $question1->question_content = "¿Pregunta Número 1?";
        $question1->save();

        $question2 = new SatisfactionQuestion;
        $question2->question_content = "¿Pregunta Número 2?";
        $question2->save();

        $question3 = new SatisfactionQuestion;
        $question3->question_content = "¿Pregunta Número 3?";
        $question3->save();

        $question4 = new SatisfactionQuestion;
        $question4->question_content = "¿Pregunta Número 4?";
        $question4->save();

        $question5 = new SatisfactionQuestion;
        $question5->question_content = "¿Pregunta Número 5?";
        $question5->save();
    }
}
