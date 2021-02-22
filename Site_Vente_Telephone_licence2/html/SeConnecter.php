
<html>
  <head>
     <title>Se connecter</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/form.css">
        <link rel="stylesheet" href="../style/main.css">
  </head>
  <body>
     <!-- header -->

     <?php include_once('Header.php') ?>

     <!-- Formulaire -->
     <form method=”POST” action="" class="container1">
       
       <div class="container2">
         <label for="uname"><b>Nom d'utilisateur</b></label>
         <input type="text" placeholder="Veuillez saisir votre nom d'utilisateur" name="uname" id= "user">
         <label for="psw"><b>Mot de passe</b></label>
         <input type="password" placeholder="Veuillez saisir votre mot de passe" name="psw" id= "pass" onblur="verifPsw()">
         <button type="submit" class="btn" onclick="control()">Se connecter</button>
         <button class="btn"> <a class="ta" href="Inscription.php"> Créer un compte</a> </button>
         <span id="msg" class="alert"></span>
         <span class="pswa"><a href="#">Mot de passe oublié ?</a></span>
       </div>
     </form>

     <!-- Footer -->

     <?php include_once('Footer.php') ?>
     
     
     <script src="../js/Seconnecter.js" defer></script>
  </body>
</html>