<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhonesStore</title>
    <link rel="stylesheet" href="../style/main.css">
    <link rel="shortcut icon" href="../images/img.jpg">
</head>
<body>
       <!-- Header -->

       <?php include_once('Header.php') ?>

    <!-- product -->			
        <div class="produit_fond"> 
            <img src="../images/home_slider_1.jpg" alt="Apples">
        </div>
       
        <div class="produit">
             <div class="produit_img"> <img src="../images/iphone_1.jpg" alt="Iphone Xs Max"></div>
             <div class="product_new">Nouveau</div>
             <div class="produit_nom">Iphone Xs Max <br> 250 000 DA </div>
             <div class="fiche"> 
                <ul>
                     <li> <b>Ecran :</b> 7" </li>
                     <li> <b>Camera :</b> 22 Mpx  16 Mpx</li>
                     <li> <b>Batterie :</b> 2900 mAh</li>
                     <li> <b>ROM :</b> 128 Go</li>
                     <li> <b>RAM :</b> 4 Go</li>
                     <li> <b>Processeur :</b> Apple A11 Bionic</li>
                </ul> 
            </div>
            
            <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
        </div>
         
        <div class="produit">
                <div class="produit_img"> <img src="../images/iphone_2.jpg" alt="Iphone X"></div>
                <div class="product_sale2">Remise</div>
                <div class="produit_nom">Iphone X<br> <s id="trait">210 000 DA</s> <br> 190 500 DA <br> </div>
                <div class="fiche"> 
                <ul>
                     <li> <b>Ecran :</b> 5.8" </li>
                     <li> <b>Camera :</b> 12 Mpx  12 Mpx</li>
                     <li> <b>Batterie :</b> 2700 mAh</li>
                     <li> <b>ROM :</b> 64 Go</li>
                     <li> <b>RAM :</b> 3 Go</li>
                     <li> <b>Processeur :</b> Apple A11 Bionic</li>
                </ul>  
               </div>
               <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
           </div>

           <div class="produit">
                <div class="produit_img"> <img src="../images/iphone_3.jpg" alt="Iphone 8"></div>
                
                <div class="produit_nom"> Iphone 8 <br> 150 000 DA <br> </div>
                <div class="fiche"> 
                <ul>
                     <li> <b>Ecran :</b> 5.2" </li>
                     <li> <b>Camera :</b> 13 Mpx  8 Mpx</li>
                     <li> <b>Batterie :</b> 2100 mAh</li>
                     <li> <b>ROM :</b> 32 Go</li>
                     <li> <b>RAM :</b> 3 Go</li>
                     <li> <b>Processeur :</b> Apple A10 Bionic</li>
                </ul>
               </div>
               <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
           </div>

           <div class="produit">
                <div class="produit_img"> <img src="../images/iphone_4.jpg" alt="Iphone 6"></div>
                
                <div class="produit_nom"> Iphone 6 <br> 60 000 DA <br></div>
                <div class="fiche"> 
                <ul>
                     <li> <b>Ecran :</b> 5.4" </li>
                     <li> <b>Camera :</b> 8 Mpx  8 Mpx</li>
                     <li> <b>Batterie :</b> 1800 mAh</li>
                     <li> <b>ROM :</b> 16 Go</li>
                     <li> <b>RAM :</b> 2 Go</li>
                     <li> <b>Processeur :</b> Apple A8 Bionic</li>
                </ul> 
               </div>
               

               <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
           </div>

<!--footer-->
<?php include_once("footer.php"); ?>


</body>
</html>