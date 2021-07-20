<?php

class  ArticlesController
{

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=task3', 'root', 'qwer1234');
    }

    function read($id = '')
    {
        if ($id == '') {
            $stmt = $this->db->query("SELECT * FROM `articles`");
        } else {
            $stmt = $this->db->query("SELECT * FROM `articles` WHERE `id` = $id");
        }
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    }

    function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO articles (name, text) VALUES (:name, :text)");
        $stmt->execute(['name' =>$data['name'],'text'=>$data['text']]);
        var_dump('post was created');

    }

    function update($id)
    {

    }

    function delete($id)
    {

    }
}