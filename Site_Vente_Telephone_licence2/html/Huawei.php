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
            <img src="../images/home_slider_2.jpg" alt="Huawei">
        </div>
       
        <div class="produit">
             <div class="produit_img"> <img src="../images/huawei_1.jpg" alt="Y9"></div>
             <div class="product_new">Nouveau</div>
             <div class="produit_nom">Y9<br> 74 000 DA </div>
             <div class="fiche"> 
                    <ul>
                        <li> <b>Ecran :</b> 6.5"</li>
                        <li> <b>Camera  :</b> 16 Mpx 16 Mpx</li>
                        <li> <b>Batterie :</b> 4000 mAh</li>
                        <li> <b>ROM :</b> 64 Go</li>
                        <li> <b>RAM :</b> 6 Go</li>
                        <li> <b>Processeur :</b> Kirin 920</li>
                   </ul> 
            </div>
            
            <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
        </div>
         
        <div class="produit">
                <div class="produit_img"> <img src="../images/huawei_2.jpg" alt="Y7 pro"></div>
                <div class="product_sale2">Remise</div>
                <div class="produit_nom">Y7 pro<br> <s id="trait">60 000 DA</s> <br> 55 999 DA <br> </div>
                <div class="fiche"> 
                    <ul>
                        <li> <b>Ecran :</b> 6"</li>
                        <li> <b>Camera  :</b> 13 Mpx 13 Mpx</li>
                        <li> <b>Batterie :</b> 4200 mAh</li>
                        <li> <b>ROM :</b> 32 Go</li>
                        <li> <b>RAM :</b> 3 Go</li>
                        <li> <b>Processeur :</b> Kirin 840</li>
                   </ul>  
               </div>
               <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
           </div>

           <div class="produit">
                <div class="produit_img"> <img src="../images/huawei_3.jpg" alt="Y6"></div>
                
                <div class="produit_nom">Y6 <br> 50 000 DA <br> </div>
                <div class="fiche"> 
                    <ul>
                        <li> <b>Ecran :</b> 5.9"</li>
                        <li> <b>Camera  :</b> 13 Mpx 8 Mpx</li>
                        <li> <b>Batterie :</b> 3600 mAh</li>
                        <li> <b>ROM :</b> 32 Go</li>
                        <li> <b>RAM :</b> 2 Go</li>
                        <li> <b>Processeur :</b> Kirin 831</li>
                   </ul> 
               </div>

               <div> <button class="achatp1"> <a class="achat" href="panier.php">Acheter </a> </div>
           </div>

           <div class="produit">
                <div class="produit_img"> <img src="../images/huawei_4.jpg" alt="Y5"></div>
                
                <div class="produit_nom">Y5<br> 44 000 DA <br></div>
                <div class="fiche"> 
                    <ul>
                        <li> <b>Ecran :</b> 5"</li>
                        <li> <b>Camera  :</b> 12 Mpx 5 Mpx</li>
                        <li> <b>Batterie :</b> 3000 mAh</li>
                        <li> <b>ROM :</b> 16 Go</li>
                        <li> <b>RAM :</b> 1 Go</li>
                        <li> <b>Processeur :</b> Kirin 710</li>
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