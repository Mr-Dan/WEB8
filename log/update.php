<?php

 require_once("../php/dbconnect.php");
    session_start();
      $display=" ";


 if ($_POST['id_page'] == "журнал")
 {  

$order_email = $_POST["order_email_text"];
$order_name = $_POST["order_name_text"];
$order_adress = $_POST["order_adress_text"];
$order_total_id = $_POST["order_total_id_text"];
$order_total_price = $_POST["order_total_price_text"];
$Time_order = $_POST["Time_order_text"];
$btn_del_id = $_POST["btn_del_id"];

  $update_total_order = $mysqli->prepare("UPDATE  orders SET order_email=?,order_name=?,order_adress=?,order_total_id=?,order_total_price=?,Time_order=? WHERE order_id = ? ");
  $update_total_order->bind_param("sssiisi",$order_email,$order_name,$order_adress,$order_total_id,$order_total_price,$Time_order,$btn_del_id);
  $update_total_order->execute();
  $update_total_order->close();

        require_once("../log/orders_page.php");

    }



  else if ($_POST['id_page'] == "заказчики" )
      {

$order_number = $_POST["order_number_text"];
$total_order_email = $_POST["total_order_email_text"];
$total_order_time = $_POST["total_order_time_text"];
$total_order_product = $_POST["total_order_product_text"];
$btn_del_id = $_POST["btn_del_id"];

$update_total_order = $mysqli->prepare("UPDATE  total_order SET order_number=?,total_order_email=?,total_order_time=?,total_order_product=? WHERE total_order_id = ?  ");
  $update_total_order->bind_param("isssi", $order_number,$total_order_email,$total_order_time,$total_order_product,$btn_del_id);
  $update_total_order->execute();
  $update_total_order->close();

               require_once("../log/total_order_page.php");


}


?>