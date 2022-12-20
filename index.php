<?php
require 'functions.php';
require 'router.php';

//Connect MySQL database.

$dsn = "mysql:host=localhost;port=3306;dbname=db_laraphp;user=root;charset=utf8mb4";

$pdo = new PDO($dsn,);
$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
