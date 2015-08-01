<?php
class articleController
{
    public function actionAll() {
        // Get all article from DataBase
        $db = new db();
        $modelArticle = new articleModels($db);

        // Get articles from Articles's model
        $articles = $modelArticle->getAllArticle("articleShort");

        // View articles
        include __DIR__ . "/../views/indexViews.php";
    }
}