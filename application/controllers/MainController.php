<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction() {
        $this->view->redirect('news');
    }
}