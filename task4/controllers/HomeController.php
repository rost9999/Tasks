<?php
include "repository/ArticleRepository.php";
class HomeController
{
    public function __construct()
    {
        $this->pdo = new ArticleRepository;
        $this->db = $this->pdo->get();
    }

    public function default()
    {
        $stmt = $this->db->query("SELECT * FROM `articles`");
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include "pages/home.php";

    }
}
