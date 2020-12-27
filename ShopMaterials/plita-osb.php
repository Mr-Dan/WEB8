<?php
    //Подключение шапки
    require_once("../php/header.php");
?>

<script>
var priceList = {
  "080" : {"id" : "080", "subid" : {}, "name" : "Плита-ОСБ", "price" : "250"}
  

  };
</script> 





<?php
    //Подключение sideboard
    require_once("phpshop/sideboard.php");
?>



          <div class=" MaterialBlockShop ">

<div class="row MaterialBlockShopindent" >

            <div class=" MaterialBlock">
            <img  src="../ShopMaterials/materials/plita-osb/plita-osb-3_1.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Плита-ОСБ</p>
            <p class="InfoShopTextCost" id="wicartprice_080">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_080" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_080" onclick="cart.addToCart(this, '080', priceList['080']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

            

         

        
</div>

<



          </div>
           

</div>




<?php
    //Подключение корзины
$filejs='../Cart/jscode.js';
    require_once("../Cart/cartoption.php");
?>

</body>
</html>
