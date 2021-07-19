<?php 

$db = new PDO('mysql:host=localhost;dbname=task3', 'root', 'qwer1234');

$stmt = $db->query("SELECT * FROM articles");


while ($row = $stmt->fetch())
{
  print_r($row);
}