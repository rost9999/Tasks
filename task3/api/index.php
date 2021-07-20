<?php


header('Content-Type: application/json');


require_once "ArticlesController.php";
//$json = file_get_contents('php://input');
//echo $json;

$controler = new ArticlesController();

$method = $_SERVER['REQUEST_METHOD'];
$id = $_SERVER['QUERY_STRING'];
$data = json_decode(file_get_contents('php://input'),true);


if ($method == 'GET') {
    $controler->read($id);
} elseif ($method == 'POST') {
    $controler->create($data);
}elseif ($method == 'PUT'){

}

