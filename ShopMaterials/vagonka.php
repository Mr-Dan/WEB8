<?php
    //Подключение шапки
    require_once("../php/header.php");
?>


<script>
var priceList = {
  "060" : {"id" : "060", "subid" : {}, "name" : "Вагонка А ", "price" : "250"},
  "061" : {"id" : "061", "subid" : {}, "name" : "Вагонка В", "price" : "350"},
  "062" : {"id" : "062", "subid" : {}, "name" : "Вагонка С", "price" : "450"}

  };
</script> 

    

  
<?php
    //Подключение sideboard
    require_once("phpshop/sideboard.php");
?>




          <div class=" MaterialBlockShop">

<div class="row MaterialBlockShopindent" >

            <div class=" MaterialBlock">
            <img  src="../ShopMaterials/materials/vagonka/vagonka_a_m-1.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Вагонка А </p>
            <p class="InfoShopTextCost" id="wicartprice_060">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_060" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_060" onclick="cart.addToCart(this, '060', priceList['060']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

            <div class=" MaterialBlock">
             <img  src="../ShopMaterials/materials/vagonka/vagonka_b_m.jpg" class="MaterialBlockIcon" >
             <p class="InfoShopText">Вагонка В </p>
             <p class="InfoShopTextCost "id="wicartprice_061">Цена 350</p>
             <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_061" value="1" data-min-value="1" data-max-value="10000" /></div>
             <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_061" onclick="cart.addToCart(this, '061', priceList['061']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

          <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/vagonka/vagonka_c_m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText ">Вагонка С </p>
              <p class="InfoShopTextCost" id="wicartprice_062">Цена 450 </p>
           <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_062" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_062" onclick="cart.addToCart(this, '062', priceList['062']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

        
</div>





          </div>
           

</div>



<?php
    //Подключение корзины
$filejs='../Cart/jscode.js';
    require_once("../Cart/cartoption.php");
?>

</body>
</html>
