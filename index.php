<?php 
    if(isset($_POST['login']) && isset($_POST['pass'])){
        setcookie('login', $_POST['login'], time() + 365*24*3600);//Création de cookie login
        setcookie('pass', $_POST['pass'], time() + 365*24*3600);//Création de cookie pass
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Exercice 3</title>
  </head>
  <body>
      <div class="blockForm">
        <form action="#" method="POST"><!--Création du formulaire avec méthode POST, avec une action sur la même page '#'-->
            <label for="login" class="login">Identifiant: </label>
            <input type="text" name="login" id="login" class="login" /><br /><!--Champs à remplir pour l'identifiant-->
            <label for="login" class="pass">Mot de passe: </label>
                  <input type="password" name="pass" id="pass" class="pass" /><br /><!--Champs à remplir pour le mot de passe-->
            <input type="submit" class="sub" value="Envoyer" /><!--Bouton envoyer, pour sauvegarder les informations-->
        </form>
        <p>
            <?php
            if(isset($_POST['login']) && isset($_POST['pass'])){
              echo 'login: <b>' . $_COOKIE['login'] . '</b> mot de passe: <b>' . $_COOKIE['pass'] . '</b>';
            }
            ?>
        </p>
      </div>
  </body>
</html>
