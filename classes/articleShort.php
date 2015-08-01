<?php

class articleShort extends article
{
    public function view() {
        echo "
             <article classes='article article_main'>
                <header classes='article-header clearfix'>
                    <h2 classes='article__title'>
                        <a href='/id?=" . $this->id . "'>" . $this->title . "</a>
                    </h2>

                    <div classes='article__categories'>
                        <a href='/category?=" . $this->category . "'>" . $this->category . "</a>
                    </div>
             </header>

              <div>
                " .
            $this->body
            . "
              </div>

              <footer classes='article-footer'>
                    <span classes='i-bold'>Add: </span> $this->user
              </footer>
            </article>

        ";
    }
}