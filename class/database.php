<?php

require __DIR__ . "/../class/article.php";

// Class form work with DataBase

class db {
    private $db = "blog";
    private $login  = "root";
    private $pass   = null;
    private $typeObject = null;
    private $link;

    // Connect to db
    function __construct($typeObject) {
        $this->typeObject = $typeObject;
        mysql_connect("localhost", $this->login, $this->pass);
        mysql_select_db($this->db);
    }

    // Disconnect fron db
    function disconnect() {
        mysql_close($this->link);
    }

    // Insert data in db
    function insert($query) {
        $result = mysql_query($query);
        return $result; // true or false
    }

    // Select data from db
    function select($query) {
        $result = [];

        $answer = mysql_query($query);

        while($res = mysql_fetch_object($answer, $this->typeObject)) {
            $result[] = $res;
        }

        return $result; //array of element;
    }

    // Update data in db
    function upgrade($query) {
        $result = mysql_query($query);
    }

    // Delete data from db
    function delete($query) {
        $result = mysql_query($query);
    }


}