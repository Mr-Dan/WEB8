
 <div class="col-12 InfoWoodLandsquarelog " > 
        <div class="  InfoWoodLandText">
<?php
       $display=" ";
         
require_once("../php/dbconnect.php");

  if (isset($_POST['searchglog'])) {


    if ($_POST['id_page'] == "журнал")
    {
        $number = $_POST['searchglog'];
        $name = "%{$_POST['searchglog']}%";

    $stmt = $mysqli->prepare("SELECT order_id,order_email, order_name,order_adress,order_total_id,order_total_price,Time_order FROM orders WHERE  order_id  = ?");
    $stmt->bind_param("s",$number);
    $stmt->execute();
    $result = $stmt->get_result();  
    $rows = mysqli_num_rows($result); 

          $display.=" <H1> Список журнал учета продаж пиломатериалов  </H1>";
        $display.= "   <table align='center' border=2 bordercolor='grey' width=100%>
<tr><th>order_id</th><th>order_email</th><th>order_name</th><th>order_adress</th><th>order_total_id</th><th>order_total_price</th><th>Time_order</th><th>Удалить</th></th><th>Редактировать</th></tr>";

 for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
         $display.="<tr>";
            for ($j = 0 ; $j < 7 ; ++$j)
            {
                if ($j==4)
                {
                    $display.="<td>$row[$j]</td>";
                }
                else
                {
                     $display.="<td>$row[$j]</td> ";
                }
            }             
                $display.="<td>  <button  class='btn_del' id='$row[0]'  style='color: orange;background: rgba(54,57,63,1);'>Удалить</button></td>";
            $display.="<td>  <button  class='btn_edit' id='$row[0]' ' style='color: orange;background: rgba(54,57,63,1);'>Редактировать</button></td>";
         $display.="</tr>";
    }
     $display.="</table> ";   
    mysqli_free_result($result);
       
$stmt->close();
    }
     else if ($_POST['id_page'] == "заказчики")
    {
            $number = $_POST['searchglog'];
             $name = "%{$_POST['searchglog']}%";

  $stmt = $mysqli->prepare("SELECT total_order_id,order_number,total_order_email, total_order_time,total_order_product  FROM total_order WHERE  total_order_id = ? OR order_number =?");
    $stmt->bind_param("ii",$number,$number);
    $stmt->execute();
    $result = $stmt->get_result();  
 $rows = mysqli_num_rows($result); 
                                $display.=" <H1> Заказчики </H1>";
 $display.= "<table align='center' border=2 bordercolor='grey' width=100%>
<tr><th>total_order_id</th><th>order_number</th><th>total_order_email</th><th>total_order_time</th><th>total_order_product</th><th>Удалить</th></th><th>Редактировать</th></tr>";

 for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
         $display.= "<tr>";
            for ($j = 0 ; $j < 5 ; ++$j)
            {
                if ($j==1)
                {
                     $display.= "<td>$row[$j]</td>";
                }
                else
                {
                     $display.= "<td>$row[$j]</td> ";
                }
            }            
            $display.="<td>  <button  class='btn_del' id='$row[0]'  style='color: orange;background: rgba(54,57,63,1);'>Удалить</button></td>";
            $display.="<td>  <button  class='btn_edit' id='$row[0]' ' style='color: orange;background: rgba(54,57,63,1);'>Редактировать</button></td>";
         $display.= "</tr>";
    }
     $display.= "</table> ";
    mysqli_free_result($result);
        $stmt->close();

    }



?>

        
<?php
echo  $display;
    }
?>
     </div>
    </div>    