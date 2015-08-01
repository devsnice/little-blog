<?php
    require __DIR__ . "/class/database.php";
    require __DIR__ . "/models/article.php";

    // Create to connect for db
    $db = new db("articleShort");
    $modelArticle = new modelArticle($db);

    // Get all article from DataBase
    $articles = $modelArticle->getAllArticle();

    // View articles
    include __DIR__ . "/views/index.php";
?>