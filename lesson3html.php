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
<li  class="is-active"><span>SLIDER</span></li>
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
             <p>Делаем слайдер на css</p>
            </div>
            <div class="rightname"></div>
            </div>
            
  <div class="content">
     <div class="anim-show">
      <div class="opred"><p>Слайдер — это специальный веб-дизайнерский элемент, который представляет собой блок, внутри которого размещаются чередующиеся изображения, текст, видео и др. контент. </p></div>
<br> <br> <div class="noopred">Слайдер в том или ином исполнении присутствует во всех современных веб-сайтах, потому что такие блоки являются визуально привлекательными и могут акцентировать внимание пользователей на своем контенте. </p></div>
 <div class="imageblock">
    <img src="images/1.jpg" width="100%" alt="lklklk">
    </div>
</div> 
</div>

<a href="#" class="buttonns" id="link_Id" >Читать дальше</a>
  

  <div class="content">
     <div class="anim-show">
     <div class="noopred">
     Слайдер как элемент веб-страницы приобрел свою популярность во времена распространения фреймворков JavaScript, когда появилась возможность его простой реализации. Поэтому встретить слайдер на просторах интернета можно очень часто, так как нет ничего сложного в том, чтобы добавить слайдер на свой сайт.

Слайдер бывает очень разным. Например, самая простая его реализация — это обычный последовательный просмотр элементов самого слайдера. современные возможности CSS позволяют при разработке слайдера не использовать JavaScript. Многие современные разработчики как раз склоняются к реализации слайдера при помощи только HTML и CSS. У такого подхода есть одно явное преимущество — скорость работы такого слайдера выше за счет того, что вся обработка кода слайдера происходит в движке браузера и она никак не зависит от каких-либо дополнительных процессов.
</div>
 
</div>
<p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="dyeVKQJ" data-user="SocialBeach" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/SocialBeach/pen/dyeVKQJ">
  Untitled</a> by socialbeach (<a href="https://codepen.io/SocialBeach">@SocialBeach</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
  
</div>
<!-- <a href="#" class="btn-more" id="link_Id" >Далее</a> -->
<div class="content">
     <div class="anim-show">
     Выше представлени один из примеров сложных слайдеров реализованном на JS и препроцессоре языка стилей css - SASS (SCSS) 

</div> 
</div>
  <div class="content">
     <div class="anim-show"><div class="opred">
     Готовый слайдер для сайта — это идеальный вариант, когда ваш сайт работает на популярных CMS, например, Wordpress, Joomla и др. Многие подобные CMS имеют готовые решения для слайдера в виде специальных плагинов. 
     НО Как сделать слайдер на своем сайте HTML при помощи CSS?
Бывает же такое, что сайт не использует CMS. В этом случае нужно будет самостоятельно разработать свой слайдер. Как правило, такая разработка слайдера должна быть осуществлена при помощи той же технологии, на которой разработан ваш сайт. Практически любой современный язык программирования или какой-либо фреймворк имеют в своем арсенале инструменты для разработки слайдера. Все инструменты и подходы, как можно реализовать слайдер для сайта, не перечислить. Сейчас будут представлены самые простые и зрелищьные слайдеры для разных сайтов.

</div> 
</div> 
</div>
<div class="content">
<div class="imageblock">
    <img src="imagess/1.png" width="100%" alt="lklklk">
    </div>
     <div class="anim-show">
     <div class="noopred"> Здесь показан слайдер слайд-шоу в коде</div>
     <p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="xxjXJOp" data-user="SocialBeach" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/SocialBeach/pen/xxjXJOp">
  Untitled</a> by socialbeach (<a href="https://codepen.io/SocialBeach">@SocialBeach</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</div>
<div class="content">
  <div class="noopred"> Здесь показан 2 слайдер с отображением блоков</div>
<p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="NWMaBvG" data-user="SocialBeach" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/SocialBeach/pen/NWMaBvG">
  Untitled</a> by socialbeach (<a href="https://codepen.io/SocialBeach">@SocialBeach</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</div>

<div class="content">
  <div class="noopred"> Здесь показан 2 слайдер с отображением блоков</div>
<p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="NWMaBvG" data-user="SocialBeach" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/SocialBeach/pen/NWMaBvG">
  Untitled</a> by socialbeach (<a href="https://codepen.io/SocialBeach">@SocialBeach</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</div>







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

        <iframe src="quiz1.html" width="100%" height="500rem" class="quiz-frame" ></iframe>
        <a href="lesson4html.php" class="buttonnns"  >Далее</a>
</div> 
</div>






</div>
            

            

            
            
            
            
 <?php
    //Подключение подвала
    require_once("footer.php");
?>