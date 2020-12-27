<?php
    require_once("php/dbconnect.php");
    require_once("php/header.php");
?>
 <div class="col-12 log row"  > 
        <button class="btn_log">Заказчики</button>
    <button class="btn_order">Журнал</button>
    <button class="btn_create" id="btn_create">Добавить</button>
        <form><input type="text" id="searchglog"/> </form>

 </div>


   
    <div id="displaylog"></div>


    

<?php
    require_once("Cart/cartoption.php");
?>
</body>
</html>

