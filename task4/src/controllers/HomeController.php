<?php

namespace task4\controllers;

use task4\repositorys\ArticleRepository;

class HomeController
{
    public function __construct()
    {
        $this->pdo = new ArticleRepository;
    }

    public function default()
    {
        $articles = $this->pdo->get_all();
        include "pages/home.php";



    }
}
