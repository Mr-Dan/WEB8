
<?php
    //Подключение шапки
    require_once("php/header.php");
   
?>

<?php
    //Подключение бд
require_once("php/dbconnect.php");
   
?>

    <div class="col-sm-12 InfoWoodLandText" > 
        <div class=" InfoWoodLandsquare">
    <?php
    //Проверяем, если пользователь не авторизован, то выводим форму авторизации, 
    //иначе выводим сообщение о том, что он уже авторизован
    if(isset($_SESSION["email"])  || isset($_SESSION['vk'])  ){

        if(isset($_SESSION["email"]))
            {
                $email_real_escape_string= $mysqli -> real_escape_string($_SESSION['email']);
                $reg = $mysqli->prepare("SELECT * FROM person WHERE email = ?");
                $reg->bind_param("s",  $email_real_escape_string);
                $reg->execute();
                $result = $reg->get_result();
                $Person = $result->fetch_assoc();
        ?>
                        <H1> Личный кабинет </H1>
                        <p> Здравствуйте, <?php echo  $Person['Person_name'] ?>  </p>
                        <p>  Секретный id, <?php echo  $Person['Person_id'] ?> </p>
                        <p> Ваш логин , <?php echo  $Person['email'] ?> </p>
    <?php
            }
      
        if(isset($_SESSION['vk']))
            {
                $reg = $mysqli->prepare("SELECT * FROM person WHERE person_vk_id = ?");
                $reg->bind_param("i",  $_SESSION['vk']);
                $reg->execute();
                $result = $reg->get_result();
                $Person = $result->fetch_assoc();
    ?>

                        <H1> Личный кабинет </H1>
                        <p> Здравствуйте, <?php echo  $Person['Person_name'] ?>  </p>
                        <p>  Секретный id, <?php echo  $Person['Person_id'] ?> </p>
        <?php
            }               
        ?>

<form method='post' action="file.php" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
<input type='file' name='file[]' class='file-drop' id='file-drop' multiple required><br>
<input type='submit' value='Загрузить' >
</form>
<div class='message-div message-div_hidden' id='message-div'></div>

    <div class="block_for_messages">
      <?php
 
          if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
           echo $_SESSION["error_messages"];
              
            //Уничтожаем чтобы не появилось заново при обновлении страницы
              unset($_SESSION["error_messages"]);
         }
 
          if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
             echo $_SESSION["success_messages"];
             
                    //Уничтожаем чтобы не появилось заново при обновлении страницы
                unset($_SESSION["success_messages"]);
         }
         ?>
    </div>
        
    </div>
</div>

<?php
         }else{
?>
        <div id="authorized">
             <h2>Вы не авторизованы</h2>
             <a href="authorizationmain.php" type="button" class="btn btn-primary" >Авторизоваться</a>
        </div>
<?php
    }
?>

<?php
    require_once("Cart/cartoption.php");
?>
</body>
</html>
