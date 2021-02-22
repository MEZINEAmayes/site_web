<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhonesStore</title>
    <link rel="stylesheet" href="../style/main.css">
    <link rel="shortcut icon" href=".../images/img.jpg">

</head>
<body>
    <!-- Header -->

    <?php include_once('Header.php') ?>

    <!-- produits -->	

        <div class="produit_fond"> 
            <img src="../images/home_slider_5.jpg" alt="Sony">
        </div>
       
        <div class="produit">
             <div class="produit_img"> <img src="../images/sony xperia xz1.jpg" alt="Xperia Z1 "></div>
             <div class="product_new">Nouveau</div>
             <div class="produit_nom">Xperia Z1  <br> 60 000 DA </div>
             <div class="fiche"> 
                 <ul>
                     <li> <b>Ecran :</b> 7" </li>
                     <li> <b>Camera :</b> 22 Mpx  16 Mpx</li>
                     <li> <b>Batterie :</b> 4000 mAh</li>
                     <li> <b>ROM :</b> 16 Go</li>
                     <li> <b>RAM :</b> 2 Go</li>
                     <li> <b>Processeur :</b> Adreno 310</li>
                </ul> 
            </div>
            
            <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
        </div>
         
        <div class="produit">
                <div class="produit_img"> <img src="../images/sony xperia xa1.jpg" alt="Xperia XA1"></div>
                <div class="product_sale2">Remise</div>
                <div class="produit_nom">Xperia XA1 <br> <s id="trait"> 51 000 DA</s> <br> 45 000 DA <br> </div>
                <div class="fiche"> 
                    <ul>
                     <li> <b>Ecran :</b> 6.5"</li>
                     <li> <b>Camera :</b> 16 Mpx  8 Mpx </li>
                     <li> <b>Batterie :</b> 3500 mAh</li>
                     <li> <b>ROM :</b> 32 Go</li>
                     <li> <b>RAM :</b> 3 Go</li>
                     <li> <b>Processeur :</b> Adreno 330</li>
                   </ul> 
               </div>
               <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
           </div>

           <div class="produit">
                <div class="produit_img"> <img src="../images/sony xperia 1.jpg" alt="Xperia 1"></div>
                
                <div class="produit_nom">Xperia 1 <br> 150 000 DA <br> </div>
                <div class="fiche"> 
                    <ul>
                     <li> <b>Ecran :</b> 6"  </li>
                     <li> <b>Camera :</b> 48 Mpx 20Mpx</li>
                     <li> <b>Batterie :</b> 2800 mAh</li>
                     <li> <b>ROM :</b> 64 Go</li>
                     <li> <b>RAM :</b> 6 Go</li>
                     <li> <b>Processeur :</b> Snapdragon 861</li>
                   </ul> 
               </div>

               <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
           </div>

           <div class="produit">
                <div class="produit_img"> <img src="../images/xperia L2.jpg" alt="Xperia L2"></div>
                
                <div class="produit_nom">Xperia L2 <br> 89 000 DA <br></div>
                <div class="fiche"> 
                    <ul>
                        <li> <b>Ecran :</b> 5.5" </li>
                        <li> <b>Camera  :</b> 13 Mpx 13 Mpx</li>
                        <li> <b>Batterie :</b> 3200 mAh</li>
                        <li> <b>ROM :</b> 16 Go</li>
                        <li> <b>RAM :</b> 2 Go</li>
                        <li> <b>Processeur :</b> Adreno 450</li>
                   </ul> 
               </div>
               

               <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
           </div>
     
 <!--footer-->
 <?php include_once("footer.php"); ?>



</body>
</html>