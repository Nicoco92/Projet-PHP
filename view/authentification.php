<style> 

form{
    background-color: rgb(40, 40, 40);
    padding: 10px;
    border-radius: 6px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0);
  }
    .formulaire{
    display: flex;
    flex-direction: column;
    background-color: rgb(50, 50, 50);
    align-items: center;
    justify-content: center;
    height: 80vh;
  }
  h2{
    text-align: center;
    font-size: 20px;
  }
  hr{
    margin: 10px 0;
    background-color: white;
    border: O;
    height: 1px;
    width: 100%;
  }
  .name-field{
    display: flex;
    width: 100%;
    justify-content: space-between;
  }
  .name-field div {
    display: flex;
    flex-direction: column;
  }
  .name-field div{
    width: 49%;
  }
  label{
    margin-bottom: 6px;
  }
  input{
    margin-bottom: 5px;
    padding: 5px;
    outline: 0;
    border: 1px solid black;
  }
  input:focus{
    border: 1px solid #ffc506;
  }
</style>

<div class="formulaire">

<form action="" method="post">

<h2>Connexion </h2>
<hr>

<div class="name-field">

    <div><label>Email</label> <input type="email" name="email"></div><br>
    <div><label>Mot de passe </label> <input type="password" name="mdp"></div>
    <div><input type="submit" value="Se connecter"></div>
</div>
</form>
</div>