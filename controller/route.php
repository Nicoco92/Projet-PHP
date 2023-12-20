<?php

$page = $_GET['page'];

if ($page == 'accueil') {
    include('view/accueil.php');

} 
 elseif ($page == 'articles') {
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticles();
}
 elseif ($page == 'inscription') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->setUser();
}
 elseif ($page == 'authentification') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->getAuthentification();
}
elseif($page == 'series'){
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticles();
    
}

elseif($page== '13reasonwhy'){
   // include('view/13reasonwhy.php');
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticlesByID();
}
elseif($page== 'cb'){
    // include('view/cb.php');
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticlescb();
}
elseif($page =='ob'){
    //include('view/ob.php');
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticlesob();
}

elseif($page== 'tlou'){
    //include('view/tlou.php');
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticlestlou();
}
elseif($page== 'twd'){
    //include('view/twd.php');
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticlestwd();
}


 elseif ($page == 'exit') {
    $_SESSION=array();
}



else {
    echo 'page introuvable';
}