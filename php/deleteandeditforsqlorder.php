<?php

 require_once("../php/dbconnect.php");

$address_site= "http://localhost/";
$result=$mysqli->query("SELECT order_id,order_email, order_name,order_adress,order_total_id,order_total_price,Time_order FROM orders ");
$rows = mysqli_num_rows($result); 

  for ($k = 0 ; $k < $rows ; ++$k)
{
     $row = mysqli_fetch_row($result);

	if (isset($_GET["saleslog$k$5"]))
{
    session_start();

  $stmt = $mysqli->prepare("DELETE FROM orders WHERE order_id = ?");
  $stmt->bind_param("i", $row[0]);
  $stmt->execute();
  $stmt->close();
  $result->close();
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: ".$address_site."../saleslog.php");
 exit();
	}
}
?>
<?php

$result2=$mysqli->query("SELECT order_id,order_email, order_name,order_adress,order_total_id,order_total_price,Time_order FROM orders ");
$rows2 = mysqli_num_rows($result2);

 for ($j = 0 ; $j < $rows2 ; ++$j)
{
  $row2 = mysqli_fetch_row($result2);

	if (isset($_GET["saleslog$j$6"]))
{
   require_once("../php/header.php");
  include '../php/protection/csrf.php';
?>

 <div class="col-12 InfoWoodLandsquarelog" > 
    <div class="  InfoWoodLandText">
       <h2>Редактирование</h2>
         <form action='' method='post'><table align='center' border=2 bordercolor='grey' width=100%>
           <tr><th>order_id</th><th>order_email</th><th>order_name</th><th>order_adress</th><th>order_total_id</th><th>order_total_price</th><th>Time_order</th><th>Сохранить</th></tr>
                      	<td><?php   echo"  $row2[0]"; ?></td>
                        <td><input type="order_email" name="order_email" value="<?php   echo"  $row2[1]"; ?>"></td>
                        <td><input type="order_name" name="order_name" value="<?php   echo"  $row2[2]"; ?>"></td>
                        <td><input type="order_adress" name="order_adress" value="<?php   echo"  $row2[3]"; ?>"></td>
                        <td><input type="order_total_id" name="order_total_id" value="<?php   echo"  $row2[4]"; ?>"></td>
                        <td><input type="order_total_price" name="order_total_price" value="<?php   echo"  $row2[5]"; ?>"></td>
                        <td><input type="Time_order" name="Time_order" value="<?php   echo"  $row2[6]"; ?>"></td>

			<td><input  type='submit'  name='total_order_button' value='Сохранить' style='color: orange;background: rgba(54,57,63,1);' ></td>
</table> </form>
</div>
    </div>

<?php

$idorder_number =  $row2[0];
  if (isset($_POST["order_email"]))
{
  if ($_POST["order_email"]!='')
  {
  $real_escape_string= $mysqli -> real_escape_string($idorder_number);
  $real_escape_string_order_email= $mysqli -> real_escape_string( $_POST["order_email"]);
  $update_total_order = $mysqli->prepare("UPDATE  orders SET order_email=? WHERE order_id = ? ");
  $update_total_order->bind_param("si",  $real_escape_string_order_email,$real_escape_string);
  $update_total_order->execute();
  $update_total_order->close();
  }
}

  if (isset($_POST["order_name"]))
{
  if ($_POST["order_name"]!='')
  {

  $real_escape_string= $mysqli -> real_escape_string($idorder_number);
  $real_escape_string_order_name= $mysqli -> real_escape_string($_POST["order_name"]);

  $update_total_order = $mysqli->prepare("UPDATE  orders SET order_name=? WHERE order_id = ?  ");
  $update_total_order->bind_param("si", $real_escape_string_order_name,$real_escape_string);
  $update_total_order->execute();
  $update_total_order->close();
  }
}
  if (isset($_POST["order_adress"]))
{
 if ($_POST["order_adress"]!='')
  {

  $real_escape_string= $mysqli -> real_escape_string($idorder_number);
    $real_escape_string_order_adress= $mysqli -> real_escape_string($_POST["order_adress"]);

  $update_total_order = $mysqli->prepare("UPDATE  orders SET order_adress=? WHERE order_id = ?  ");
  $update_total_order->bind_param("si", $real_escape_string_order_adress,$real_escape_string);
  $update_total_order->execute();
  $update_total_order->close();
  }
}
  if (isset($_POST["order_total_id"]))
{

 if ($_POST["order_total_id"]!= '')
  {
  $real_escape_string= $mysqli -> real_escape_string($idorder_number);
    $real_escape_string_order_total_id= $mysqli -> real_escape_string($_POST["order_total_id"]);

  $update_total_order = $mysqli->prepare("UPDATE  orders SET order_total_id=? WHERE order_id = ?  ");
  $update_total_order->bind_param("ii",  $real_escape_string_order_total_id,$real_escape_string);
  $update_total_order->execute();
  $update_total_order->close();

  }
}

if (isset($_POST["order_total_price"]))
{

 if ($_POST["order_total_price"]!= '')
  {
  $real_escape_string= $mysqli -> real_escape_string($idorder_number);
  $real_escape_string_order_total_price= $mysqli -> real_escape_string( $_POST["order_total_price"]);
  $update_total_order = $mysqli->prepare("UPDATE  orders SET order_total_price=? WHERE order_id = ?  ");
  $update_total_order->bind_param("ii",  $real_escape_string_order_total_price,$real_escape_string);
  $update_total_order->execute();
  $update_total_order->close();

  }
}


if (isset($_POST["Time_order"]))
{

 if ($_POST["Time_order"]!= '')
  {
  $real_escape_string= $mysqli -> real_escape_string($idorder_number);
  $real_escape_string_Time_order= $mysqli -> real_escape_string($_POST["Time_order"]);
  $update_total_order = $mysqli->prepare("UPDATE  orders SET Time_order=? WHERE order_id = ?  ");
  $update_total_order->bind_param("si",  $real_escape_string_Time_order,$real_escape_string);
  $update_total_order->execute();
  $update_total_order->close();

  }
}
   ?> 
<?php
    //Подключение корзины
    require_once("../Cart/cartoption.php");
?>




</body>
</html>
<?php
	}
}
$result2->close();
?>
