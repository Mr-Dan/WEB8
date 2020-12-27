<?php
    //Подключение шапки
    require_once("php/header.php");
?>

<script>
var priceList = {
  "010" : {"id" : "010", "subid" : {}, "name" : "Брус 50x50 м", "price" : "250"},
  "020" : {"id" : "020", "subid" : {}, "name" : "Брус строганный 100x100", "price" : "250"},
  "030" : {"id" : "030", "subid" : {}, "name" : "Доска строганная 25-100", "price" : "250"},
  "031" : {"id" : "031", "subid" : {}, "name" : "Доска строганная 40-150 ", "price" : "350"},
  "032" : {"id" : "032", "subid" : {}, "name" : "Доска строганная  40-200 ", "price" : "450"},
  "033" : {"id" : "033", "subid" : {}, "name" : "Доска строганная  50x150", "price" : "550"},
  "034" : {"id" : "034", "subid" : {}, "name" : "Доска строганная 50x200", "price" : "650"},
  "040" : {"id" : "040", "subid" : {}, "name" : "Доска обрезная 25-100 ", "price" : "250"},
  "041" : {"id" : "041", "subid" : {}, "name" : "Доска обрезная 25x150 ", "price" : "350"},
  "042" : {"id" : "042", "subid" : {}, "name" : "Доска обрезная  40x100", "price" : "450"},
  "043" : {"id" : "043", "subid" : {}, "name" : "Доска обрезная  40x150 ", "price" : "550"},
  "044" : {"id" : "044", "subid" : {}, "name" : "Доска обрезная 50x100", "price" : "650"},
  "050" : {"id" : "050", "subid" : {}, "name" : "Брусок 10x40 ", "price" : "250"},
  "060" : {"id" : "060", "subid" : {}, "name" : "Вагонка А ", "price" : "250"},
  "070" : {"id" : "070", "subid" : {}, "name" : "Доска половая 28-100", "price" : "250"},
  "080" : {"id" : "080", "subid" : {}, "name" : "Плита-ОСБ", "price" : "250"}


  };
</script> 



<?php
    //Подключение sideboard
    require_once("ShopMaterials/phpshop/sideboard.php");
?>



          <div class=" MaterialBlockShop ">

<div class="row MaterialBlockShopindent" id="display">

         
        
</div>




          </div>
           





<?php
    //Подключение корзины
    require_once("Cart/cartoption.php");
?>

</body>
</html>
