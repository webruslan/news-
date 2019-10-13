<?php

namespace application\controllers;

use application\core\Controller;
use application\models\News;

class NewsController extends Controller
{


    public function newsAction()
    {
        $result = $this->model->getNews(5, $this->route['id']);
        $count = $this->model->getCount(5);
        $vars = [
            'news' => $result,
            'pagesCount' => $count
        ];
        $this->view->render('Новости', $vars);
    }

    public function viewsAction()
    {
        $newsModel = new News;
        $vars = [
            'news' => $newsModel->newsData($this->route['id']),
        ];

        $this->view->render('Детальная', $vars);
    }
}