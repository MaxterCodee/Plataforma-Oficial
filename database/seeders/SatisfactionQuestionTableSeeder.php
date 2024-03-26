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
        $question1->question_content = "El objetivo del curso fue:";
        $question1->save();

        $question2 = new SatisfactionQuestion;
        $question2->question_content = "El orden secuencial y coherente de los contenidos en el proceso de aprendizaje fue:";
        $question2->save();

        $question3 = new SatisfactionQuestion;
        $question3->question_content = "La estructuración y diseño de los vínculos del curso virtual fue:";
        $question3->save();

        $question4 = new SatisfactionQuestion;
        $question4->question_content = "Consideras que la cantidad de actividades durante el curso fue:";
        $question4->save();

        $question5 = new SatisfactionQuestion;
        $question5->question_content = "Consideras que la variedad de tareas fue:";
        $question5->save();

        $question6 = new SatisfactionQuestion;
        $question6->question_content = "El tiempo dedicado de acuerdo al calendario del curso fue:";
        $question6->save();

        $question7 = new SatisfactionQuestion;
        $question7->question_content = "La intervención y seguimiento durante el curso que te brindó el instructor fue:";
        $question7->save();

        $question8 = new SatisfactionQuestion;
        $question8->question_content = "La retroalimentación del instructor a tus dudas fue:";
        $question8->save();

        $question9 = new SatisfactionQuestion;
        $question9->question_content = "El desempeño en general del instructor fue:";
        $question9->save();

        $question10 = new SatisfactionQuestion;
        $question10->question_content = "La calidad del curso fue:";
        $question10->save();

    }
}
