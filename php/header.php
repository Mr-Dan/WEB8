<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
   
    <title>Wood Land</title>

<meta name="viewport" content="width=device-width; initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" ></script>
<link href="../bootstrap-4.5.2-dist/css/bootstrap.css" rel="stylesheet">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<link href="../CSS/Shop.css" rel="stylesheet">  
<link href="../CSS/WoodCss.css" rel="stylesheet">  
<link href="../CSS/vendors.css" rel="stylesheet">  
<link href="../CSS/ContactsCss.css" rel="stylesheet">  
<link href="../CSS/authCss.css" rel="stylesheet">  

<link href="../php/phpcss/authorization.css" rel="stylesheet" type="text/css">  
<link href="../php/phpcss/register.css" rel="stylesheet" type="text/css">  
<script src="../Cart/jscode.js"  type="text/javascript" ></script>
<script src="../Cart/wicart.js"  type="text/javascript" ></script>

<link href="../Cart/wicart.css" type="text/css" rel="stylesheet">
<link href="../Cart/wicart.num.css" type="text/css" rel="stylesheet">
<script src="../Cart/wicart.num.js"  type="text/javascript"></script>

<script src="../Cart/jscode.js"  type="text/javascript" ></script>
<script src="../Cart/wicart.js"  type="text/javascript" ></script>

<script type="text/javascript" src="Cart/shopnewitem.js"></script>

<script type="text/javascript" src="log/log_set.js"></script>



        <script type="text/javascript">
            $(document).ready(function(){
                "use strict";
                //================ Проверка email ==================
         
                //регулярное выражение для проверки email
                var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
                var mail = $('input[name=email]');
                 
                mail.blur(function(){
                    if(mail.val() != ''){
         
                        // Проверяем, если введенный email соответствует регулярному выражению
                        if(mail.val().search(pattern) == 0){
                            // Убираем сообщение об ошибке
                            $('#valid_email_message').text('');
         
                            //Активируем кнопку отправки
                            $('input[type=submit]').attr('disabled', false);
                        }else{
                            //Выводим сообщение об ошибке
                            $('#valid_email_message').text('Не правильный Email');
         
                            // Дезактивируем кнопку отправки
                            $('input[type=submit]').attr('disabled', true);
                        }
                    }else{
                        $('#valid_email_message').text('Введите Ваш email');
                    }
                });
         
                //================ Проверка длины пароля ==================
                var password = $('input[name=password]');
                 
                password.blur(function(){
                    if(password.val() != ''){
         
                        //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                        if(password.val().length < 3){
                            //Выводим сообщение об ошибке
                            $('#valid_password_message').text('Минимальная длина пароля 3 символа');
         
                            // Дезактивируем кнопку отправки
                            $('input[type=submit]').attr('disabled', true);
                             
                        }else{
                            // Убираем сообщение об ошибке
                            $('#valid_password_message').text('');
         
                            //Активируем кнопку отправки
                            $('input[type=submit]').attr('disabled', false);
                        }
                    }else{
                        $('#valid_password_message').text('Введите пароль');
                    }
                });
//////////////////////
              $('button[type=submitshop]').attr('disabled', true);

                var fio = $('input[name=fio]');
                   fio.blur(function(){
                    if(fio.val() != ''){  
 $('#valid_fio_message').text('');
                    }else{

                        $('#valid_fio_message').text('Введите имя');
                        $('button[type=submitshop]').attr('disabled', true);
                    }
                });
/////////////////////////
                   var city = $('input[name=city]');
                   city.blur(function(){
                    if(city.val() != ''){  
                         $('#valid_city_message').text('');

                    }else{

                        $('#valid_city_message').text('Введите город');
                        $('button[type=submitshop]').attr('disabled', true);

                    }
                });
//////////////////////////////
                  var phone = $('input[name=phone]');
                  phone.blur(function(){
                  if(phone.val() != ''){  
                  if(phone.val().length < 11 || phone.val().length > 11 )
                  {
                       $('#valid_phone_message').text('Длина номера должна быть 11 символов')
                  }
                    else{
                             $('#valid_phone_message').text('');
                        }
                   
                   }else{
                    $('#valid_phone_message').text('Введите номер');
                                            $('button[type=submitshop]').attr('disabled', true);

                  }
                }); 
///////////////////////////
          var mailshop = $('input[name=mailshop]');
                 
                mailshop.blur(function(){
                    if(mailshop.val() != ''){
         
                        // Проверяем, если введенный email соответствует регулярному выражению
                        if(mailshop.val().search(pattern) == 0){
                            // Убираем сообщение об ошибке
                            $('#valid_email_message').text('');

                             if(phone.val() != '' &&question.val() != '' && city.val() != ''&& fio.val() != ''){  
                                                $('button[type=submitshop]').attr('disabled', false);

                           }


                        }else{
                            //Выводим сообщение об ошибке
                            $('#valid_email_message').text('Не правильный Email');  
                                                    $('button[type=submitshop]').attr('disabled', true);
     
                        }
                    }else{
                        $('#valid_email_message').text('Введите Ваш email');
                                                $('button[type=submitshop]').attr('disabled', true);

                    }
                });
         
////////////////////////////////
        var question = $('input[name=question]');

                   question.blur(function(){
                    if(question.val() != ''){
                    }else{

                        $('#valid_question_message').text('Введите адрес');
                                                $('button[type=submitshop]').attr('disabled', true);

                    }
                });
///////////////////////////////////              
            });
        </script>
    </head>
    <body>
 
         <div class=" row hat no-gutters ">

       <div class="col-3 menubutton " >
          <img class="WoodLandIcon" src="../Wood/FreeWood.png"    >
          <a class="logoText" href="../WoodMain.php">WoodLand</a> 
      </div>

   <div class=" col-9 Menu">
     <nav class=" menubutton d-flex flex-row-reverse ">
        <ul class="p-2">
          <li> <a class="buttunhat" href="../Shop.php">Пиломатериалы</a></li>
         <li> <a  class="buttunhat" href="../WoodMain.php">О нас</a> </li>
         <li> <a  class="buttunhat" href="../vendors.php">Наши поставщики</a> </li>
         <li> <a class="buttunhat"  href="../Contacts.php">Контакты </a> </li>
         
                    
    <li class="dropdown show">
  <a class="btn  btn-sm " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><img  class="iconmenu "  src="../Wood/lkicon.png"  >
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  <?php
                //Проверяем авторизован ли пользователь
                if( !isset($_SESSION['email'])  && !isset($_SESSION['vk'])  ){
                    // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
            ?>
                        <a  class="dropdown-item" href="authorizationmain.php">Авторизация</a>        
                         <a  class="dropdown-item" href="registermain.php">Регистрация</a>                            
            <?php
                }else{
                    //Если пользователь авторизован, то выводим ссылку Выход
            ?> 
                  <a  class="dropdown-item" href="../lk.php">Личный Кабинет</a> 


<?php
                //Проверяем авторизован ли пользователь
                if(isset($_SESSION['permission']) && $_SESSION['permission']== 'admin'){
            ?>
                     <a  class="dropdown-item" href="../log.php">Логи</a> 
                      <a  class="dropdown-item" href="../php/logout.php">Выход</a>    
            <?php
                }else{

            ?> 

                        <a  class="dropdown-item" href="../php/logout.php">Выход</a> 
            <?php
                }
            ?>

                                     
            <?php
                }
            ?>
    
  </div>
</li>

<?php
                //Проверяем авторизован ли пользователь
                if(!isset($_SESSION['email']) && !isset($_SESSION['vk']) ){
                    // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
            ?>
                         <li class="price"> <a class="buttunhat" href="authorizationmain.php">  <img  class="iconmenu "  src="../Wood/cart.PNG"  ></a> </li>                
            <?php
                }else{
                    //Если пользователь авторизован, то выводим ссылку Выход
            ?> 
                   <li class="price"> <a class="buttunhat" href="#" id="" onclick="cart.showWinow('bcontainer', 1)">  <img  class="iconmenu "  src="../Wood/cart.PNG"  ></a> </li>                  
            <?php
                }
            ?>

        
         
             
        </ul>
     </nav>
    </div>
</div>

