<?php

namespace App\Datatable;

use App\Models\Quiz;
use Illuminate\Database\Eloquent\Builder;

class QuizDatatable extends BaseDatatable
{

    public function __construct()
    {
        parent::__construct(Quiz::class, [
            'id' => '№',
            'category_title' => 'Category',
            'title' => 'Title',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at'
        ], [
            'actions' => [
                'title' => 'Actions',
                'view' => 'admin.pages.quiz.table_actions'
            ]
        ]);
    }

    protected function query(): Builder
    {
        $query = $this->baseQueryScope()
            ->leftJoin('categories', 'quizzes.category_id', '=', 'categories.id')
            ->select('quizzes.*', 'categories.title as category_title')
            ->where('categories.parent_id', 1)
            ->orderBy('created_at', 'asc');

        if (isset($_GET['filters'])) {
            $filters = $_GET['filters'];
            foreach ($filters as $filter) {
                $filter = explode('--', $filter);
                $query->where($filter[0], $filter[1]);
            }
        }

        if ($this->getSearchInput()) {
            $query->where('categories.title', 'LIKE', '%' . $this->getSearchInput() . '%');
        }

        return $query;
    }
}
