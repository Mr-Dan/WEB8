 <?php
    require_once("../php/dbconnect.php");
      $display=" ";

?>


 <?php
   if (isset($_POST['id_page'])) {

     $display.= "<div class='col-12 InfoWoodLandsquarelog' > 
             <div class='  InfoWoodLandText'>
                                 <H1> Список журнал учета продаж пиломатериалов  </H1>";

 $result=$mysqli->query("SELECT order_id,order_email, order_name,order_adress,order_total_id,order_total_price,Time_order FROM orders ");
            $rows = mysqli_num_rows($result); 
$display.= "  <table align='center' border=2 bordercolor='grey' width=100%>
<tr><th>order_id</th><th>order_email</th><th>order_name</th><th>order_adress</th><th>order_total_id</th><th>order_total_price</th><th>Time_order</th><th>Удалить</th></th><th>Редактировать</th></tr>";

 for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
       $display.= "<tr>";
            for ($j = 0 ; $j < 7 ; ++$j)
            {
                if ($j==4)
                {
                    $display.="<td>$row[$j]</td>";
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
?>
<?php

    echo  $display;
  $mysqli->close();
    }

?>
 </div>
    </div>   