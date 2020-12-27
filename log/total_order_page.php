 <?php
    require_once("../php/dbconnect.php");
    $display=" ";

?>



 <?php
   if (isset($_POST['id_page'])) {
    $display.="<div class='col-12 InfoWoodLandsquarelog '> 
             <div class=' InfoWoodLandText'>
                                 <H1> Заказчики </H1>";


 $result=$mysqli->query("SELECT total_order_id,order_number,total_order_email, total_order_time,total_order_product FROM total_order ");
        $rows = mysqli_num_rows($result); 

$display.="<table align='center' border=2 bordercolor='grey' width=100%>
<tr><th>total_order_id</th><th>order_number</th><th>total_order_email</th><th>total_order_time</th><th>total_order_product</th><th>Удалить</th></th><th>Редактировать</th></tr>";

 for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        $display.="<tr>";
            for ($j = 0 ; $j < 5 ; ++$j)
            {
                if ($j==1)
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
    $display.="</table>";
    mysqli_free_result($result);
?>
<?php

echo  $display;
  $mysqli->close();

    }
?>
 </div>
    </div>   