<?php
    //Подключение шапки
    require_once("php/header.php");
?>
    <style>
            #message {
            display:none;
            }

        .valid {
             color: green;
         }

        .valid:before {
             content: "✔";
            }
        .invalid {
            color: red;
            }

        .invalid:before {
                content: "✖";
                }
</style>
<!-- Блок для вывода сообщений -->
<div class="block_for_messages">
    <?php
        //Если в сессии существуют сообщения об ошибках, то выводим их
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];
 
            //Уничтожаем чтобы не выводились заново при обновлении страницы
            unset($_SESSION["error_messages"]);
        }
 
        //Если в сессии существуют радостные сообщения, то выводим их
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
             
            //Уничтожаем чтобы не выводились заново при обновлении страницы
            unset($_SESSION["success_messages"]);
        }
    ?>
</div>

  <div class="col-12 registerWoodLandsquare" > 
    <div class="  registerWoodLandText">
<?php
    //Проверяем, если пользователь не авторизован, то выводим форму регистрации, 
    //иначе выводим сообщение о том, что он уже зарегистрирован
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
?>   

   
        <div id="form_register">
            <h2>Форма регистрации</h2>
 
            <form action="php/register.php" method="post" name="form_register">
                <table>
                    <tbody><tr>
                        <td> Имя: </td>
                        <td>
                            <input type="text" name="first_name" required="required">
                        </td>
                    </tr>
 
                    <tr>
                        <td> Фамилия: </td>
                        <td>
                            <input type="text" name="last_name" required="required">
                        </td>
                    </tr>
              
                    <tr>
                        <td> Email: </td>
                        <td>
                            <input type="email" name="email" required="required"><br>
                            <span id="valid_email_message" class="mesage_error"></span>
                        </td>
                    </tr>
              
                    <tr>
                        <td> Пароль: </td>
                        <td>
                                        <input type="password" id="password" name="password"  required="required">
                                        <span id="letter" class="invalid" style="display:none"> Строчные буквы </span>   
                                        <span id="capital" class="invalid" style="display:none"> Прописные буквы</span>   
                                        <span id="number" class="invalid" style="display:none"> Числа</span>   
                                        <span id="length" class="invalid" style="display:none">Минимум 8 букв</span>  
                                        <span id="password_message" class="invalid" style="display:none">Пустое поле</span>   
                        </td>
                    </tr>
                    <tr>
                        <td> Введите капчу: </td>
                        <td>
                            <p>
                                <img src="php/captcha.php" alt="Капча" /> <br><br>
                                <input type="text" name="captcha" placeholder="Проверочный код" required="required">
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="btn_submit_register" value="Зарегистрироватся!" >
                        </td>
                    </tr>
                </tbody></table>
            </form>
        </div>

 <script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var password_message = document.getElementById("password_message");

myInput.onfocus = function() {
    document.getElementById("letter").style.display = "block";
    document.getElementById("capital").style.display = "block";
    document.getElementById("number").style.display = "block";
    document.getElementById("length").style.display = "block";
    document.getElementById("password_message").style.display = "block";
}

myInput.onblur = function() {
    document.getElementById("letter").style.display = "none";
    document.getElementById("capital").style.display = "none";
    document.getElementById("number").style.display = "none";
    document.getElementById("length").style.display = "none";
}

myInput.onkeyup = function() {
  var lowerCaseLetters = /[a-zа-яё]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  var upperCaseLetters = /[A-ZА-ЯЁ]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }

  if(myInput.value) {
    password_message.classList.remove("invalid");
    password_message.classList.add("valid");
    document.getElementById("password_message").style.display = "none";
  } else {
    password_message.classList.remove("valid");
    password_message.classList.add("invalid");

  }

}
            

</script>


<?php
    }else{
?>
        <div id="authorized">
            <h2>Вы уже зарегистрированы</h2>
        </div>
<?php
    }
    ?>

      </div>
    </div>   

<?php
    require_once("Cart/cartoption.php");
?>
