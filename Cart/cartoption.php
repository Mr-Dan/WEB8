




<!---Форма для магазина-------------------------------->
<div id="order" class="popup">
<a href="#" onclick="cart.closeWindow('order', 0)" style="float:right">[закрыть]</a>
<h4>Введите ваши контактные данные</h4>

<form id="formToSend">
<input id="fio" name="fio" type="text" placeholder="Ваши фамилия и имя"  class="" />
<span id="valid_fio_message" class="mesage_error"></span>
<input id="city"name="city" type="text" placeholder="Город"  class="text-input"/>
<span id="valid_city_message" class="mesage_error"></span>
<input id="phone"name="phone" type="text" placeholder="Контактный телефон" class="text-input"/>
<span id="valid_phone_message" class="mesage_error"></span>
<input id="email" name="mailshop" type="text" placeholder="Электронная почта" class="" />
<span id="valid_email_message" class="mesage_error"></span>
<br>
<textarea id="question" name="question" placeholder="Адрес"></textarea>
<span id="valid_question_message" class="mesage_error"></span>

<br>
<b>Доставка:</b>
<br>
<select id="delivery">
<option value="-">-</option>
<option value="Доставка">Доставка</option>
<option value="Самовывоз">Самовывоз</option>
</select>
<br>
<input type="checkbox" value="V"> Предоплата
</form>
<button type="submitshop" onclick="cart.sendOrder('formToSend,overflw,bsum');" href="#">Отправить заказ</button>
</div>
<!----------------------------------------------------->



<script>
var cart;
var config;
var wiNumInputPrefID;
/* WI-GLOBAL-VARS */
$(document).ready(function(){  
    cart = new WICard("cart");
    config = {'clearAfterSend':true, 'showAfterAdd':false};
    
    cart.init("basketwidjet", config);
    /* WI-MODULES */
    
    
}); 
document.addEventListener('visibilitychange', function(e) {
cart.init("basketwidjet", config);
}, false);
</script>


  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Уведомление</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         Товар добавлен в корзину!
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>

          <?php
                //Проверяем авторизован ли пользователь
                if(!isset($_SESSION['email']) && !isset($_SESSION['vk']) ){
                    // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
            ?>
                         <li class="price"> <a class="buttunhat" href="authorizationmain.php">  <img  class="iconmenu "  src="../Wood/cart.PNG"  ></a> </li>                
            <?php
                }else{
                   
            ?> 
     <li class="price"> <a class="buttunhat" data-dismiss="modal" href="#" id="" onclick="cart.showWinow('bcontainer', 1)">  <img  class="iconmenu "  src="../Wood/cart.PNG"  ></a> </li>                  
            <?php
                }
            ?>
        </div>
        
      </div>
    </div>
  </div>