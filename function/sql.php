<?php

// Class form work with DataBase

class db {
    private $db = "blog";
    private $login  = "root";
    private $pass   = "";
    private $link;

    // Connect to db
    function connect() {
        if($this->link = mysql_connect("localhost", $this->login, $this->pass)) {
            mysql_select_db($this->db);
            return true;
        }
        else {
            return false;
        }
    }

    // Disconnect fron db
    function disconnect() {
        mysql_close($this->link);
    }

    // Insert data in db
    function insert($query) {
        if($this->connect()) {
            $result = mysql_query($query);
            return $result; // true or false
        }
        else {
            return false;
        }
    }

    // Select data from db
    function select($query) {
        $result = [];

        if($this->connect()) {
            $answer = mysql_query($query);

            while($res = mysql_fetch_assoc($answer)) {
                $result[] = $res;
            }
        }

        return $result; //array of element;
    }

    // Update data in db
    function upgrade($query) {
        if($this->connect()) {
            $result = mysql_query($query);
        }
        else {
            $result = false;
        }

        return $result; // true or false
    }

    // Delete data from db
    function delete($query) {
        if($this->connect()) {
            $result = mysql_query($query);
        }
        else {
            $result = false;
        }

        return $result; // true or false
    }


}