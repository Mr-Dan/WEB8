<?php

 require_once("../php/dbconnect.php");
    session_start();
      $display=" ";



 if ($_POST['id_page'] == "журнал")
 {  



      $stmt2 = $mysqli->prepare("DELETE FROM orders WHERE order_id = ?");
      $stmt2->bind_param("i",$_POST["btn_del_id"]);
      $stmt2->execute();
      $stmt2->close();

        require_once("../log/orders_page.php");


    }



  else if ($_POST['id_page'] == "заказчики" )
      {
    
      $stmt2 = $mysqli->prepare("DELETE FROM total_order WHERE total_order_id = ?");
      $stmt2->bind_param("i",$_POST["btn_del_id"]);
      $stmt2->execute();
     $stmt2->close();

             require_once("../log/total_order_page.php");

  
}


?>