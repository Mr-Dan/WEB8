<?php
    //Подключение шапки
    require_once("../php/header.php");
?>

<script>
var priceList = {
  "070" : {"id" : "070", "subid" : {}, "name" : "Доска половая 28-100", "price" : "250"},
  "071" : {"id" : "071", "subid" : {}, "name" : "Доска половая 36-120", "price" : "350"},
  "072" : {"id" : "072", "subid" : {}, "name" : "Доска половая  36-140", "price" : "450"}
 

  };
</script> 


    


<?php
    //Подключение sideboard
    require_once("phpshop/sideboard.php");
?>



          <div class=" MaterialBlockShop ">

<div class="row MaterialBlockShopindent " >

            <div class=" MaterialBlock">
            <img  src="../ShopMaterials/materials/polovaya-doska/doska-polovaya-28-110m.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Доска половая 28-100 </p>
            <p class="InfoShopTextCost" id="wicartprice_070">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_070" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_070" onclick="cart.addToCart(this, '070', priceList['070']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

            <div class=" MaterialBlock">
             <img  src="../ShopMaterials/materials/polovaya-doska/doska-polovaya-36-120m.jpg" class="MaterialBlockIcon" >
             <p class="InfoShopText">Доска половая 36-120 </p>
             <p class="InfoShopTextCost "id="wicartprice_071">Цена 350</p>
             <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_071" value="1" data-min-value="1" data-max-value="10000" /></div>
             <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_071" onclick="cart.addToCart(this, '071', priceList['071']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

          <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/polovaya-doska/doska-polovaya-36-140m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText ">Доска половая  36-140 </p>
              <p class="InfoShopTextCost" id="wicartprice_072">Цена 450 </p>
           <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_072" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_072" onclick="cart.addToCart(this, '072', priceList['072']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
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
