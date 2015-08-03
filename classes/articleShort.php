<?php

class articleShort extends article
{
    public function view() {
        echo "
             <article class='article article_main'>
                <header class='article-header clearfix'>
                    <h2 class='article__title'>
                        <a href='/article/full/" . $this->id . "'>" . $this->title . "</a>
                    </h2>

                    <div class='article__categories'>
                        <a href='/article/category/" . $this->category . "'>" . $this->category . "</a>
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