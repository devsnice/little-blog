<?php include '/blocks/header.php'; ?>
<?php include '/blocks/navigation.php'; ?>

<main class="main" role="main">
    <div class="wrapper clearfix">

        <!-- All articles -->
        <section class="main-articles">
            <?php foreach ( $articles as $article ): ?>
                <?php $article->view(); ?>
            <?php endforeach; ?>
        </section>

        <!-- Navigation by category -->

    </div>
</main>

<?php include 'blocks/footer.php'; ?>

</body>
</html>