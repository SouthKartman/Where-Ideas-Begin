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
<li class="is-active"><span>CSS</span></li>  
<li><span>SLIDER</span></li>
<li><span>MENU</span></li>  
<li><span>API</span></li>
<li><span>SASS(SCSS)</span></li>
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
              <li><label><a href="lesson1html.php">Делаем слайдер на css</a></label></li>
              <li><label><a href="lesson1html.php">Создаем бургер меню для сайта</a></label></li>
              <li><label><a href="lesson1html.php">Разбираемся в API HTML5</a></label></li>
              <li><label><a href="lesson1html.php">Препроцессор SASS</a></label></li>
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
        <source src="media/1.mp4" type="video/mp4" />
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
    x = (x + 6 <= c) ? x + 6: c;
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
             <p> Знакомство с CSS.</p>
            </div>
            <div class="rightname"></div>
            </div>
            
  <div class="content">
     <div class="anim-show">
      <div class="opred"><p>CSS (Cascading Style Sheets – каскадные таблицы стилей) – это набор параметров форматирования, который применяют к элементам документа, чтобы изменить их внешний вид.  </p></div>
<br> <br> <div class="noopred"> Это одна из базовых технологий современной веб-разработки. Практически все сайты создаются с использованием каскадных таблиц стилей, поэтому HTML и CSS, как правило, применяются совместно. С помощью HTML разработчик выполняет верстку размеченного текста, создавая документ с гиперссылками, списками, подзаголовками, различными начертаниями шрифтов и т. д. В результате получается никак не оформленное полотно текста с таблицами и иллюстрациями. На заре эры Интернета этого было достаточно, т. к. сеть использовалась исключительно в профессиональных целях.</p></div>
 <div class="imageblock">
    <img src="images/1.jpg" width="100%" alt="lklklk">
    </div>
</div> 
</div>

<a href="#" class="buttonns" id="link_Id" >Читать дальше</a>
  

  <div class="content">
     <div class="anim-show">
     <div class="noopred">
     CSS - это код, который вы используете для стилизации вашей веб-страницы. Основы CSS помогут вам понять, что вам нужно для начала работы. Мы ответим на такие вопросы как: Как сделать мой текст черным или красным? Как сделать так, чтобы контент появлялся в определённом месте на экране? Как украсить мою веб-страницу с помощью фоновых изображений и цветов?
Как и HTML, CSS на самом деле не является языком программирования, можно сравнить его с аксессуар для машин. Это означает, что он позволяет применять стили выборочно к элементам в документах HTML.

</div>
 
</div>
<p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="JjvrbBy" data-user="SocialBeach" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/SocialBeach/pen/JjvrbBy">
  Untitled</a> by socialbeach (<a href="https://codepen.io/SocialBeach">@SocialBeach</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
  
</div>
<!-- <a href="#" class="btn-more" id="link_Id" >Далее</a> -->
<div class="content">
     <div class="anim-show">
     Самый распространенный способ подключения CSS - это когда он хранится в отдельном файле и этот файл подключается ко всем страницам нашего сайта.Самый распространенный способ подключения CSS - это когда он хранится в отдельном файле и этот файл подключается ко всем страницам нашего сайта.

</div> 
</div>
  <div class="content">
     <div class="anim-show"><div class="opred">
     Преимущество такого подхода в том, что CSS файл один, а HTML файлов может быть любое количество, хоть тысяча. Мы сделаем изменение в одном месте CSS файла, например, покрасим все абзацы в красный цвет, и эти изменения применятся на всей 1000 HTML страниц, к которым подключен наш CSS файл. Очень удобно и быстро.
Чтобы подключить CSS файл к HTML странице, в теге head следует написать такую конструкцию: <link rel="stylesheet" href="путь к CSS файлу">.
Сам CSS файл должен быть с расширением .css. Обычно его называют styles.css или style.css.


</div> 
</div> 
</div>
<div class="content">
     <div class="anim-show">
     Внешняя таблица стилей представляет собой созданный в текстовом редакторе файл с расширением CSS, в котором находится весь CSS-код веб-страницы. Внутри файла содержатся только стили без HTML-разметки. Внешняя таблица стилей (CSS-файл) подключается к html-документу с помощью тега link, расположенного внутри раздела head /head. Тег link имеет два обязательных атрибута: href и rel. В атрибуте href указывается путь к внешнему CSS-файлу. Атрибут rel = "stylesheet" показывает тип ссылки. Значение stylesheet указывает на то, что подключается файл стилей CSS. У тега link имеется также атрибут type = "text/css", но по стандарту HTML5 он не является обязательным, поэтому его можно не указывать. Внешнюю таблицу стилей можно подключить ко всем страницам сайта. К веб-странице можно присоединить несколько таблиц стилей, добавляя последовательно несколько тегов link, каждый из которых будет указывать на свой файл с таблицей.


</div> 
</div>
<div class="content">
<div class="anim-show">
<h1>Селекторы CSS </h1>
<br>
              Селекторы представляют структуру веб-страницы. С их помощью создаются правила для форматирования элементов веб-страницы. Селекторами могут быть теги, их классы и идентификаторы, а также атрибуты.<br><br>
              1)	Селектор тега 
              В качестве селектора может выступать любой тег HTML.  
                Селектор тега применяется, когда необходимо задать один стиль для всех элементов с одинаковым тегом. Например, если нужно задать отступ у первой строки для всех абзацев или цвет всех заголовков второго уровня.   
                Однако, часто необходимо изменить цвет не всех заголовков на веб-странице, а только одного или двух. CSS предоставляет такую возможность с помощью селекторов id (идентификатор) и class (класс). 
                <br><br>
              2)	Селектор id (идентификатор) предназначен для применения стиля к уникальным элементам на веб-странице. Каждый идентификатор может встречаться на странице только один раз.
              Чтобы задать данный селектор, следует для тега, к которому нужно применить стиль, добавить атрибут id и в его значении которого указать уникальное имя. В CSS коде селектор id начинается с символа #, после которого идет имя идентификатора.
</div>
<p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="xxjXgay" data-user="SocialBeach" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/SocialBeach/pen/xxjXgay">
  Untitled</a> by socialbeach (<a href="https://codepen.io/SocialBeach">@SocialBeach</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</div>

  </div>
<div class="content">
<div class="anim-show">
<h1>Основные свойства стилей CSS</h1>
При изучении способов подключения и селекторов CSS уже были рассмотрены некоторые примеры свойств стилей и их значений. 
          В данной теме будут представлены часто используемые свойства CSS и их возможные значения. 
          <br><br>
          <div class="noopred"> 1.	Фон элемента – свойство background
        Свойство background позволяет установить характеристики фона для различных элементов веб-страницы.  
        <br><br>
        Характеристики фона
        <br><br>
        а) Свойство background-color – устанавливает цвет фона у элемента.  <br><br>
        Синтаксис CSS  <br><br>
        background-color: red;  <br>
        background-color: #00af45;  <br>
        background-color: #a0c;  <br>
        background-color: rgba(255, 128, 128, 0.5);  <br>
          background-color: transparent;  <br>
        
        В примере выше показаны различные способы задания цвета на веб-странице:
        <br><br>	background-color: red; – используется название цвета на английском языке. При таком подходе есть ограничения, т.к. невозможно получить различные оттенки цветов.
        <br><br>	background-color: #00af45; – используется шестнадцатеричный код числа в модели RGB. Такой способ позволяет выбрать один из 16 млн. цветов.
        <br><br>Цифровая модель RGB расшифровывается как Red-Green-Blue, то есть Красный-Зеленый-Синий. Цвет в RGB представляется в виде трех пар шестнадцатеричных цифр (от 0 до 9, A, B, C, D, E, F), где каждая пара отвечает за свой цвет: две первые цифры – красный, две в середине – зеленый, две последние цифры – синий. 
        Чем больше значение цифры, тем сильнее данный оттенок проявит себя в цвете. Например, в цвете, заданном как #00af45, большее значение у зеленой составляющей (рис. 71). В результате получится некоторый оттенок зеленого цвета.   
        <br><br>
        
        При подборе цвета лучше использовать любой графический редактор (Gimp, Photoshop). В нем можно выбрать нужный цвет из палитры, и редактор покажет шестнадцатеричный и десятичный код выбранного цвета.
        Подобрать цвета также можно с помощью различных онлайн сервисов: https://colorscheme.ru/, https://color.romanuke.com/ и др.
        
        <br><br>б) Свойство background-image – устанавливает одно или несколько фоновых изображений для элемента.
        <br><br>Синтаксис CSS
        <br><br>background-image: url(img/foto.jpg); /*одно фоновое изображение*/
        <br>background-image: url(http://site.ru/rose.png);
        <br>	background-image: url(t1.png), url(tr.png); /*несколько фоновых изображений*/
        <br>background- image: none; /*отменяет фоновое изображение*/
        <br><br> </div>
        <div class="noopred">В качестве значения используется путь к графическому файлу, который указывается внутри конструкции url(). Путь к файлу при этом можно писать, как в кавычках (двойных или одинарных), так и без них.
        Можно добавить несколько фоновых изображений для элемента, перечислив их параметры через запятую. 
        <br><br>
        в) Свойство background-position – указывает, расположение фонового изображения. 
        <br><br>Синтаксис CSS
        <br>background-position: left; /*слева*/
        <br>background-position: right; /*справа*/
        <br>background-position: top; /*сверху*/
        <br>background-position: bottom; /*снизу*/
        <br>background-position: center; /*по центру*/	
        <br><br>
          Часто расположение фонового изображения задается сразу для двух осей, в этом случае значения свойства background-position указываются через пробел. Например, если изображение нужно вывести в правом верхнем углу, то команда будет выглядеть следующим образом:
        background-position: top right; 
        <br><br>
        Можно управлять расстоянием для фонового изображения от левого и верхнего краев элемента с помощью точных значений, указанных в единицах измерения CSS (например, в пикселях или %). 
        <br>background-position: 10px 25px;
        <br>Такая запись означает, что фоновое изображение удалено от левого края на 10 пикселей и от верхнего края на 25 пикселей. Здесь важен порядок записи значений: первое значение отвечает за положение фонового рисунка по горизонтали, второе — по вертикали. Допустимы и отрицательные значения (например, они могут быть полезны в случае, если с левой или верхней стороны фоновой картинки есть область, которую необходимо спрятать).
        
        <br><br>г) Свойство background-repeat – определяет, нужно ли повторять фоновое изображение. 
        <br><br>Синтаксис CSS
        <br><br>background-repeat: repeat-x; /*повтор по горизонтали*/
        <br>background-repeat: repeat-y; /*повтор по вертикали*/
        <br>background-repeat: repeat; /*повтор по вертикали и горизонтали*/
        <br>background-repeat: no-repeat; /*нет повтора*/
        <br>background-repeat: space; /*изображение повторяется столько раз, чтобы полностью заполнить область; если это не удается, между картинками добавляется пустое пространство*/
        <br>background-repeat: round; /*изображение повторяется так, чтобы в области поместилось целое число рисунков; если это не удается сделать, то фоновые рисунки масштабируются*/
        <br><br>	
        д) Свойство background-size – определяет размер фонового изображения. 
        <br><br></div>
        <div class="noopred">Синтаксис CSS<br>
        <br>background-size: 300px; /*ширина изображения в px*/
        <br>background-size: auto 30%; /* ширина изображения вычисляется автоматически с сохранением пропорций, высота изображения – 30%*/
        <br>background-size: auto auto; /*исходные размеры изображения*/
        <br>background-size: cover; /*масштабирование изображения с сохранением пропорций на всю ширину или высоту элемента*/
        <br>background-size: contain; /*масштабирование изображения с сохранением пропорций, так чтобы изображение целиком поместилось в элемент*/
        <br>background-size: 6px, cover; /*размеры для двух фоновых картинок: у первой – ширина 6px, вторая – растянута на всю область фона*/
        
        <br><br>Если в значении свойства background-size указано одно значение, то это значение ширины изображения, высота при этом вычисляется автоматически, исходя из пропорций картинки (значение auto). Если в значении свойства background-size указано два значения, то первое значение – это ширина изображения, второе – высота. 
          Значение auto, заданное одновременно для ширины и высоты (background-size: auto auto), сохраняет исходные размеры фоновой картинки. Если auto установлено только для одной стороны картинки (background-size: auto 30%), то размер этой стороны вычисляется автоматически исходя из пропорций картинки. 
          Значения для нескольких фонов указываются через запятую. 
          <br><br>В CSS используется несколько единиц измерения для определения размеров элементов. К ним относятся:
          <br>	пиксели (px) – единицы фиксированного размера;
          <br>	проценты (%) – масштабируют размер элемента в процентах относительно родительского элемента; 
          <br>	относительная единица (em) – 1em равен текущему размеру элемента, 2em увеличивает размер в 2 раза и т.д. (em  часто используется для размера шрифта).  
          <br><br>	
        д) Свойство background-attachment – определяет, будет ли изображение прокручиваться вместе с содержимым элемента.
        <br><br>Синтаксис CSS
        <br>background-attachment: scroll; /*фоновое изображение прокручивается вместе с текстом и другим содержимым */
        <br>background-attachment: fixed; /*фоновое изображение остается неподвижным*/
        <br>background-attachment: local; /*фоновое изображение прокручивается вместе содержимым элемента*/
</div>
<p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="QWrqpar" data-user="SocialBeach" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/SocialBeach/pen/QWrqpar">
  Untitled</a> by socialbeach (<a href="https://codepen.io/SocialBeach">@SocialBeach</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
<div class="lesson1">
          <h1>Остальные характеристики подробнее изложены в текстовом файле данном ниже:</h1>
        <a href="images\images for LP\HTML\lesson2/Osnovy_CSS.docx">Характеристики свойств CSS</a><br>
        <a href="images\images for LP\HTML\lesson2/Osnovy_Css_2_lektsia.docx">Характеристики свойств CSS.Наследование, вложенность и группировка свойств</a>
        </div>
</div>

</div>
  
  </div>
 
  <div class="right"></div>
  </div>
              




    <div class="readblocktext" id="Pract600PX">
    <div class="nameredacktor">
    <div class="leftname"></div>
            <div class="textredactor">
             <p> Практика</p>
            </div>
            <div class="rightname"></div>
    </div>
    
  </div>

  <div class="readblocktext" id="Pract600PX">

<div class="left"></div>
<div class="read">

<div class="wrapper" id="wrap">
<div class="nameredacktor" id="Pract600PX">
      <div class="leftname"></div>
          <div class="textredactor">
           <p> Задания по теме:Знакомство с CSS</p>
          </div>
      <div class="rightname"></div>
</div>



<div class="content1">
   <div class="anim-show">
   <iframe src="HTMLPRACTIC/PRACTICA1lesson.html" width="100%" height="500rem" class="quiz-frame" ></iframe>

</div>






</div>



</div>

</div>

<div class="right"></div>






</div>





<div class="readblocktext" id="Pract600PX">
    <div class="nameredacktor">
    <div class="leftname"></div>
            <div class="textredactor">
             <p id="titlecontactus"> Проверка Д/З</p>
            </div>
            <div class="rightname"></div>
    </div>
    
  </div>


  <div class="contactuse">
	<div class="container" id="Pract600PX">
		<div class="innerwrap">
		
			<!-- <section class="section1 clearfix">
				<div class="textcenter">
					<span class="shtext">Contact Us</span>
					<span class="seperator"></span>
					<h1>Drop Us a Mail</h1>
				</div>
			</section> -->
		
			<section class="section2 clearfix">
				<div class="col2 column1 firstcont">
          <img  src="img/1.gif" alt="gif" width= "600rem" class="imgdz">
					<!-- <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div class="sec2map" style='overflow:hidden;height:550px;width:100%;'><div id='gmap_canvas' style='height:100%;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(19.075314480255834,72.88153973865361),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.075314480255834,72.88153973865361)});infowindow = new google.maps.InfoWindow({content:'<strong>My Location</strong><br>mumbai<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script> -->
          <!-- <div  style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Яндекс Карты</a><a href="https://yandex.ru/maps/geo/arzamas/53104607/?ll=44.656581%2C55.727512&utm_medium=mapframe&utm_source=maps&z=8.49" style="color:#eee;font-size:12px;position:absolute;top:14px;">Арзамас — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUf7XfCOD" width="660" id="karts" height="520" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div> -->
				</div>
				<div class="col2 column2 last">
					<div class="sec2innercont">
						<div class="sec2addr">
							
							<!-- <p><span class="collig">Phone :</span> +91 976885083</p> -->
							<p><span class="collig">Email :</span> ishope@mail.ru</p>
							<!-- <p><span class="collig">Fax :</span> +91 9768850839</p> -->
						</div>
					</div>
					<div class="sec2contactform">
						<h3 class="sec2frmtitle">Если возникли вопросы пишите на почту ;)</h3>
						<form enctype="multipart/form-data" method="post" id="form" onsubmit="send(event, 'send.php')">
							<div class="clearfix">
								<input class="col2 firstcont" name="name" type="text" placeholder="Login">
								<input class="col2 last" type="text" placeholder="Name">
							</div>
							<div class="clearfix">
								<input  class="col2 firstcont" name="email" type="text" placeholder="Email">
								<input class="col2 last" type="text" placeholder="Contact Number">
							</div>
							<div class="clearfix">
								<textarea name="text" id="" cols="30" rows="7">Your message here...</textarea>
							</div>
              <div class="buttondz">
              <div class="clearfix" id="buttondz1"><input value="Прикрипить" type="file" name="myfile[]" multiple id="myfile"></div>
							<div class="clearfix" id="buttondz2"><input type="submit" value="Отправить"></div>
              </div>
						</form>
					</div>

				</div>
			</section>
		
		</div>
	</div>




            <div class="Onlineblock">

<div class="First">
  <div class="anim-show">



  

   
   <p class="ZagWidget">Тест по теме CSS</p> 

  
<!-- Тест с сайта learningapps -->


<!-- <iframe src="https://learningapps.org/watch?v=pfjr3gpm322" style="border:0px;width:100%;height:400px;margin: 0px;" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe> -->

<!-- Окончательный вариант теста -->

        <iframe src="quiz1.html" width="100%" height="500rem" class="quiz-frame" ></iframe>
        <a href="lesson3html.php" class="buttonnns"  >Далее</a>
</div> 
</div>
          
<script>
function send(event, php){
console.log("Отправка запроса");
event.preventDefault ? event.preventDefault() : event.returnValue = false;
var req = new XMLHttpRequest();
req.open('POST', php, true);
req.onload = function() {
	if (req.status >= 200 && req.status < 400) {
		json = JSON.parse(this.response); // Ебанный internet explorer 11
    	console.log(json);
        
    	// ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
    	if (json.result == "success") {
    		// Если сообщение отправлено
    		alert("Сообщение отправлено");
    	} else {
    		// Если произошла ошибка
    		alert("Ошибка. Сообщение не отправлено");
    	}
    // Если не удалось связаться с php файлом
    } else {alert("Ошибка сервера. Номер: "+req.status);}}; 

// Если не удалось отправить запрос. Стоит блок на хостинге
req.onerror = function() {alert("Ошибка отправки запроса");};
req.send(new FormData(event.target));
}
</script>
 <?php
    //Подключение подвала
    require_once("footer.php");
?>