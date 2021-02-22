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
     <!-- header -->
    <?php include_once('Header.php') ?>

    <!-- product -->			
        <div class="produit_fond"> 
            <img src="../images/home_slider_4.jpg" alt="Samsung">
        </div>
       
        <div class="produit">
             <div class="produit_img"> <img src="../images/samsung_1.jpg" alt="Galaxy Fold "></div>
             <div class="product_new">Nouveau</div>
             <div class="produit_nom">Galaxy Fold <br> 250 000 DA </div>
             <div class="fiche"> 
                   <ul>
                        <li> <b>Ecran :</b> 11" 5"</li>
                        <li> <b>Camera  :</b> 13 Mpx 13 Mpx</li>
                        <li> <b>Batterie :</b> 3200 mAh</li>
                        <li> <b>ROM :</b> 64 Go</li>
                        <li> <b>RAM :</b> 6 Go</li>
                        <li> <b>Processeur :</b> Exynos 8321</li>
                   </ul> 
            </div>
            
            <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
        </div>
         
        <div class="produit">
                <div class="produit_img"> <img src="../images/samsung_2.jpg" alt="Galaxy S8"></div>
                <div class="product_sale2">Remise</div>
                <div class="produit_nom">Galaxy S8 <br> <s id="trait">90 200 DA</s> <br> 75 000 DA <br> </div>
                <div class="fiche"> 
                <ul>
                        <li> <b>Ecran :</b> 6"</li>
                        <li> <b>Camera  :</b> 13 Mpx 13 Mpx</li>
                        <li> <b>Batterie :</b> 3200 mAh</li>
                        <li> <b>ROM :</b> 32 Go</li>
                        <li> <b>RAM :</b> 4 Go</li>
                        <li> <b>Processeur :</b> Exynos 8340</li>
                   </ul> 
               </div>
               <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
           </div>

           <div class="produit">
                <div class="produit_img"> <img src="../images/samsung_3.jpg" alt="Galaxy S10"></div>
                
                <div class="produit_nom">Galaxy S10 <br> 150 000 DA <br> </div>
                <div class="fiche"> 
                    <ul>
                        <li> <b>Ecran :</b> 7"</li>
                        <li> <b>Camera  :</b> 25 Mpx 21 Mpx</li>
                        <li> <b>Batterie :</b> 4000 mAh</li>
                        <li> <b>ROM :</b> 128 Go</li>
                        <li> <b>RAM :</b> 8 Go</li>
                        <li> <b>Processeur :</b> Exynos 9745</li>
                   </ul> 
               </div>

               <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
           </div>

           <div class="produit">
                <div class="produit_img"> <img src="../images/samsung_4.jpg" alt="Galaxy A50"></div>
                
                <div class="produit_nom">Galaxy A50<br> 50 150 DA <br></div>
                <div class="fiche"> 
                    <ul>
                        <li> <b>Ecran :</b> 6.1"</li>
                        <li> <b>Camera  :</b> 25 Mpx 13 Mpx</li>
                        <li> <b>Batterie :</b> 4000 mAh</li>
                        <li> <b>ROM :</b> 128 Go</li>
                        <li> <b>RAM :</b> 6 Go</li>
                        <li> <b>Processeur :</b> Snapdragon 860</li>
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