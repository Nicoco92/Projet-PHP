<link href="style.css" rel="stylesheet">



<?php foreach ($articles as $article) { 
            if($article['id'] == 5) {?>
            <div class="titre">
                <?= $article['name']?>
            </div>
            <div class="affiche">
                <img src="<?php echo $article['image2']; ?>">
            </div>
            <div class="information">
                <div class="resumer">
                <?= $article['description']?>
                </div>
                <div class="detail">
                <p>Quelques informations supplémentaire. <br>
                    Réalisateur: <?= $article['auteur']?> <br>
                    Année de parution: <?= $article['date']?>
                </p>
                </div>
            </div>
            
            

            <?php }} ?>