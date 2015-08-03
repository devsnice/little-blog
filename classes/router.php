<?php

class router
{
    public $url;

    function __construct() {
        $this->url = $_SERVER["REQUEST_URI"];
        $this->url = trim($this->url, "/"); // delete "/" from begin and end of url
    }

    public function path() {
        $result = ["controller"=>"article", // value for default
                   "action"=>"all",
                   "param"=>""];


        $parseUrl = explode("/", $this->url); // parseUrl[0] = controller, parseUrl[1] = method

        if(!empty($parseUrl[0])) {
            $result["controller"] = $parseUrl[0];
        }

        if(!empty($parseUrl[1])) {
            $result["action"] = $parseUrl[1];
        }

        if(!empty($parseUrl[2])) {
            $result["param"] = $parseUrl[2];
        }

        return $result;
    }
}