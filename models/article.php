<?php

class modelArticle
{
    protected $db;
    protected $dbTable = 'article';

    function __construct($db) {
        $this->db = $db;
    }

public function getAllArticle() {
    $result = [];
    $query = "SELECT * FROM " . $this->dbTable;

    $result = $this->db->select($query);

    return $result;
}

public function getArticle($id) {
    $result = [];
    $query = "SELECT * FROM " . $this->dbTable . "WHERE id=" . $id;

    return result;
}
}

