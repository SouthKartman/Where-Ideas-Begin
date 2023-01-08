<?php
    //Подключение шапки
    require_once("header.php");
?>




<div class ="pace">
            
            </div>
            <div class="dophead">
            <img src="img/black-and-white-gradient-background.jpg" alt="">
            
            </div>
            
            <div class="container_slider_css">
                <img class="photo_slider_css" src="img/1625703037_2-kartinkin-com-p-oboi-programmista-krasivie-3 (1).png" alt="">
                <img class="photo_slider_css" src="img/homepage11-e1507323531955.jpg" alt="">
                <img class="photo_slider_css" src="img/AdobeStock_314348719-scaled-1.jpeg.jpg" alt="">
                <img class="photo_slider_css" src="img/b_5dc951124ee9c.jpg" alt="">
              </div>
              
              
        <script>
            function first() 
            {
            document.getElementById("second_hide").setAttribute("style", "opacity:1; transition: 1s; height: 100%;");
            document.getElementById("first").setAttribute("style", "display: none");
            document.getElementById("first_yelloy").setAttribute("style", "display: block");
            }
            function first_yelloy() 
            {
            document.getElementById("second_hide").setAttribute("style", "display: none");
            document.getElementById("first_yelloy").setAttribute("style", "display: none");
            document.getElementById("first").setAttribute("style", "display: block");
            }  
        </script>
        
        <div>
          
        <p id="first" onclick="first()">Не знаешь что такое GitHub?  Тогда нажми на меня </p>
        
        <p id="first_yelloy"; style="display:none" onclick="first_yelloy()">Скрыть блок </p>
        <div class="anim-show">
        <div id="second_hide" style="display:none">
        
        <div class="anim-show">
                <p>GitHub...</p> <br>
                
                Крупнейший веб-сервис для хостинга IT-проектов и их совместной разработки. Веб-сервис основан на системе контроля версий Git <br> и разработан на Ruby on Rails и Erlang компанией GitHub, Inc.<br><br>
        
        Проект Hello World - это давняя традиция в программировании. <br>Это простое упражнение, которое позволит познакомиться с основами работы в системе контроля версий Git. Давайте начнем же! <BR>
        <br>Вы узнаете, как:
        <ul><li>Создать новый репозиторий и управлять им</li><li>Внесьте изменения в файл и зафиксировать изменения на GitHub</li><li>Начать новую ветку и управлять ей</li><li>Сделать запрос на извлечение с GitHub и слить результаты запроса с локальными файлами</li></ul>
        
        <iframe width="350rem" height="200rem" src="https://www.youtube.com/embed/JfpCicDUMKc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
                </div>
              </div>
        </div>
        
        </div>
            <div class="nameredacktor">
             <span id="header1" id="word">ЛУЧШИЕ WEB-РЕДАКТОРЫ КОДА НА КАЖДЫЙ ИЗ ЯЗЫКОВ</span>
            
            </div>
            <div class="Codepen2">
              <div class="ending">
                <div class="eone">
                  <div class="anim-show">
                    <a  target="_blank" href="https://replit.com/languages/csharp"><img class="c++" src="img/Xc7pJB9Buqg.jpg" target="_blank" width="100%" height="100%" alt=""></a>
                  </div>
                </div>
                
                <div class="eone">
                  <div class="anim-show">
                    <a target="_blank" href="https://www.jdoodle.com/online-java-compiler/"><img class="c"  src="img/unnamed.jpg" target="_blank" width="100%" height="100%" alt=""></a>
                  </div>
                </div>
                <div class="eone">
                  <div class="anim-show">
                    <a target="_blank" href="https://www.onlinegdb.com/online_c++_compiler"><img class="c" src="img/yO7h10O4tRc.jpg" target="_blank" width="100%" height="100%" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="Codepen1">
              <div class="ending">
                <div class="eone">
                  <div class="anim-show">
                    <a target="_blank" href="https://codepen.io/pen/"><img class="c++" src="img/23.png" target="_blank" width="100%" height="100%" alt=""></a>
                  </div>
                </div>
                
                <div class="eone">
                  <div class="anim-show">
                    <a target="_blank" href="https://www.mycompiler.io/new/php"><img class="c"  src="img/99388902.eb912896.1200x1200o.20dd427590e4.jpeg" target="_blank" width="100%" height="100%" alt=""></a>
                  </div>
                </div>
                <div class="eone">
                  <div class="anim-show">
                    <a target="_blank" href="https://www.online-python.com/"><img class="c" src="img/111.jpg" target="_blank" width="100%" height="100%" alt=""></a>
                  </div>
                </div>
              </div>
            </div>

<?php
    //Подключение подвала
    require_once("footer.php");
?>