<?php
    //Подключение шапки
    require_once("header-form.php");
?>
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
 
<?php
    //Проверяем, если пользователь не авторизован, то выводим форму регистрации, 
    //иначе выводим сообщение о том, что он уже зарегистрирован
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
?>
        <div id="form_register">
            
 
             <form action="register.php" method="post" name="form_register">
            
             <div class="form">
		<h1>Регистрация</h1>
		<div class="input-form">
                <input type="text" placeholder="Введите Имя" name="first_name" required="required">
		</div>
        <div class="input-form">
                <input type="text" placeholder="Введите Логин" name="last_name" required="required">
		</div>    
        <div class="input-form">
                <input type="email" placeholder="Электронная почта" name="email" required="required"><br>
                <!-- <span id="valid_email_message" class="mesage_error"></span> -->
		</div>     
        <div class="input-form">
                <input type="password" name="password" placeholder="Пароль" required="required"><br>
                <!-- <span id="valid_password_message" class="mesage_error"></span> -->
		</div>  
        <div class="input-form">   
        <td>
            <p>
                <img src="captcha.php" alt="Капча" /> <br><br>
                 <input type="text" name="captcha" placeholder="Проверочный код" required="required">
             </p>
             </td>
        </div>  

        <div class="input-form">
        <td colspan="2">
             <input type="submit" name="btn_submit_register" value="Зарегистрироватся!">
        </td>   
		</div>
            </form>
        </div>
<?php
    }else{
?>    
        <div class="form">
        <div id="authorized">
            <h2>Вы уже зарегистрированы</h2>
        </div>
        </div>
<?php
    }
     
    //Подключение подвала
    require_once("footerform.php");
?>