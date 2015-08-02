<?php

class articleModels
{
    protected $db;
    protected $dbTable = 'article';

    function __construct() {
        $this->db = new db();
    }

    public function getAllArticle($typeObject = "articleShort") {
        $result = [];
        $query = "SELECT * FROM " . $this->dbTable;

        $result = $this->db->select($query, $typeObject);

        return $result;
    }

    public function getArticle($id) {
        $result = [];
        $query = "SELECT * FROM " . $this->dbTable . "WHERE id=" . $id;

        return result;
    }

    public function addArticle($article) {
        $query = "INSERT INTO `article`(`user`, `title`, `category`, `body`, `data`)
                  VALUES ('admin','" . $article->title . "','" . $article->category. "','" . $article->body . "','" . $article->date . "')";

        return($this->db->insert($query));
    }
}

