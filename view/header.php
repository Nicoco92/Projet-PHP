<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap');

      body{
        font-family:'Oswald', sans-serif;
      }
        .menu{
    background-color:rgb(40, 40, 40);
 }
 .btn {
   font-size: 17px;
   background: transparent;
   border: none;
   padding: 1em 1.5em;
   color: white;
   text-transform: uppercase;
   position: relative;
   transition: .5s ease;
 }
 
 .btn::before {
   content: '';
   position: absolute;
   left: 0;
   bottom: 0;
   height: 2px;
   width: 0;
   background-color: #ffc506;
   transition: .5s ease;
 }
 
 .btn:hover {
   color: white;
   transition-delay: .5s;
 }
 
 .btn:hover::before {
   width: 100%;
 }
 a{
    color: white;
    text-decoration: none;
  }

  body{
    background-color: rgb(50, 50, 50);
    color: white;
  }
    </style>
</head>
<body>
    <header>
        <nav class="menu">
            <button class="btn"><a href="index.php?page=accueil">EfreiFlix</a></button>
            <button class="btn"><a href="?page=series">Series</a></button>
                <?php if(!isset($_SESSION['nom'])) { ?>
            <button class="btn"><a href="?page=inscription">Inscription</a></button>
            <button class="btn"><a href="?page=authentification">Authentification</a></button>
                <?php } else { ?>
            Bonjour <?=@$_SESSION['nom']?>
            <button class="btn"><a href="?page=exit">Se deconnecter</a></button>
                <?php } ?>
            
        </nav>
    </header>

