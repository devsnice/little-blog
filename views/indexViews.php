<?php include '/blocks/blog/header.php'; ?>
<?php include '/blocks/blog/navigation.php'; ?>

<main class="main" role="main">
    <div class="wrapper clearfix">

        <!-- All articles -->
        <section class="main-articles">
            <?php foreach ( $articles as $article ): ?>
                <?php $article->view(); ?>
            <?php endforeach; ?>
        </section>

    </div>
</main>

<?php include 'blocks/blog/footer.php'; ?>
