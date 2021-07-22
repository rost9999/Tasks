<?php





$data = ($_POST);

function create($data)
{
    $db = new PDO('mysql:host=localhost;dbname=task3', 'root', 'qwer1234');
    $stmt = $db->prepare("INSERT INTO articles (name, text) VALUES (:name, :text)");
    $stmt->execute(['name' =>$data['name'],'text'=>$data['text']]);
    echo('post was created');

}

create($data);