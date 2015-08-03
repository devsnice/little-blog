<?php
class adminController
{
    public function actionAll() {
        include __DIR__ . "/../views/adminViews.php";
    }

    public function actionAdd() {
        $error = [];

        if(!empty($_POST["article-add"])) {
            $newArticle = new articleShort; // no semantics

            if (empty($_POST["article-title"])) {
                $error[] = "article-title";
            }
            else {
                $newArticle->title = $_POST["article-title"];
            }

            if (empty($_POST["article-category"])) {
                $error[] = "article-category";
            }
            else {
                $newArticle->category = $_POST["article-category"];
            }

            if (empty($_POST["article-body"])) {
                $error[] = "article-body";
            }
            else {
                $newArticle->body = $_POST["article-body"];
            }

            if(empty($error)){
                $articleModels = new articleModels();

                $articleModels->addArticle($newArticle); // true, if article success is added
            }
            else {
                echo "Fill all field for adding article on site";
            }
        }
    }

    public function actionDelete() {
        echo "Delete article on site";
    }

    public function actionUpdate() {
        echo "Update article on site";
    }

    public function actionSetting() {

    }
}