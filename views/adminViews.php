<?php include '/blocks/adminpanel/header.php'; ?>

<main class="main" role="main">
    <div class="wrapper clearfix">

        <main class="main" role="main">
            <div class="wrapper">
                <form action="add" method="POST" class="form-add">
                    <h3 class="form-add__title">
                        Add article on site
                    </h3>

                    <label class="form-add__label">

                        <input type="text" placeholder="Введите название" name="article-title" class="form-add__input input">
                    </label>

                    <label class="form-add__label">

                        <input type="text" placeholder="Название категорию" name="article-category" class="form-add__input input">
                    </label>

                    <label class="form-add__label">

                        <textarea name="article-body" class="form-add__textarea" placeholder="Текст статьи"></textarea>
                    </label>

                    <input type="submit" name="article-add" class="form-add__input form-add__input_submit button">

                </form>
            </div>
        </main>

    </div>
</main>
