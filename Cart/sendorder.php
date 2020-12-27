<?php
include '../php/protection/safety_request_file.php';

session_start();

if(isset($_SESSION["email"]) && isset($_SESSION["password"]) && isset($_POST['order'])  ) {

require_once("../php/dbconnect.php");
$s_request= new safety_request_class();


$today = date("m.d.y,H:i:s"); 

if(isset($_SESSION["email"]))
{
	 $email= $mysqli -> real_escape_string($_SESSION['email']);
}

$order = "";
$adressord = "";
$costall = "";

if(isset($_POST['order']))
{
	 $order= $mysqli -> real_escape_string($_POST['order']);

}
if(isset($_POST['adressord']))
{
	 $adressord= $mysqli -> real_escape_string($_POST['adressord']);

}
if(isset($_POST['costall']))
{
	 $costall= $mysqli -> real_escape_string($_POST['costall']);

}

 function requestO($input) {

$input = strip_tags($input, "<b><div><tr><td><html><body><style><h1><th><br>");
$input = str_replace("<td></td>", "",$input);
$input = preg_replace('/<div[^>]+class="basket_num_buttons"[^>]*>.*?<\/div>/i', '', $input);
$input = preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/i",'<$1$2>', $input);
        
        $request=$input;
        return $request;
    }

$order= requestO($order);
$adressord= requestO($adressord);
$costall= requestO($costall);

$ordernew = explode("</tr>", $order);
$ordernew = str_replace('<tr>','',$ordernew);
$textline = " ";

for ($i = 0; $i < count($ordernew); $i++)
{
$countarrf= $ordernew[$i];
	for ($j = 0; $j <strlen($countarrf); $j++)
	{
		$orderfull = explode("</td>", $countarrf);
		$orderfull=str_replace('<td>','',$orderfull);
		$textline = $textline. ' ' . $orderfull[$j];
	}
}


$adressordnewtextline = " ";

$adressordnew = explode("</div>", $adressord);
$adressordnew = str_replace('<div>','',$adressordnew);

$pos  = strripos($adressordnew[0], '>');
$adressl = substr($adressordnew[0], $pos+1); 

for ($l = 1; $l < count($adressordnew); $l++)
{
	$pos  = strripos($adressordnew[$l], '</b>');
	$adressli = substr($adressordnew[$l], $pos+4); 
	$adresstextline = $adresstextline. ' ' . $adressli;
}


            $adresstextline=$s_request ->safety_request($adresstextline,"database_protection_against_js");//Возвращает целое значение переменной

$textline = trim($textline);

$textline= $mysqli -> real_escape_string($textline);
$textline = str_replace('/n',"",$textline);

$reg_total_order = $mysqli->prepare("INSERT INTO total_order (total_order_email, total_order_time,total_order_product) VALUES (?, ?, ?)");
$reg_total_order->bind_param("sss",  $email,$today,$textline);
$reg_total_order->execute();
$reg_total_order->close();

$email_real_escape_string= $mysqli -> real_escape_string($_SESSION['email']);
$reg = $mysqli->prepare("SELECT * FROM total_order WHERE total_order_email = ?  AND total_order_time = ?");
$reg->bind_param("ss",  $email_real_escape_string,$today);
$reg->execute();
$result = $reg->get_result();
$total_order = $result->fetch_assoc();

$totalorderid =$total_order['total_order_id'];
$reg->close();

$result_query_insert_orders = $mysqli->prepare("INSERT INTO orders (order_name, order_email,order_adress,order_total_id,order_total_price,Time_order) VALUES (?, ?, ?, ?, ?, ?)");
$result_query_insert_orders->bind_param("sssiis",  $adressl,$email,$adresstextline,$totalorderid,$costall,$today);
$result_query_insert_orders->execute();
$result_query_insert_orders->close();


$email_real_escape_string= $mysqli -> real_escape_string($_SESSION['email']);
$regrOrder = $mysqli->prepare("SELECT * FROM orders WHERE order_email= ?  AND Time_order = ?");
$regrOrder->bind_param("ss",  $email_real_escape_string,$today);
$regrOrder->execute();
$resultOrder = $regrOrder->get_result();
$Order = $resultOrder->fetch_assoc();
$totalorderid =$Order['order_id'];
$regrOrder->close();

$email_real_escape_string= $mysqli -> real_escape_string($_SESSION['email']);
$update_total_order = $mysqli->prepare("UPDATE  total_order SET order_number=? WHERE total_order_email = ?  AND total_order_time = ?");
$update_total_order->bind_param("iss",  $totalorderid,$email_real_escape_string,$today);
$update_total_order->execute();
$update_total_order->close();

$mysqli->close();
}

if(isset($_SESSION["email"]) && isset($_SESSION["password"]))
{
	$address_site= "http://localhost/";
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: ".$address_site."../authorizationmain.php");
	exit();
}

?>