<?php

$db = new PDO('mysql:host=localhost;dbname=task3', 'root', 'qwer1234');

class  ArticlesController {
// create read update delete
    function read($id=0){
        $stmt = $db->prepare("SELECT * FROM categories WHERE `id` = ?");
        $stmt->execute([$id]);
        while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
            echo 'Category name: '.$row->name;
}
    }
    
    function create($id){

    }

    function update($id){

    }

    function delete($id){
        
    }
}
