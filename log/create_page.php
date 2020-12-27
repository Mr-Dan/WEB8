<?php

 require_once("../php/dbconnect.php");
    session_start();
      $display=" ";



 if ($_POST['id_page'] == "журнал")
 {  


  $display.=" <div class='col-12 InfoWoodLandsquarelog' > 
    <div class='  InfoWoodLandText'>
       <h2>Добавить в журнал</h2>
         <table align='center' border=2 bordercolor='grey' width=100%>
           <tr><th>order_id</th><th>order_email</th><th>order_name</th><th>order_adress</th><th>order_total_id</th><th>order_total_price</th><th>Time_order</th><th>Сохранить</th></tr>
                        <td></td>
                        <td><input type='order_email' id='order_email' value=''></td>
                        <td><input type='order_name' id='order_name' value=''></td>
                        <td><input type='order_adress' id='order_adress' value=''></td>
                        <td><input type='order_total_id' id='order_total_id' value=''></td>
                        <td><input type='order_total_price' id='order_total_price' value=''></td>
                        <td><input type='Time_order' id='Time_order' value=''></td>

      <td><button  class='btn_create_order' id=''  style='color: orange;background: rgba(54,57,63,1);'>добавить</button></td>
</table>
</div>
    </div>";

echo  $display;

    }



  else if ($_POST['id_page'] == "заказчики" )
      {

   


 $display.=" <div class='col-12 InfoWoodLandsquarelog' > 
    <div class='  InfoWoodLandText'>
       <h2>Добавить в заказчики</h2>
        <table align='center' border=2 bordercolor='grey' width=100%>
           <tr><th>total_order_id</th><th>order_number</th><th>total_order_email</th><th>total_order_time</th><th>total_order_product</th><th>Сохранить</th></tr>
                        <td></td>
                        <td><input type='order_number'  id='order_number' value=''></td>
                        <td><input type='total_order_email' id='total_order_email' value=''></td>
                        <td><input type='total_order_time' id='total_order_time' value=''></td>
                        <td><input type='total_order_product' id='total_order_product' value=''></td>
      <td> <button  class='btn_create_total_order' id=''  style='color: orange;background: rgba(54,57,63,1);'>добавить</button></td>
</table> 
</div>
    </div>";

echo  $display;

}


?>