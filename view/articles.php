<h1>Articles</h1>

<?php foreach ($articles as $article) { ?>

        <div>
            <h2><?= $article['name'] ?></h2>
            <p><?php echo $article['image']; ?></p>
        </div>


<?php } ?>
