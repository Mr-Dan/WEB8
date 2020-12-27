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

  $create_order = $mysqli->prepare("INSERT INTO orders (order_email,order_name,order_adress,order_total_id,order_total_price,Time_order) VALUES(?,?,?,?,?,?)");
  $create_order->bind_param("sssiis",$order_email,$order_name,$order_adress,$order_total_id,$order_total_price,$Time_order);
  $create_order->execute();
  $create_order->close();

        require_once("../log/orders_page.php");

    }



  else if ($_POST['id_page'] == "заказчики" )
      {

$order_number = $_POST["order_number_text"];
$total_order_email = $_POST["total_order_email_text"];
$total_order_time = $_POST["total_order_time_text"];
$total_order_product = $_POST["total_order_product_text"];

$create_total_order = $mysqli->prepare("INSERT INTO  total_order  (order_number,total_order_email,total_order_time,total_order_product) VALUES(?,?,?,?)");
  $create_total_order->bind_param("isss", $order_number,$total_order_email,$total_order_time,$total_order_product);
  $create_total_order->execute();
  $create_total_order->close();

               require_once("../log/total_order_page.php");


}


?>