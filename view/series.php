<style>
h1{
    text-align: center;
    padding-top: 10px;
}
img{
    width: 200px;
    }
    *, *::before, *::after{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
  .wrapper{
    min-height: 50vh;
    display: grid;
    place-items: center;
    padding-inline: 1.25rem;
    background: rgb(50, 50, 50);
    color: #fff;
}

.slider{
    display: flex;
    gap: .5rem;
    width: min(100%, 700px);
}

.card{
    flex: 1;
    height: 280px;
    overflow: hidden;
    border-radius: 0.625rem;
    transition: 1s ease-in-out;
    cursor: pointer;
    position: relative;
}

.card img{
    object-fit: cover;
    width: 100%;
    height: 100%;
}
.card .title{
    position: absolute;
    width: 100%;
    bottom: 0;
    left: 0;
    padding: 10px;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgb(0, 0, 0) );
    visibility: hidden;
    opacity: 0;
    transition: 1s ease-in-out;
}

.card .title h2{
    font-size: 1rem;
    white-space: nowrap;
}

.card .title p{
    font-size: .9rem;
}

.active{
    flex-grow: 5;
}

.active .title{
    visibility: visible;
    opacity: 1;
}

</style>


<h1> Nos séries disponible actuellement</h1>


<section class="wrapper">
    <div class="slider">
        <div class="card active">

            <?php foreach ($articles as $article) { 
            if($article['id'] == 1) {?>
            <img src="<?php echo $article['image']; ?>">
            <div class="title">
            <h2><?= $article['name'] ?></h2>
            <p><?= $article['date']?></p>
            <p><a href="?page=13reasonwhy">Voir plus</a></p>
            </div>

            <?php }} ?>
        </div>

        <div class="card active">

            <?php foreach ($articles as $article) { 
            if($article['id'] == 2) {?>

            <img src="<?php echo $article['image']; ?>">
            <div class="title">
            <h2><?= $article['name'] ?></h2>
            <p><?= $article['date']?></p>
            <p><a href="?page=cb">Voir plus</a></p>
            </div>

            <?php }} ?>
        </div>

        <div class="card active">

            <?php foreach ($articles as $article) { 
            if($article['id'] == 3) {?>

            <img src="<?php echo $article['image']; ?>">
            <div class="title">
            <h2><?= $article['name'] ?></h2>
            <p><?= $article['date']?></p>
            <p><a href="?page=ob">Voir plus</a></p>
            </div>

            <?php }} ?>
        </div>


        <div class="card active">

            <?php foreach ($articles as $article) { 
            if($article['id'] == 4) {?>

            <img src="<?php echo $article['image']; ?>">
            <div class="title">
            <h2><?= $article['name'] ?></h2>
            <p><?= $article['date']?></p>
            <p><a href="?page=tlou">Voir plus</a></p>
            </div>

            <?php }} ?>
        </div>

        <div class="card active">

            <?php foreach ($articles as $article) { 
            if($article['id'] == 5) {?>

            <img src="<?php echo $article['image']; ?>">
            <div class="title">
            <h2><?= $article['name'] ?></h2>
            <p><?= $article['date']?></p>
            <p><a href="?page=twd">Voir plus</a></p>
            </div>

            <?php }} ?>
        </div>
    </div>
</section>

   <script>

    const cards = document.querySelectorAll('.card');

cards.forEach(card => {
    card.addEventListener('click', () => {
        cards.forEach(c => {
            if(c !== card){
                c.classList.remove('active');
            }
        });

        card.classList.add('active');
    });
});


   </script>