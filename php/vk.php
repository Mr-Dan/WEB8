<?php
session_start();
 require_once("../php/dbconnect.php");


$address_site = "http://localhost/";
if(isset($_GET['code'])){
    $code = $_GET['code'];
}else{
      header("HTTP/1.1 301 Moved Permanently");
                    header("Location: ".$address_site."../authorizationmain.php");
             
}

$get_token = file_get_contents("https://oauth.vk.com/access_token?client_id=7707071&display=page&redirect_uri=http://localhost/php/vk.php&client_secret=zmSJYyJa6jol3GDn5oCb&code=".$code);
if(!$get_token){
    exit("Нет токена");
}
$token = json_decode($get_token, true);
$user_id = $token['user_id'];
$access_token = $token['access_token'];

$get_data = file_get_contents("https://api.vk.com/method/users.get?user_id=".$user_id."&access_token=".$access_token."&fields=uid,first_name,last_name,photo_big,sex,city,country,bdate&v=5.52");
if(!$get_data){
    exit("Нет данных");
}
$data = json_decode($get_data, true)['response'][0];

   				     
                    $user_id_md5= $user_id;
                    $user_id_md5 = md5($user_id_md5."Dan");
 					$_SESSION['vk'] = $user_id_md5;


   				$reg = $mysqli->prepare("SELECT * FROM person WHERE person_vk_id = ? ");
                $reg->bind_param("s",  $user_id_md5);
                $reg->execute();
                $result = $reg->get_result();

                    if($result->num_rows == 1){

                        //Если полученный результат не равен false
                        if(($row =  $result->fetch_assoc()) != false){
                            
                                
                                header("HTTP/1.1 301 Moved Permanently");
                                header("Location: ".$address_site."../lk.php");
                            
                        }else{
                            // Сохраняем в сессию сообщение об ошибке. 
                            $_SESSION["error_messages"] .= "<p class='mesage_error' >Ошибка в запросе к БД</p>";
                            
                            //Возвращаем пользователя на страницу регистрации
                            header("HTTP/1.1 301 Moved Permanently");
                            header("Location: ".$address_site."../registermain.php");
                        }

                        /* закрытие выборки */
                        $reg->close();

                        //Останавливаем  скрипт
                        exit();
                    }

                    else {

                    	    $allname = $data['first_name'] . " ". $data['last_name'] ;
           					$reg_person = $mysqli->prepare("INSERT INTO person (person_vk_id,Person_name) VALUES (?, ?)");
           					$reg_person->bind_param("ss",  $user_id_md5,$allname);
            				$reg_person->execute();

            			if(!$reg_person){
                			// Сохраняем в сессию сообщение об ошибке. 
               			 $_SESSION["error_messages"] .= "<p class='mesage_error' >Ошибка запроса на добавления пользователя в БД</p>";
                
                			//Возвращаем пользователя на страницу регистрации
                			header("HTTP/1.1 301 Moved Permanently");
                			header("Location: ".$address_site."../registermain.php");

                //Останавливаем  скрипт
                exit();
            }else{


                //Отправляем пользователя на страницу авторизации
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: ".$address_site."lk.php");
            }

            /* Завершение запроса */
            $reg_person->close();

            //Закрываем подключение к БД
            $mysqli->close();

                    }


?>
