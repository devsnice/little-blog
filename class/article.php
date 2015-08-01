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

class articleShort extends article
{
    public function view() {
        echo "
             <article class='article article_main'>
                <header class='article-header clearfix'>
                    <h2 class='article__title'>
                        <a href='/id?=" . $this->id . "'>" . $this->title . "</a>
                    </h2>

                    <div class='article__categories'>
                        <a href='/category?=" . $this->category . "'>" . $this->category . "</a>
                    </div>
             </header>

              <div>
                " .
                $this->body
                . "
              </div>

              <footer class='article-footer'>
                    <span class='i-bold'>Add: </span> $this->user
              </footer>
            </article>

        ";
    }
}

class articleFull extends article
{
    public function view() {
        echo "

        ";
    }
}