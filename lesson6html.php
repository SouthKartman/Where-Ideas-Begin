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
<li class="is-complete"><span>API</span></li>
<li class="is-active"><span>SASS(SCSS)</span></li>
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
    x = (x + 10 <= c) ? x + 10: c;
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
             <p> Полный гайд по SCSS/SASS</p>
            </div>
            <div class="rightname"></div>
            </div>
            
  <div class="content">
     <div class="anim-show">
      
      <div class="noopred"><p>Далее я буду использовать названия Sassy, Sass и SCSS, поэтому давайте определимся, так как концептуально разница не велика, будем считать, что это одно и тоже. Вы поймёте различия по мере изучения темы. Отмечу, что SCSS сейчас наиболее популярна, вероятно потому, что является наиболее поздней версией оригинального Sass синтаксиса (некоторые считают её лучшей).
Чтобы по-настоящему почувствовать преимущества Sass, вам нужно понять ключевые идеи этого метаязыка. Об этом мы и поговорим.
Весь Sass/SCSS код компилируется обратно в стандартный CSS, поэтому браузер понимает его и корректно выводит результат. Текущие версии браузеров не поддерживают Sass/SCSS непосредственно (как и другие препроцессоры), а стандартная спецификация CSS не предлагает нам альтернатив (пока).
</p></div>
<div class="imageblock">
    <img src="image/1.png" width="100%" alt="lklklk">
    </div>
<br> <br> <div class="opred"> Приступим!
Пока вы хотя бы раз не попробуете сгенерировать значения для свойств с помощью цикла, вы не познаете настоящую мощь Sassy CSS. Но мы начнём с основ SCSS и постепенно доберёмся до самого интересного.
С помощью SCSS вы после урока сможете реализовать например динамический слайдер без помощи изображений такой как в данном примере:


</div>
<p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="dyeVKQJ" data-user="SocialBeach" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/SocialBeach/pen/dyeVKQJ">
  Untitled</a> by socialbeach (<a href="https://codepen.io/SocialBeach">@SocialBeach</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</div> 
</div>

<a href="#" class="buttonns" id="link_Id" >Читать дальше</a>
  

  <div class="content">
     <div class="anim-show">
     <div class="opred">Что такого есть в Sass/SCSS, чего нет в стандартном CSS?<br><br>
1.	Вложенные правила: вы можете вкладывать CSS свойства, в несколько наборов скобок {}. Это сделает ваш CSS чище и понятней.
<br>
2.	Переменные: в стандартном CSS тоже есть переменные, но переменные Sass куда более мощный инструмент. Например, вы можете использовать переменные в циклах и генерировать значения свойств динамически. Также можно внедрять переменные в имена свойств, например так: property-name-N { … }.<br><br>
3.	Лучшая реализация операторов: вы можете суммировать, вычитать, делить и умножать CSS значения. Sass реализация более интуитивна, чем стандартный функционал CSS calc().<br><br>
4.	Функции: Sass позволяет многократно использовать CSS стили, как функции.<br><br>
5.	Тригонометрия: помимо базовых операций (+, -, *, /), SCSS позволяет писать собственные функции. Например, функции sin и cos можно написать, используя только синтаксис Sass/SCSS. Конечно, вам понадобятся знания тригонометрии. Такие функция могут понадобится для создания анимации.<br><br>
6.	Удобный рабочий процесс: вы можете писать CSS, используя конструкции, знакомые по другим языкам: for-циклы, while-циклы, if-else. Но имейте в виду, это только препроцессор, а не полноценный язык, Sass контролирует генерацию свойств и значений, а на выходе вы получаете стандартный CSS.<br><br>
7.	Миксины: позволяют один раз создать набор правил, чтобы потом использовать их многократно или смешивать с другими правилами. Например, миксины используют для создания отдельных тем макета.

    
   



</div>

</div>

  
</div>
<!-- <a href="#" class="btn-more" id="link_Id" >Далее</a> -->
<div class="content">
     <div class="anim-show">
     <div class="opred">Препроцессор Sass
Sass не динамичный язык. Он не позволяет генерировать или изменять CSS свойства и значения в реальном времени. Но вы можете генерировать их более эффективным способом и внедрять в стандартные свойства (например, для CSS анимации).
</div>
</div> 
</div>
  <div class="content">
     <div class="anim-show"><div class="noopred">
     Несколько фактов для начала
CSS препроцессоры добавляют новый синтаксис в CSS.
Существует 5 CSS препроцессоров: Sass, SCSS, Less, Stylus и PostCSS.
Здесь я буду говорить в основном о SCSS, который схож с Sass. О Sass можно почитать здесь: https://www.sass-lang.com/.
SASS (.sass) Syntactically Awesome Style Sheets,
SCSS (.scss) Sassy Cascading Style Sheets. –Расшифровка sass.
Обратите внимание на расширения, они схожи, но отличаются. Для любителей командной строки, есть возможность конвертировать .sass в .scss и наоборот:


</div> 
<div class="imageblock">
    <img src="image/2.png" width="100%" alt="lklklk">
    </div>


</div> 
</div>



<div class="content">
     <div class="anim-show"><div class="noopred">
     Sass — это первая спецификация Sassy CSS, её разработка началась в 2006 году. Позже разработали альтернативный синтаксис, который некоторые считают лучшей версией языка, а также изменилось первоначальное расширение .sass на новое .scss.
На данный момент ни один браузер не поддерживает CSS препроцессоры напрямую. Вы можете свободно экспериментировать с любым из 5 препроцессоров на сервисе codepen.io. Кроме того, используя препроцессор, вы должны будете установить его к себе на веб-сервер.
Эта статья о SCSS, но другие препроцессоры имеют схожие функции, хотя синтаксис может отличаться.
Superset
Sassy CSS в любом своём проявлении является «расширением» языка CSS, а значит, всё что работает в CSS, работает и в Sass/SCSS.
</div> 



</div> 
</div>

<div class="content">
     <div class="anim-show"><div class="noopred">
     Переменные
В Sass/SCSS есть переменные, и они отличаются от тех, которые вы вероятно видели в CSS — они начинаются с двух тире (--color: #9c27b0). В SCSS переменная обозначается знаком доллара ($color: #9c27b0).

</div> 

<div class="imageblock">
    <img src="image/3.png" width="100%" alt="lklklk">
    </div>
    <div class="noopred">
    Вы можете перезаписать имя переменной или задать для неё значение по умолчанию. Для этого добавьте метку !default к переменной, и если её значение не изменится в дальнейшем и не будет пустым, то будет использоваться заданное значение по умолчанию.
В примере выше окончательным значением переменной $text будет “Piece of string.”, а не “Another string.”, потому что переменная не пуста.

</div> 
<div class="imageblock">
    <img src="image/4.png" width="100%" alt="lklklk">
    </div>


</div> 
</div>

<div class="content">
     <div class="anim-show"><div class="noopred">
     Вы можете перезаписать имя переменной или задать для неё значение по умолчанию. Для этого добавьте метку !default к переменной, и если её значение не изменится в дальнейшем и не будет пустым, то будет использоваться заданное значение по умолчанию.
В примере выше окончательным значением переменной $text будет “Piece of string.”, а не “Another string.”, потому что переменная не пуста.


</div> 

<div class="imageblock">
    <img src="image/5.png" width="100%" alt="lklklk">
    </div>
    <div class="noopred">
    В примере выше окончательным значением переменной $text будет “Piece of string.”, а не “Another string.”, потому что переменная не пуста.
</div> 

    <div class="opred">
    Вложенные правила
</div> 
<div class="imageblock">
    <img src="image/6.png" width="100%" alt="lklklk">
    </div>
    <div class="noopred">
    С помощью Sassy CSS этот код можно записать так:
</div> 
<div class="imageblock">
    <img src="image/7.png" width="100%" alt="lklklk">
    </div>
    <div class="noopred">
    Конечно, в итоге это всё скомпилируется в обычный CSS. Это просто синтаксис, но как видите, он выглядит чище и с меньшими повторениями.
В частности, это помогает работать со сложными макетами. Выравнивание, в котором вложенные свойства записаны в коде, точно соответствует структуре макета приложения.
Тем временем под капотом, препроцессор компилирует всё в стандартный код CSS (как в первом примере), чтобы браузер смог его отобразить. Мы лишь изменили способ написания CSS.

</div> 
<div class="content">
     <div class="anim-show">
      
     



</div> 
<div class="lesson1">
          <h1>Остальные характеристики подробнее изложены в текстовом файле данном ниже:</h1>
        <a href="Полный гайд по SCSS.docx">Полный гайд по SASS(SCSS)</a>
        
        </div>
</div>
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
<div class="nameredacktor">
      <div class="leftname"></div>
          <div class="textredactor">
           <p> Задания по теме:SCSS</p>
          </div>
      <div class="rightname"></div>
</div>


<div class="content1">
   <div class="anim-show">
   <iframe src="HTMLPRACTIC/PRACTICA4lesson.html" width="100%" height="500rem" class="quiz-frame" ></iframe>

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



  

   
   <p class="ZagWidget">Тест по SCSS</p> 

  
<!-- Тест с сайта learningapps -->


<!-- <iframe src="https://learningapps.org/watch?v=pfjr3gpm322" style="border:0px;width:100%;height:400px;margin: 0px;" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe> -->

<!-- Окончательный вариант теста -->

        <iframe src="quiz4.html" width="100%" height="500rem" class="quiz-frame" ></iframe>
        <a href="lesson5html.php" class="buttonnns"  >Далее</a>
</div> 
</div>






</div>
            

            

            
            
            
            
 <?php
    //Подключение подвала
    require_once("footer.php");
?>