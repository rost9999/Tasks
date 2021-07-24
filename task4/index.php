<?php
include "./controllers/HomeController.php";
$constolers = new HomeController;
$articles = $constolers->default();
include "./pages/home.php";
?>
