<?php
    //Подключение шапки
    require_once("header-form.php");
?>
 
<!-- Блок для вывода сообщений -->
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
 
<?php
    //Проверяем, если пользователь не авторизован, то выводим форму авторизации, 
    //иначе выводим сообщение о том, что он уже авторизован
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
?>
 
 
    <div id="form_auth">
       
        <form action="auth.php" method="post" name="form_auth">
           
        <div class="form">
		<h1>Вход</h1>
		<div class="input-form">
            <input type="email" name="email" placeholder="Email"  required="required">
            <!-- <span id="valid_email_message" class="mesage_error"></span> -->
		</div>
		<div class="input-form">
            <input type="password" name="password" placeholder="Пароль" required="required"><br>
            <!-- <span id="valid_password_message" class="mesage_error"></span> -->
		</div>
		<div class="input-form">
		<tr>
			
			<td>
				<p>
					<img src="captcha.php" alt="Изображение капчи" /> <br>
					<input type="text" name="captcha" placeholder="Проверочный код">
				</p>
			</td>    
		</tr>
        <div class="input-form"> 
        <td colspan="2">
                        <input type="submit" name="btn_submit_auth" value="Войти">
                    </td>
        </div>

	</div>
        
        
        
        
        
        
        </form>
    </div>
 
<?php
    }else{
?>
 
    <div id="authorized">
    <div class="form">
        <h1>Вы авторизовались успешно</h1>
    
    </div>
    </div>
 
<?php
    }
?>
 
<?php
    //Подключение подвала
    require_once("footerform.php");
?>