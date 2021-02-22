<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhonesStore</title>
    <link rel="stylesheet" href="../style/main.css">
     <script src="js/js1.js"></script>
    <link rel="shortcut icon" href="../images/img.jpg">


</head>
<body>
      <!-- header -->
    <?php include_once('Header.php') ?>
    <!-- product -->			
        <div class="produit_fond"> 
            <img src="../images/home_slider_3.jpg" alt="LG">
        </div>
       
        <div class="produit">
             <div class="produit_img"> <img src="../images/lg_1.jpg" alt="G7"></div>
             <div class="product_new">Nouveau</div>
             <div class="produit_nom">G7  <br> 120 000 DA </div>
             <div class="fiche"> 
                   <ul>
                        <li> <b>Ecran :</b> 6.1"</li>
                        <li> <b>Camera  :</b> 25 Mpx 15 Mpx</li>
                        <li> <b>Batterie :</b> 4800 mAh</li>
                        <li> <b>ROM :</b> 64 Go</li>
                        <li> <b>RAM :</b> 4 Go</li>
                        <li> <b>Processeur :</b> Snapdragon 845</li>
                   </ul> 
            </div>
            
            <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
        </div>
         
        <div class="produit">
                <div class="produit_img"> <img src="../images/lg_2.jpg" alt="G8"></div>
                <div class="product_sale2">Remise</div>
                <div class="produit_nom">G8<br> <s id="trait">140 000 DA</s> <br> 130 000 DA <br> </div>
                <div class="fiche"> 
                   <ul>
                        <li> <b>Ecran :</b> 6.5"</li>
                        <li> <b>Camera  :</b> 32 Mpx 25 Mpx</li>
                        <li> <b>Batterie :</b> 4900 mAh</li>
                        <li> <b>ROM :</b> 128 Go</li>
                        <li> <b>RAM :</b> 8 Go</li>
                        <li> <b>Processeur :</b> Snapdragon 889</li>
                   </ul>
               </div>
               <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
           </div>

           <div class="produit">
                <div class="produit_img"> <img src="../images/lg_3.jpg" alt="Optimus l9"></div>
                
                <div class="produit_nom">Optimus l9 <br> 35 000 DA <br> </div>
                <div class="fiche"> 
                    <ul>
                        <li> <b>Ecran :</b> 5.2"</li>
                        <li> <b>Camera  :</b> 8 Mpx 5 Mpx</li>
                        <li> <b>Batterie :</b> 3200 mAh</li>
                        <li> <b>ROM :</b> 8 Go</li>
                        <li> <b>RAM :</b> 1 Go</li>
                        <li> <b>Processeur :</b> Snapdragon 610</li>
                   </ul>
               </div>

               <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
           </div>

           <div class="produit">
                <div class="produit_img"> <img src="../images/lg_4.jpg" alt="v10"></div>
                
                <div class="produit_nom">v10 <br> 47 000 DA <br></div>
                <div class="fiche"> 
                <ul>
                        <li> <b>Ecran :</b> 5.8"</li>
                        <li> <b>Camera  :</b> 18 Mpx 12 Mpx</li>
                        <li> <b>Batterie :</b> 3800 mAh</li>
                        <li> <b>ROM :</b> 16 Go</li>
                        <li> <b>RAM :</b> 2 Go</li>
                        <li> <b>Processeur :</b> Snapdragon 745</li>
                   </ul> 
               </div>
               

               <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
           </div>
       <!--footer-->
       <?php 
       include_once("footer.php");
       ?>
       

</body>
</html>