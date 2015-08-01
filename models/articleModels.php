<?php

class modelArticle
{
    protected $db;
    protected $dbTable = 'article';

    function __construct($db) {
        $this->db = $db;
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
}

