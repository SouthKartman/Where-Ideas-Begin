<?php
    //Подключение шапки
    require_once("headerND.php");
?>

    
    <div id="scroll-top">
  <button><span data-hover="Наверх"></span></button>
</div>
<div class ="Mainhead" id="element">

    <div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
        <span></span>
    </label>
    
    <!-- <ul class="menu__box">
        <li><a target="_blank" class="menu__item" href="index.php">Главная</a></li>
        <li><a target="_blank" class="menu__item" href="https://github.com/">GitHub</a></li>
        <li><a target="_blank" class="menu__item" href="kod.php">Редакторы кода</a></li>
      
        <li><a target="_blank" class="menu__item" href="https://www.aktt.org/">Сайт Техникума</a></li>
        <li><a target="_blank" class="menu__item" href="ourteams.php">Наша Команда</a></li>
        
        <br><br><br><br><br> <iframe frameborder="0" style="border:none;width:295px;height:80px;" width="320" height="450" src="https://music.yandex.ru/iframe/#playlist/yamusic-daily/152599575">Слушайте <a href='https://music.yandex.ru/users/yamusic-daily/playlists/152599575'>Плейлист дня</a> — <a href='https://music.yandex.ru/users/yamusic-daily'>yamusic-daily</a> на Яндекс.Музыке</iframe> -->
       <!--  <br><br><br><br><br><iframe class="test" src="https://open.spotify.com/embed/playlist/37i9dQZF1E3aiW7d90Hxx2?utm_source=generator" width="295" height="80" widht-left= frameborder="0" allowtransparency="true" allow="encrypted-media" ></iframe>
       <script>
       const onPlay = () => {
           console.log('onplay')
           const audio = new Audio('https://www.youtube.com/watch?v=S4lZHCgefMI&list=RDS4lZHCgefMI&start_radio=1');
           audio.play();
       }
       </script> -->
    <!-- </ul>  -->
    
    
            <ul class="menu__box">
                <br>
                
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
    
    <!-- <div id="auth_block"> -->
    <section>
    
    
    <ol class="progress-bar">
    <li class="is-active"><span>JavaScript</span></li>  
    <li><span>Подключение JS</span></li>  
    <li><span>Переменные</span></li>
    <li><span>JQuery</span></li>  
    <li><span>Тест на JS</span></li>
    <li><span>Скрипт блоков</span></li>
    <!-- <li><span>Launch Date</span></li>  
    <li><span>Step</span></li>
    <li><span>Step</span></li>
    <li><span>Agreement</span></li>   -->
    </ol>
    </section>
            <div class="link">
            
        <!-- <div class="row">
            <div class="textone"> <a  href="form_auth.php" class="btn btn-sm animated-button thar-one">Вход</a> </div>
            <div class="textone"> <a  href="form_register.php" class="btn btn-sm animated-button thar-three">Регистрация</a> </div>
          </div> -->
    </div>
    
    <div class="clear"></div>
    
    
    </div>	
    
    
    
    
    <nav>
              <input type="checkbox" id="menu" name="menu" class="m-menu__checkbox">
              <label class="m-menu__toggle" for="menu">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
              </label>
              <label class="m-menu__overlay" for="menu"></label>
              
              <div class="m-menu">
              <br><br><br>
                <div class="m-menu__header">
                  <label class="m-menu__toggle" for="menu">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#EFEFEF" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                      <line x1="18" y1="6" x2="6" y2="18"></line>
                      <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                  </label>
                  
                  <span>Курс по JavaScript</span>
                </div>
                <ul>
                  <li><label><a href="lessonjs1.php">Знакомство с JavaScript</a></label></li>
                  <li>
                    <label><a href="lessonjs2.php">Подключение JS</a></label>
                    <!-- <input type="checkbox" id="item-2" name="item-2" class="m-menu__checkbox">
                    <div class="m-menu">
                      <div class="m-menu__header">
                        <label class="m-menu__toggle" for="item-2">
                          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#EFEFEF" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs" color="white">
                            <path d="M19 12H6M12 5l-7 7 7 7"/>
                          </svg>
                        </label>
                        <span>Item 2</span>
                      </div>
                      <ul>
                        <li><label>Item 2.1</label></li>
                        <li><label>Item 2.2</label></li>
                        <li>
                          <label class="a-label__chevron" for="item-2-3">Item 2.3</label>
                          <input type="checkbox" id="item-2-3" name="item-2" class="m-menu__checkbox">
                          <div class="m-menu">
                            <div class="m-menu__header">
                              <label class="m-menu__toggle" for="item-2-3">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#EFEFEF" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                  <path d="M19 12H6M12 5l-7 7 7 7"/>
                                </svg>
                              </label>
                              <span>Item 2.3 </span>
                            </div>
                            <ul>
                              <li><label>Item 2.3.1</label></li>
                              <li><label>Item 2.3.2</label></li>
                              <li><label>Item 2.3.3</label></li>
                              <li><label>Item 2.3.4</label></li>
                              <li><label>Item 2.3.5</label></li>
                            </ul>                
                        </li>
                        <li><label>Item 2.4</label></li>
                        <li><label>Item 2.5</label></li>
                        <li><label>Item 2.6</label></li>
                        <li><label>Item 2.7</label></li>
                        <li><label>Item 2.8</label></li>
                        <li><label>Item 2.9</label></li>
                    </div>
                  </li> -->
                  <li><label><a href="lessonjs3.php">Переменные и типы данных</a></label></li>
                  <li><label><a href="lessonjs4.php">Что такое JQuery</a></label></li>
                  <li><label><a href="lessonjs5.php">Создание Теста</a></label></li>
                  <li><label><a href="lessonjs6.php">Появление блоков при скролле</a></label></li>
                </ul>  
              </div>
            </nav>
    
    
    
    
    
    
    
    
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
                  
                 <!-- Скрытый блок (скрипт) -->
            
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
                  <div class="leftname"></div>
                <div class="textredactor">
                 <p> Курс по JavaScript</p>
                </div>
                <div class="rightname"></div>
                </div>
                
                <div class="mainredaktor">
                <section class="about">
            <video class="video"  loop="loop" autoplay="" muted="">
                <source src="media/Untitled.mp4" type="video/mp4" />
                <!-- <source src="https://denis-creative.com/wp-content/uploads/2018/01/video.ogv" type="video/ogv" />
                <source src="https://denis-creative.com/wp-content/uploads/2018/01/video.webm" type="video/webm" /> -->
              </video>
            <div class="about-header">
              <!-- <img src="https://denis-creative.com/wp-content/uploads/2018/01/about-header-bg-2.png" class="about-header-bg-2" alt=""> -->
            </div>
            
            <div class="about-title"><br><br>HTML (от англ. HyperText Markup Language — «язык гипертекстовой разметки») — стандартизированный язык разметки документов для просмотра веб-страниц в браузере.
            <br><br>CSS ( англ. Cascading Style Sheets «каскадные таблицы стилей») — формальный язык описания внешнего вида документа (веб-страницы), написанного с использованием языка разметки HTML.
            <br><br><br><br>
          </div>
            <div class="about-footer"></div>
          </section>
          
                  </div>
            </div>
            
            
                    <!-- <div class="eone">
                      <div class="anim-show">
                        <img class="c"  src="images/images for LP/JAVA/1 урок/2.jpg" target="_blank" width="100%" height="100%" alt=""></a>
                      </div>
                    </div> -->
                    <!-- <div class="eone">
                      <div class="anim-show">
                        <img class="c" src="img/yO7h10O4tRc.jpg" target="_blank" width="100%" height="100%" alt=""></a>
                      </div> -->
                    <!-- </div>
                  </div>
                </div> -->
    
    
    <!-- <div class="dialog">
      
    
    
    
    
    
    
    </div>
    <style>
    .dialog
    {
        background-color: white;
        display: block;
        text-align: center;
        flex: box;
        flex-wrap: center;
        height: 100px;
        width: 1000px;
    
    }
    
    </style> -->
    
    
    
    
    
    
    <!-- Появление блоков по кнопке -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
      jQuery(function() {
      var c = $(".content").size();
      x = 1;
      $('.content:lt(' + x + ')').fadeIn();
      $('.buttonns').click(function(e) {
        e.preventDefault();
        x = (x + 5 <= c) ? x + 5: c;
        $('.content:lt(' + x + ')').show();
      });
    });
    </script>
    <!-- Удаление кнопки -->
    <script>
    $(document).ready(function() {
      var x = get_cookie ( "link_Id_click" );
      if (x == "true") {
      document.getElementById('link_Id').style.display = 'none';
      }
      $("#link_Id").click(function() {
         this.style.display='none';
         document.cookie = "link_Id_click=true; expires=Mon, 01-Jan-2018 00:00:00 GMT";
      });
    });
     
    function get_cookie (cookie_name) {
      var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
      if (results)
        return (unescape (results[4] ));
      else
        return null;
    }
    </script>
    
    
    <div class="readblocktext">
    
      <div class="left"></div>
      <div class="read">
      
      <div class="wrapper">
      <div class="nameredacktor">
                  <div class="leftname"></div>
                <div class="textredactor">
                 <p> Сегодня мы познакомимся с JS</p>
                </div>
                <div class="rightname"></div>
                </div>
                
      <div class="content">
         <div class="anim-show">
          <div class="opred"><p>Давайте посмотрим, что такого особенного в JavaScript, чего можно достичь с его помощью и какие другие технологии хорошо с ним работают.</p></div>
    <br> <br> <div class="noopred">Изначально JavaScript был создан, чтобы «сделать веб-страницы живыми».
      JavaScript — это кросс-платформенный, объектно-ориентированный скриптовый язык, являющийся небольшим и легковесным. Внутри среды исполнения JavaScript может быть связан с объектами данной среды и предоставлять программный контроль над ними.

      Программы на этом языке называются скриптами. Они могут встраиваться в HTML и выполняться автоматически при загрузке веб-страницы.
      
      Скрипты распространяются и выполняются, как простой текст. Им не нужна специальная подготовка или компиляция для запуска.
      
      Это отличает JavaScript от другого языка – Java.</p></div>
     <div class="imageblock">
        <img src="images/1.jpg" width="100%" alt="lklklk">
        </div>
    </div> 
    </div>
    
    <a href="#" class="buttonns" id="link_Id" >Читать дальше</a>
      
    
      <div class="content">
         <div class="anim-show">
         <div class="noopred">
          Сегодня JavaScript может выполняться не только в браузере, но и на сервере или на любом другом устройстве, которое имеет специальную программу, называющуюся «движком» JavaScript.

          У браузера есть собственный движок, который иногда называют «виртуальная машина JavaScript».
          Как работают движки?
Движки сложны. Но основы понять легко. <br>

Движок (встроенный, если это браузер) читает («парсит») текст скрипта<br>
Затем он преобразует («компилирует») скрипт в машинный язык.<br>
После этого машинный код запускается и работает достаточно быстро.<br>
Движок применяет оптимизации на каждом этапе. Он даже просматривает скомпилированный скрипт во время его работы, анализируя проходящие через него данные, и применяет оптимизации к машинному коду, полагаясь на полученные знания. В результате скрипты работают очень быстро.
JavaScript включает стандартную библиотеку объектов, например, Array, Date и Math, а также базовый набор языковых элементов, например, операторы и управляющие конструкции. Ядро JavaScript может быть расширено для различных целей путём добавления в него новых объектов, например:
    </div>
     
    </div>
    
      
    </div>
    <!-- <a href="#" class="btn-more" id="link_Id" >Далее</a> -->
    <div class="content">
         <div class="anim-show">
          Современный JavaScript – это «безопасный» язык программирования. Он не предоставляет низкоуровневый доступ к памяти или процессору, потому что изначально был создан для браузеров, не требующих этого.

          Возможности JavaScript сильно зависят от окружения, в котором он работает. Например, Node.JS поддерживает функции чтения/записи произвольных файлов, выполнения сетевых запросов и т.д.
          
          В браузере для JavaScript доступно всё, что связано с манипулированием веб-страницами, взаимодействием с пользователем и веб-сервером.
          
          Например, в браузере JavaScript может:
          
          Добавлять новый HTML-код на страницу, изменять существующее содержимое, модифицировать стили.
          Реагировать на действия пользователя, щелчки мыши, перемещения указателя, нажатия клавиш.
          Отправлять сетевые запросы на удалённые сервера, скачивать и загружать файлы (технологии AJAX и COMET).
          Получать и устанавливать куки, задавать вопросы посетителю, показывать сообщения.
          Запоминать данные на стороне клиента («local storage»).
    
    </div> 
    </div>
      <div class="content">
         <div class="anim-show"><div class="opred">
          Что делает JavaScript особенным?
          Как минимум, три сильные стороны <br>
          
          Полная интеграция с HTML/CSS.<br>
          Простые вещи делаются просто.<br>
          Поддерживается всеми основными браузерами и включён по умолчанию.<br>
          JavaScript – это единственная браузерная технология, сочетающая в себе все эти три вещи.
          
          Вот что делает JavaScript особенным. Вот почему это самый распространённый инструмент для создания интерфейсов в браузере.
          
          Хотя, конечно, JavaScript позволяет делать приложения не только в браузерах, но и на сервере, на мобильных устройствах и т.п.
    
    </div> 
    </div> 
    </div>
    <div class="content">
      <div class="anim-show"><div class="opred">
        JavaScript на стороне клиента расширяет ядро языка, предоставляя объекты для контроля браузера и его Document Object Model (DOM). Например, клиентские расширения позволяют приложению размещать элементы в форме HTML и обрабатывать пользовательские события, такие как щелчок мыши, ввод данных в форму и навигация по страницам.
        JavaScript на стороне сервера расширяет ядро языка, предоставляя объекты для запуска JavaScript на сервере. Например, расширение на стороне сервера позволяет приложению соединяться с базой данных, обеспечивать непрерывность информации между вызовами приложения или выполнять манипуляции над файлами на сервере.
 </div> 
 </div> 
 </div>
    <div class="content">
         <div class="anim-show">
          Итого<br>
          JavaScript изначально создавался только для браузера, но сейчас используется на многих других платформах.
          Сегодня JavaScript занимает уникальную позицию в качестве самого распространённого языка для браузера, обладающего полной интеграцией с HTML/CSS.
          Многие языки могут быть «транспилированы» в JavaScript для предоставления дополнительных функций. Рекомендуется хотя бы кратко рассмотреть их после освоения JavaScript.
    
    
    </div> 
  
    </div>
    
      </div>
    
      
      </div>
     
      <div class="right"></div>
      </div>
                  
    
                <div class="Onlineblock">
    
    <div class="First">
      <div class="anim-show">
    
    
    
      
    
       
       <p class="ZagWidget">Тест по первой теме HTML</p> 
    
      
    <!-- Тест с сайта learningapps -->
    
    
    <!-- <iframe src="https://learningapps.org/watch?v=pfjr3gpm322" style="border:0px;width:100%;height:400px;margin: 0px;" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe> -->
    
    <!-- Окончательный вариант теста -->
    
            <iframe src="quiz1js.html" width="100%" height="500rem" class="quiz-frame" ></iframe>
            <a href="lessonjs2.php" class="buttonnns"  >Далее</a>
    </div> 
    </div>
    
    
    
    
    
    
    </div>

    <!-- Правка бага с страницей -->


    <script>$(document).ready(function(){$('html, body').animate({
        scrollTop: $("#element").offset().top
    }, 2000);
})</script>
            
    <?php
    //Подключение подвала
    require_once("footer.php");
?>
                
    
                
                
                
    