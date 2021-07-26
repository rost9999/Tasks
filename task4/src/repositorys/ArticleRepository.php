<?php

namespace task4\repositorys;

class ArticleRepository
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=task4', 'root', 'qwer1234');
    }

    public function get_all(){
        $stmt = $this->db->query("SELECT * FROM `articles`");
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $articles;
    }
    public function get_article($id){
        $stmt = $this->db->query("SELECT * FROM `articles` WHERE `id` = $id");
        $article = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $article;
    }


}
