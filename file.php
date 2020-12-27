<?php
    session_start();

  	$_SESSION["error_messages"] = '';
     
    //Объявляем ячейку для добавления успешных сообщений
    $_SESSION["success_messages"] = '';

	if(isset($_FILES)) {
	$allowedTypes = array('image/jpg','image/jpeg','image/png','image/gif');
	$uploadDir = "uploads/"; //Директория загрузки. Если она не существует, обработчик не сможет загрузить файлы и выдаст ошибку

	for($i = 0; $i < count($_FILES['file']['name']); $i++)
	{ //Перебираем загруженные файлы
		$uploadFile[$i] = $uploadDir.basename($_FILES['file']['name'][$i]);
		$fileChecked[$i] = false;
		for($j = 0; $j < count($allowedTypes); $j++) { //Проверяем на соответствие допустимым форматам
		if($_FILES['file']['type'][$i] == $allowedTypes[$j]) {
		$fileChecked[$i] = true;
		break;
	}
}

if($fileChecked[$i])
 { //Если формат допустим, перемещаем файл по указанному адресу
		if(move_uploaded_file($_FILES['file']['tmp_name'][$i], $uploadFile[$i])) 
		{
			$_SESSION["success_messages"] .="<p class='safety_request'><strong>Успешно загружен</strong> </p>";
 			header("HTTP/1.1 301 Moved Permanently");
       		header("Location: ".$address_site."../lk.php");
       	 //Останавливаем скрипт
       	  exit();
	} 
		else {
			$_SESSION["error_messages"] .="<p class='mesage_error'><strong>Ошибка!</strong> Ошибка </p>";
 			header("HTTP/1.1 301 Moved Permanently");
       		header("Location: ".$address_site."../lk.php");
        //Останавливаем скрипт
         exit();
	}

} 
	else {
			 $_SESSION["error_messages"] .= "<p class='mesage_error'><strong>Ошибка!</strong> Недопустимый формат</p>";
			 header("HTTP/1.1 301 Moved Permanently");
        	 header("Location: ".$address_site."../lk.php");
          //Останавливаем скрипт
         exit();
		}

	}

} else {
			$_SESSION["error_messages"] .= "<p class='mesage_error'><strong>Ошибка!</strong> Вы не прислали файл!</p>";
 			header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."../lk.php");
            //Останавливаем скрипт
            exit();
		}

?>