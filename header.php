<?php
    //Запускаем сессию
    session_start();
?>
 
<!DOCTYPE html>
<html >

    <head>
    <title>WhereIdeas.Begin</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="baa41c2f20da0608" />
        <link rel="stylesheet" href="img/lesson.css">
        <link rel="stylesheet" href="img/style.css">
        <link rel="icon" href="img/LOGO.png" type="image/x-icon">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                        if(password.val().length < 6){
                            //Выводим сообщение об ошибке
                            $('#valid_password_message').text('Минимальная длина пароля 6 символов');
         
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
            });
        </script>
    </head>
    <body>

 

    <div class ="Mainhead">

            <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <?php
            if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
 ?>
            <ul class="menu__box">
                <li><a target="_blank" class="menu__item" href="index.php">Главная</a></li>
                <li><a target="_blank" class="menu__item" href="https://github.com/">GitHub</a></li>
                <li><a target="_blank" class="menu__item" href="kod.php">Редакторы кода</a></li>
              
                <li><a target="_blank" class="menu__item" href="https://www.aktt.org/">Сайт Техникума</a></li>
                <li><a target="_blank" class="menu__item" href="ourteams.php">Наша Команда</a></li>
                
                <br><br><br><br><br> <iframe frameborder="0" style="border:none;width:295px;height:80px;" width="320" height="450" src="https://music.yandex.ru/iframe/#playlist/yamusic-daily/152599575">Слушайте <a href='https://music.yandex.ru/users/yamusic-daily/playlists/152599575'>Плейлист дня</a> — <a href='https://music.yandex.ru/users/yamusic-daily'>yamusic-daily</a> на Яндекс.Музыке</iframe>
               <!--  <br><br><br><br><br><iframe class="test" src="https://open.spotify.com/embed/playlist/37i9dQZF1E3aiW7d90Hxx2?utm_source=generator" width="295" height="80" widht-left= frameborder="0" allowtransparency="true" allow="encrypted-media" ></iframe>
               <script>
               const onPlay = () => {
                   console.log('onplay')
                   const audio = new Audio('https://www.youtube.com/watch?v=S4lZHCgefMI&list=RDS4lZHCgefMI&start_radio=1');
                   audio.play();
               }
               </script> -->
            </ul> 
            
            <?php }                                     
                else {
                  ?>
                    <ul class="menu__box">
                <li><a target="_blank" class="menu__item" href="index.php">Главная</a></li>
                <li><a target="_blank" class="menu__item" href="https://github.com/">GitHub</a></li>
                <li><a target="_blank" class="menu__item" href="kod.php">Редакторы кода</a></li>
                <li><a target="_blank" class="menu__item" href="Tutorials.php">Курсы </a></li>
                <li><a target="_blank" class="menu__item" href="valut.php">Криптовалюта</a></li>
                <li><a target="_blank" class="menu__item" href="https://www.aktt.org/">Сайт Техникума</a></li>
                <li><a target="_blank" class="menu__item" href="ourteams.php">Наша Команда</a></li>
                
                <br><br><br><br><br> <iframe frameborder="0" style="border:none;width:295px;height:80px;" width="320" height="450" src="https://music.yandex.ru/iframe/#playlist/yamusic-daily/152599575">Слушайте <a href='https://music.yandex.ru/users/yamusic-daily/playlists/152599575'>Плейлист дня</a> — <a href='https://music.yandex.ru/users/yamusic-daily'>yamusic-daily</a> на Яндекс.Музыке</iframe>
               <!--  <br><br><br><br><br><iframe class="test" src="https://open.spotify.com/embed/playlist/37i9dQZF1E3aiW7d90Hxx2?utm_source=generator" width="295" height="80" widht-left= frameborder="0" allowtransparency="true" allow="encrypted-media" ></iframe>
               <script>
               const onPlay = () => {
                   console.log('onplay')
                   const audio = new Audio('https://www.youtube.com/watch?v=S4lZHCgefMI&list=RDS4lZHCgefMI&start_radio=1');
                   audio.play();
               }
               </script> -->
            </ul>

                 <?php
                  }
              ?>
            </div>

            <div class= "logo">
                <h1 id="header1">WHERE <span id="word">IDEAS.<span id="word"></span> BEGIN</span></h1>
                <script>
                    (function () {
                    let replacementSpan = document.createElement("span");
                    
                    const header = document.getElementById("header1");
                    const word = document.getElementById("word");
                    
                    const charactersArr = word.innerText.split("");
                    const replacementSpansArr = charactersArr.map((ltr, indx) => {
                        let newSpan = document.createElement("span");
                        newSpan.innerText = ltr;
                        newSpan.style.setProperty("--i", indx);
                        newSpan.classList.add("ltr");
                        return newSpan;
                    });
                    // Terrible procedural code because I can't get Array.reduce to play happliy with Nodes ...
                    replacementSpansArr.forEach((spn) => replacementSpan.appendChild(spn));
                    header.append(replacementSpan);
                    word.remove();
                    })();
                </script>
            </div>

            <div id="auth_block">
            <?php
                //Проверяем авторизован ли пользователь
                if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
                    // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
            ?>
                    <div class="link">
                <div class="row">
                    <div class="textone"> <a  href="form_auth.php" class="btn btn-sm animated-button thar-one">Вход</a> </div>
                    <div class="textone"> <a  href="form_register.php" class="btn btn-sm animated-button thar-three">Регистрация</a> </div>
                  </div>
            </div>
            <?php
                }else{
                    //Если пользователь авторизован, то выводим ссылку Выход
            ?> 
                    <div class="link">
                <div class="row">
                   
                    <div class="textone"> <a  href="logout.php" class="btn btn-sm animated-button thar-one">Выход из учётной записи</a> </div>
                  </div>
            </div>
            <?php
                }
            ?>
            </div>
            <div class="clear"></div>
    </div>		