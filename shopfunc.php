
<script src="../Cart/jscode.js"  type="text/javascript" ></script>
<script src="../Cart/wicart.js"  type="text/javascript" ></script>

<?php

require_once("php/dbconnect.php");

  if (isset($_POST['search'])) {

    if(!isset($_POST['search']))
        {
          $name = "%{base}%";

        }
    else 
      {
         $name = "%{$_POST['search']}%";
       }

    $stmt = $mysqli->prepare("SELECT product_id,product_name,product_search_id,product_img,product_cost,product_search_id FROM product_shop WHERE  product_search_name   LIKE ? OR product_search_base LIKE ? OR product_cost LIKE ? ");
    $stmt->bind_param("sss",$name,$name,$name );
    $stmt->execute();
    $result = $stmt->get_result();  

?>
<?php 

 $rows = mysqli_num_rows($result); 

 for ($i = 0 ; $i < $rows ; ++$i)
    {
       $row = mysqli_fetch_row($result);

            if ($i<8)
            {
             echo ' 
            <div class=" MaterialBlock">
            <img  src="'.$row[3].'" class="MaterialBlockIcon" >
            <p class="InfoShopText">'
              ?>
               <?php 
                  echo $row[1]; 
                        
                 ?>   

            <?php 
                 echo ' </p>
                <p class="InfoShopTextCost" id="wicartprice_'.$row[5].'">Цена '.$row[4].'</p>  '
              ?> 
             <?php
                $id = "'".$row[5]."'";
              echo ' <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_'.$row[5].'" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_'.$row[5].'" onclick="cart.addToCart(this, '.$id.', priceList['.$id.']) "data-toggle="modal" data-target="#myModal"  >Купить</button>';?>

    <?php  echo '
            </div>'; 
            }
       }
    ?>
        
<?php
    }
?>
    