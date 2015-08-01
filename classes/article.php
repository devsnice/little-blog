<?php

abstract class article
{
    public $id;
    public $title;
    public $body;
    public $date;
    public $user;
    public $view;
    public $category;

    abstract public function view();
}


class articleFull extends article
{
    public function view() {
        echo "

        ";
    }
}