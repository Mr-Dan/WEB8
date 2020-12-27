<?php

 require_once("../php/dbconnect.php");
    session_start();
      $display=" ";



 if ($_POST['id_page'] == "журнал")
 {  

      $number = $_POST["btn_del_id"];
    $stmt = $mysqli->prepare("SELECT order_id,order_email, order_name,order_adress,order_total_id,order_total_price,Time_order FROM orders WHERE order_id =?  ");
    $stmt->bind_param("i",$number);
    $stmt->execute();
    $result = $stmt->get_result(); 
             $row2 = mysqli_fetch_row($result);


  $display.=" <div class='col-12 InfoWoodLandsquarelog' > 
    <div class='  InfoWoodLandText'>
       <h2>Редактирование</h2>
         <table align='center' border=2 bordercolor='grey' width=100%>
           <tr><th>order_id</th><th>order_email</th><th>order_name</th><th>order_adress</th><th>order_total_id</th><th>order_total_price</th><th>Time_order</th><th>Сохранить</th></tr>
                        <td>$row2[0]</td>
                        <td><input type='order_email' id='order_email' value='$row2[1]'></td>
                        <td><input type='order_name' id='order_name' value='$row2[2]'></td>
                        <td><input type='order_adress' id='order_adress' value='$row2[3]'></td>
                        <td><input type='order_total_id' id='order_total_id' value='$row2[4]'></td>
                        <td><input type='order_total_price' id='order_total_price' value='$row2[5]'></td>
                        <td><input type='Time_order' id='Time_order' value='$row2[6]'></td>

      <td><button  class='btn_update_order' id='$row2[0]'  style='color: orange;background: rgba(54,57,63,1);'>Редактировать</button></td>
</table>
</div>
    </div>";

      $stmt->close();
echo  $display;

    }



  else if ($_POST['id_page'] == "заказчики" )
      {

      $number = $_POST["btn_del_id"];
    $stmt = $mysqli->prepare("SELECT total_order_id,order_number,total_order_email, total_order_time,total_order_product FROM total_order  WHERE total_order_id =?  ");
    $stmt->bind_param("i",$number);
    $stmt->execute();
    $result = $stmt->get_result(); 
             $row2 = mysqli_fetch_row($result);


 $display.=" <div class='col-12 InfoWoodLandsquarelog' > 
    <div class='  InfoWoodLandText'>
       <h2>Редактирование</h2>
        <table align='center' border=2 bordercolor='grey' width=100%>
           <tr><th>total_order_id</th><th>order_number</th><th>total_order_email</th><th>total_order_time</th><th>total_order_product</th><th>Сохранить</th></tr>
                        <td>$row2[0]</td>
                        <td><input type='order_number'  id='order_number' value='$row2[1]'></td>
                        <td><input type='total_order_email' id='total_order_email' value='$row2[2]'></td>
                        <td><input type='total_order_time' id='total_order_time' value='$row2[3]'></td>
                        <td><input type='total_order_product' id='total_order_product' value='$row2[4]'></td>
      <td> <button  class='btn_update_total_order' id='$row2[0]'  style='color: orange;background: rgba(54,57,63,1);'>Редактировать</button></td>
</table> 
</div>
    </div>";

       $stmt->close();
echo  $display;

}


?>