<?php

class ArticleRepository
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=task3', 'root', 'qwer1234');
    }

    public function get(){
        return $this->db;
    }
}
