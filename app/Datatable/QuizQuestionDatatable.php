<?php

namespace App\Datatable;

use App\Models\QuizQuestion;
use Illuminate\Database\Eloquent\Builder;

class QuizQuestionDatatable extends BaseDatatable
{

    public function __construct()
    {
        parent::__construct(QuizQuestion::class, [
            'id' => '№',
            'quiz_title' => 'Quiz Title',
            'question_text' => 'Question',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at'
        ], [
            'actions' => [
                'title' => 'Actions',
                'view' => 'admin.pages.quizquestion.table_actions'
            ]
        ]);
    }

    protected function query(): Builder
    {
        $quizId = $_GET['quiz_id'];
        $query = $this->baseQueryScope()
            ->leftJoin('quizzes', 'quiz_questions.quiz_id', '=', 'quizzes.id')
            ->select('quiz_questions.*', 'quizzes.title as quiz_title')
            ->where('quiz_questions.quiz_id', $quizId)
            ->orderBy('created_at', 'asc');
        if (isset($_GET['filters'])) {
            $filters = $_GET['filters'];
            foreach ($filters as $filter) {
                $filter = explode('--', $filter);
                $query->where($filter[0], $filter[1]);
            }
        }

        if ($this->getSearchInput()) {
            $query->where('quiz_questions.question_text', 'LIKE', '%' . $this->getSearchInput() . '%');
        }
        return $query;
    }
}
