<html>
  <head>
     <title>Création de connexion</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/form.css">
        <link rel="stylesheet" href="../style/main.css">
        <link rel="shortcut icon" href="../images/img.jpg">
  </head>
  <body>
  
       <!--  header -->
      
      <?php 
       include_once("Header.php");
      ?>

       <!-- formulaire -->
      
       <form method=”POST” action="" class="container1">
         <div class="container2">
           <label for="uname"><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Veuillez saisir votre nom d'utilisateur" name="uname" id="utili">
           <label for="uname"><b>E-mail</b></label>
            <input type="text" placeholder="Veuillez saisir votre votre adresse e-mail" name="uname" id="e-mail">
           <label for="psw"><b> Mot de passe</b></label>
            <input type="password" placeholder="Veuillez saisir votre mot de passe" name="psw" id="mdp" onblur="verifPsw()" >
           <label for="psw"><b> Confirmer votre mot de passe</b></label>
            <input type="password" placeholder="Veuillez resaisir votre mot de passe" name="psw" id="conf" onblur="verification()" >
           <button type="submit" class="btn" onclick="test()">Créer</button>
           <label>
             <input class="check" type="checkbox" checked="checked" name="remember" id="rememberid">J'accepte les conditions d'utilisation
            </label>
         </div>
        </form>

        <!-- Footer -->

      <?php 
       include_once("Footer.php");
      ?>

        <script src="../js/Inscription.js" defer></script>

  </body>
</html>