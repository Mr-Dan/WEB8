<?php

 require_once("../php/dbconnect.php");

$address_site= "http://localhost/";
$result=$mysqli->query("SELECT total_order_id,order_number,total_order_email, total_order_time,total_order_product FROM total_order ");
$rows = mysqli_num_rows($result); 

  for ($k = 0 ; $k < $rows ; ++$k)
{
     $row = mysqli_fetch_row($result);

	if (isset($_GET["clients$k$5"]))
{
    session_start();

  $stmt = $mysqli->prepare("DELETE FROM total_order WHERE total_order_id = ?");
  $stmt->bind_param("i", $row[0]);
  $stmt->execute();
  $stmt->close();
  $result->close();
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: ".$address_site."../clients.php");
 exit();
	}
}
?>
<?php

$result2=$mysqli->query("SELECT total_order_id,order_number,total_order_email, total_order_time,total_order_product FROM total_order ");
$rows2 = mysqli_num_rows($result2);

 for ($j = 0 ; $j < $rows2 ; ++$j)
{
  $row2 = mysqli_fetch_row($result2);

	if (isset($_GET["clients$j$6"]))
{
   require_once("../php/header.php");
  include '../php/protection/csrf.php';
?>

 <div class="col-12 InfoWoodLandsquarelog" > 
    <div class="  InfoWoodLandText">
       <h2>Редактирование</h2>
         <form action='' method='post'><table align='center' border=2 bordercolor='grey' width=100%>
           <tr><th>total_order_id</th><th>order_number</th><th>total_order_email</th><th>total_order_time</th><th>total_order_product</th><th>Сохранить</th></tr>
                      	<td><?php   echo"  $row2[0]"; ?></td>
                        <td><input type="order_number" name="order_number" value="<?php   echo"  $row2[1]"; ?>"></td>
                        <td><input type="total_order_email" name="total_order_email" value="<?php   echo"  $row2[2]"; ?>"></td>
                        <td><input type="total_order_time" name="total_order_time" value="<?php   echo"  $row2[3]"; ?>"></td>
                        <td><input type="total_order_product" name="total_order_product" value="<?php   echo"  $row2[4]"; ?>"></td>
			<td><input  type='submit'  name='total_order_button' value='Сохранить' style='color: orange;background: rgba(54,57,63,1);' ></td>
</table> </form>
</div>
    </div>

<?php

$idorder_number =  $row2[0];
  if (isset($_POST["order_number"]))
{
  if ($_POST["order_number"]!='')
  {
  $real_escape_string= $mysqli -> real_escape_string($idorder_number);
  $real_escape_string_order_number= $mysqli -> real_escape_string($_POST["order_number"]);

  $update_total_order = $mysqli->prepare("UPDATE  total_order SET order_number=? WHERE total_order_id = ? ");
  $update_total_order->bind_param("ii",  $real_escape_string_order_number,$real_escape_string);
  $update_total_order->execute();
  $update_total_order->close();
  }
}

  if (isset($_POST["total_order_email"]))
{
  if ($_POST["total_order_email"]!='')
  {

  $real_escape_string= $mysqli -> real_escape_string($idorder_number);
    $real_escape_string_total_order_email= $mysqli -> real_escape_string( $_POST["total_order_email"]);

  $update_total_order = $mysqli->prepare("UPDATE  total_order SET total_order_email=? WHERE total_order_id = ?  ");
  $update_total_order->bind_param("si", $real_escape_string_total_order_email,$real_escape_string);
  $update_total_order->execute();
  $update_total_order->close();
  }
}
  if (isset($_POST["total_order_time"]))
{
 if ($_POST["total_order_time"]!='')
  {

  $real_escape_string= $mysqli -> real_escape_string($idorder_number);
    $real_escape_string_total_order_time= $mysqli -> real_escape_string($_POST["total_order_time"]);

  $update_total_order = $mysqli->prepare("UPDATE  total_order SET total_order_time=? WHERE total_order_id = ?  ");
  $update_total_order->bind_param("si", $real_escape_string_total_order_time,$real_escape_string);
  $update_total_order->execute();
  $update_total_order->close();
  }
}
  if (isset($_POST["total_order_product"]))
{

 if ($_POST["total_order_product"]!= '')
  {
  $real_escape_string= $mysqli -> real_escape_string($idorder_number);
  $real_escape_string_total_order_product= $mysqli -> real_escape_string($_POST["total_order_product"]);
  $update_total_order = $mysqli->prepare("UPDATE  total_order SET total_order_product=? WHERE total_order_id = ?  ");
  $update_total_order->bind_param("si",  $real_escape_string_total_order_product,$real_escape_string);
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
