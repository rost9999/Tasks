<?php

class HomeController
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=task4', 'root', 'qwer1234');
    }

    public function default()
    {
        $stmt = $this->db->query("SELECT * FROM `articles`");
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $articles;

    }
}
