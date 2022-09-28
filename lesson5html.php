<?php
    //Подключение шапки
    require_once("headerND.php");
?>

<div id="scroll-top">
  <button><span data-hover="Наверх"></span></button>
</div>

<div class ="Mainhead">

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
<li class="is-complete"><span>HTML</span></li>  
<li class="is-complete"><span>CSS</span></li>  
<li class="is-complete"><span>SLIDER</span></li>
<li class="is-complete"><span>MENU</span></li>  
<li class="is-active"><span>API</span></li>
<li><span>SCSS(SASS)</span></li>
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
              
              <span>Курсы по HTML и CSS</span>
            </div>
            <ul>
              <li><label><a href="lesson1html.php">Знакомство с HTML</a></label></li>
              <li>
                <label><a href="lesson2html.php">Знакомство с CSS</a></label>

                <!-- <label class="a-label__chevron" for="item-2"></label> -->

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
              <li><label><a href="lesson3html.php">Делаем слайдер на css</a></label></li>
              <li><label><a href="lesson4html.php">Создаем бургер меню для сайта</a></label></li>
              <li><label><a href="lesson5html.php">Разбираемся в API HTML5</a></label></li>
              <li><label><a href="lesson6html.php">Препроцессор SASS</a></label></li>
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
             <p> Курсы по HTML и CSS:</p>
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
    x = (x + 8 <= c) ? x + 8: c;
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
             <p> Разбираемся в API HTML5</p>
            </div>
            <div class="rightname"></div>
            </div>
            
  <div class="content">
     <div class="anim-show">
     <div class="imageblock">
    <img src="image/api/1.jpeg" width="100%" alt="lklklk">
    </div>
      <div class="opred"><p>Что такое API?

Сокращение API расшифровывается как Application Programming Interface, что обычно переводится как «программный интерфейс приложения» или «интерфейс прикладного программирования». API широко используются в программировании для организации взаимодействия серверных приложений. API позволяют двум сервисам взаимодействовать друг с другом, не зная при этом о деталях реализации друг друга. API — это важнейший аспект проектирования систем, имеющий отношение к абстракции, к одной из фундаментальных концепций информатики.
</p></div>
<br> <br> <div class="noopred"> Существует точка зрения, в соответствии с которой HTML5, язык разметки, не имеет программных интерфейсов. А «API HTML» — это, на самом деле, JavaScript-API, выдающие ответы, представленные в формате HTML. Это так из-за того, что API обычно создают для организации взаимодействия серверных программ.

Это заблуждение можно связать с тем фактом, что спецификация HTML5, определённая W3C, в основном, касается семантических элементов HTML. Большинство рассмотренных возможностей API HTML воспринимаются как продвинутые способы работы с HTML, а не как интерфейсы прикладного программирования. </p></div>
 
</div> 
</div>

<a href="#" class="buttonns" id="link_Id" >Читать дальше</a>
  

  <div class="content">
     <div class="anim-show">
     <div class="noopred">
     Спецификации API HTML5 можно найти в документации WHATWG (Web Hypertext Application Technology Working Group).

Если почитать документацию WHATWG, то можно заметить, что JavaScript там практически не упоминается, и что для понимания API HTML5 не нужно знать JavaScript.

Вот что об этом пишет Леа Веру в материале об API HTML: «В API HTML определения и протоколы находятся в самом HTML. Инструменты обращаются к HTML за конфигурационными сведениями. API HTML обычно представлены определёнными наборами классов и атрибутов, которые можно использовать в обычном HTML-коде».

Фронтенд-разработчики обычно бегло знакомятся с API HTML прежде чем создавать UI-библиотеки, заменяющие их возможности. Здесь мы поговорим о некоторых API HTML.
</div>
 
</div>

  
</div>
<!-- <a href="#" class="btn-more" id="link_Id" >Далее</a> -->
<div class="content">
     <div class="anim-show">
     <div class="opred">API Geolocation</div>
     <div class="imageblock">
    <img src="image/api/2.jpg" width="100%" alt="lklklk">
    </div>
     <div class="noopred">API Geolocation позволяет веб-сервисам получать сведения о географическом положении пользователи. Из-за того, что подобные сведения ставят под угрозу безопасность пользователя и его личные данные, эти сведения не доступны приложениям до тех пор, пока пользователь не даст согласие на работу с ними. После того, как согласие дано, что обычно выражается в щелчке пользователя по соответствующей кнопке особого диалогового окна, сведения о его местоположении могут быть получены и использованы приложением.

Географическая информация может оказаться очень ценной для некоторых приложений, функционирование которых завязано на знании о том, где именно находится пользователь. Это, например, службы медицинской помощи, спортивные приложения, приложения-карты, даже маркетинговые приложения. Все эти приложения могут получить большую пользу от знания того, где находится пользователь, и того, что находится поблизости от него.

API Geolocation HTML5 даёт более точную информацию о местоположении пользователя в том случае, если на устройстве пользователя (на мобильном, например), включён GPS и доступны другие средства для определения местоположения. Сведения о местоположении пользователя поступают в приложение в виде географических координат, представленных широтой и долготой. При работе с API Geolocation используются методы, наподобие getCurrentPosition(), возвращающие сведения о текущем местоположении пользователя. Подобные механизмы используются и для вывода сведений о пользователе на электронной карте, вроде той, что имеется в Google Maps. Метод watchPosition() возвращает сведения о текущем местоположении пользователя и обновляет сведения при перемещении пользователя. Это — весьма полезный метод, так как он являет собой пример динамических возможностей рассматриваемого API, давая программисту большую гибкость. Метод clearWatch() останавливает наблюдение за перемещениями пользователя, инициированное методом watchPosition(). Например, возможен сценарий, когда наблюдение за местоположением пользователя останавливается после того, как он, построив с помощью программы маршрут и руководствуясь в пути её указаниями, достиг пункта назначения.</div>
</div> 
</div>
  <div class="content">
     <div class="anim-show">
     <div class="opred">API Drag and Drop</div>
     <div class="imageblock">
    <img src="image/api/3.jpg" width="100%" alt="lklklk">
    </div>
     <div class="noopred">Перетаскивание объектов (Drag and Drop, DnD), это простая процедура, позволяющая пользователю перемещать элементы из одного места экрана программы в другое. В данном случае речь идёт о включении возможности перетаскивания элементов. Функционал этого API позволяет программистам создавать простые онлайн-игры, вроде шахмат, где можно перетаскивать по доске шахматные фигуры. 
     HTML5-реализация DnD впервые появилась, благодаря усилиям Microsoft, в IE5.0. Позже эта технология была реализована и в других браузерах. Здесь используется модель событий DOM и соответствующие события.

Для того чтобы элемент можно было бы перетаскивать, его атрибут draggable должен быть установлен в true.Далее, настраивают обработчики событий наподобие ondragstart, ondragover и ondrop. Первый срабатывает в начале процесса перетаскивания. Второй — в момент, когда перетаскиваемый объект находится над целевым элементом. Третий — в конце процесса перетаскивания элемента.

Если реализовывать DnD-механизмы с использованием API HTML5, можно ожидать полной поддержки этих механизмах в специфических окружениях, а так же минимизации разного рода неожиданностей, которые могут возникнуть в процессе перетаскивания элементов. Одним из ограничений данного API можно назвать тот факт, что он не даёт возможностей управлять происходящим в процессе перетаскивания элемента.
</div> 
</div>
</div>
<div class="content">
     <div class="anim-show">
    <div class="opred">API Web Storage</div>
    <div class="imageblock">
    <img src="image/api/4.jpg" width="100%" alt="lklklk">
    </div>
    <div class="noopred">Появление API Web Storage сыграло очень важную роль в веб-разработке, так как эти API позволяют веб-приложениям сохранять различные данные в хранилище браузера. Локальное хранение данных и возможность организации доступа к ним без необходимости предварительной передачи этих данных по сети открывают для приложения массу ценных возможностей. До появления API Web Storage HTML5 разработчики не могли хранить локально значительные объёмы информации. Данные пользователя приходилось сохранять в куки-файлах. А ведь эти файлы ориентированы на организацию взаимодействия с сервером и их нужно передавать на сервер в каждом HTTP-запросе.

API Web Storage предлагают разработчикам возможность хранения на клиенте значительных объёмов информации, которая изменяется сравнительно редко, и передача которой по сети означает необходимость неоправданной траты времени и системных ресурсов. У API Web Storage есть и другие преимущества перед куки-файлами, например — это возможность хранения больших объёмов информации, это улучшения в сфере безопасности. В результате API Web Storage нашёл применение во многих сценариях.

API Web Storage предлагает разработчику два уникальных механизма, направленных на решение различных задач. Это — локальное хранилище (local storage) и сессионное хранилище (session storage).

В локальном хранилище данные хранятся долговременно. Например, пользовательские данные из него не удаляются даже после закрытия и открытия страницы или после обновления страницы. Удаление данных из такого хранилища выполняется явным образом. Для работы с этим хранилищем используется объект localStorage.

В сессионном хранилище, с другой стороны, данные хранятся временно. Они удаляются в том случае, если браузер закрывают, или если обновляют страницу. Для работы с сессионным хранилищем применяется объект sessionStorage.</div>


</div> 

</div>

<div class="content">
     <div class="anim-show">
    <div class="opred">API Web Speech</div>
    <div class="imageblock">
    <img src="image/api/5.jpg" width="100%" alt="lklklk">
    </div>
    <div class="noopred">API Web Speech состоит из двух основных частей. Это — SpeechSynthesis (синтез речи, эта технология известна как Text to Speech или TTS) и SpeechRecognition (распознавание речи). Реализация API Web Speech в браузерах дала возможность организовывать речевое взаимодействия пользователя и браузера, выполняемое посредством голосовых команд. Это, например, голосовой поиск, голосовая навигация, голосовой набор текста.

При использовании этого API всё ещё необходимо пользоваться префиксами браузеров, оно доступно лишь в Chrome и Firefox. Оно, кроме того, использует серверный API Google для распознавания речи. Из-за того, что этот API основан на взаимодействии с серверными ресурсами, пользоваться им можно лишь при подключении к интернету.

Работа с API распознавания речи осуществляется через интерфейс SpeechRecognition. В распоряжении разработчика, пользующегося объектом, созданным с помощью этого интерфейса, имеется набор методов, вроде start(), свойств, наподобие lang, и событий, таких, как onstart и onend.

Одним из недостатков этого API является тот факт, что разрешение на его использование запрашивается лишь один раз, а после этого система считает, что использование этого API разрешено и не запрашивает повторных разрешений. Этот недостаток может стать причиной ухудшения защиты данных пользователей, так как вредоносная программа способна незаметно записывать или прослушивать речь пользователя после того, как пользователь дал первое и единственное разрешение на работу с этим API.</div>


</div> 

</div>



<div class="content">
     <div class="anim-show">
    <div class="opred">API WebRTC</div>
    <div class="imageblock">
    <img src="image/api/6.jpg" width="100%" alt="lklklk">
    </div>
    <div class="noopred">API WebRTC предназначен для организации взаимодействия систем в режиме реального времени. Возможности этого API позволяют реализовывать пиринговый обмен файлами между пользователями, проводить телеконференции, выполнять потоковую передачу звука и видеоизображения.

API WebRTC позволяет работать с аудио- и видео-потоками устройств, подключённых к компьютеру, таких, как видеокамеры и микрофоны, без необходимости использования сторонних плагинов.

Этот API поддерживают все современные браузеры и даже клиенты для мобильных платформ, таких, как Android и iOS.

Модель обмена данными, реализованная в API WebRTC отличается от других коммуникационных моделей. Для обеспечения работы этого API в браузерах имеются реализации других API. </div>


</div> 

</div>

<div class="content">
     <div class="anim-show">
    <div class="opred">Другие API</div>
    
    <div class="noopred"><div class="opred">Мы рассмотрели лишь некоторые API, описанные в спецификациях W3C и WHATWG. Существуют и многие другие API, о которых стоит упомянуть. Среди них отметим следующие:</div>
<br><br><br><br>
API Canvas 2D Context позволяет формировать в браузере двумерные изображения. Нужно отметить, что в существующем стандарте WHATWG сказано, что в настоящее время активная поддержка этого API прекращена.<br><br>
API Battery Status позволяет веб-сайту вносить коррективы в свою работу, ориентируясь на уровень заряда батарей устройства. Если заряда осталось мало, то некоторые возможности сайта могут быть отключены.<br><br>
API Media представляют собой браузерную реализацию средств для работы со звуком и видео. При работе с этим API используются методы наподобие onplay(), canPlayType(), pause(), play() и load().<br><br>
API Web Workers позволяет запускать JavaScript-код в фоновых потоках, не нагружая главный поток сложными вычислениями и не блокируя работу пользовательского интерфейса, а значит — не мешая пользователю работать с сайтом.<br><br>
API File позволяет браузеру загружать и обрабатывать файлы из локальной файловой системы. Для выполнения подобных действий необходимо разрешение, полученное от пользователя. Кроме того, этот API позволяет пользователям выбирать несколько файлов. Одна из сильных сторон этого API заключается в том, что он поддерживает технологию DnD, позволяя пользователям перетаскивать файлы на веб-страницы для выполнения неких действий с этими файлами.<br><br>
API History предназначен для работы с историей посещения страниц, хранимой браузером.<br><br>
API Server-Sent Events (SSE) позволяет веб-страницам получать данные, отправляемые им по инициативе серверов.</div>


</div> 

</div>


<div class="content">
     <div class="anim-show">

     Итоги:

За HTML5-атрибутами скрываются мощные API, упрощающие разработку веб-проектов. Они позволяют сделать работу со страницами более интерактивной. Но, к сожалению, на них часто не обращают внимания, отдавая предпочтение JavaScript-реализациям стандартных механизмов.

В разговоре об HTML5-API стоит учитывать тот факт, что они постоянно развиваются. А по мере их развития сглаживаются различия в их реализации в разных браузерах.

Вот что сказано об HTML5-API в одной публикации InfoWorld: «API HTML5, конечно, нельзя назвать универсальным средством для разработки мобильных приложений. Всему своё время и место. Это касается и HTML5-приложений, и нативных приложений, которые всё ещё актуальны».

Не каждая веб-страница и не каждое веб-приложение нуждается в HTML5-API. Но понимание того, что они такое, того, как они работают, знание их сильных и слабых сторон поможет программисту принять решение о том, что именно лучше всего подходит для решения стоящих перед ним задач.

  


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

        <iframe src="quiz3.html" width="100%" height="500rem" class="quiz-frame" ></iframe>
        <a href="lesson6html.php" class="buttonnns"  >Далее</a>
</div> 
</div>






</div>
            

            

            
            
            
            
 <?php
    //Подключение подвала
    require_once("footer.php");
?>