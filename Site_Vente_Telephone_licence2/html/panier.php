
<html>
  <head>
     <title>Panier</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/panier.css">
        <link rel="stylesheet" href="../style/main.css">
    <link rel="shortcut icon" href="../images/img.jpg">
  </head>
  
  <body>
<!-- header -->
<?php include_once('Header.php') ?>
 <!-- formulaire -->
     <form method=”POST” action="" class="container1">
      
       <div class="container2">
         
         <label for="uname"><b>Nom d'utilisateur / adresse e-mail</b></label>
         <input type="text" placeholder="Veuillez saisir votre nom d'utilisateur / @ e-mail " name="uname" id= "user">

         <fieldset>
          <legend>Veuillez choisir votre choix de payement :</legend>
          <label for="uname"><b>numéro de votre carte bancaire </b></label>
          <input type="text" placeholder="A57CV-78BR1-ERBN5-NJY62" name="carte1" id="carte" onblur="veri()">
            <div class="radio">


           <input class="carteb" type="radio" id="paypal" name="cb"> <img alt="paypal"    width="50" height="32"  border-radius="5px"  src="../images/paypal.png">
           <input class="carteb" type="radio" id="visa" name="cb"> <img alt="visa"    width="50" height="32"  border-radius="5px" src="../images/visa.png">

            </div>
      <br>

      <label for="start"><b>Date de payement :</b></label>

<input type="date"  classe="dat" id="start" name="trip-start"
       value="2019-07-10"
       min="2019-07-10" max="2022-12-31">
         <label for="q"><b>Quantité: </b></label>
<select id="qt" name="q">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
</select>
  <br>
      <button type="button" onclick="veri2()"> commander </button>
     </fieldset>
    </div>
     </form>
      <!--footer-->
    <?php 
       include_once("footer.php");
       ?>

       <!-- Script -->
       <script src="../js/panier.js" defer></script>
  </body>
</html>