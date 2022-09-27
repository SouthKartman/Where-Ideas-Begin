<?php
    //Подключение шапки
    require_once("header.php");
?>
  
    <div class ="pace"> </div>
   
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
    <p id="first" onclick="first()">Для чего же нужен данный сайт и что вы сможете на нём сделать </p>
        
        <p id="first_yelloy"; style="display:none" onclick="first_yelloy()">Скрыть блок </p>
        <div class="anim-show">
        <div id="second_hide" style="display:none">
        
        <div class="anim-show">
                <p>Where Ideas Begin</p> <br>
                
                Данный сайт создан для обычных пользователей и начинающих программистов. Тут вы cможете понять нужна ли вам профессия программиста, найти самые удобные и стабильные
              web-редакторы кода на каждый из языков прграммирования, а также собрать целое портфолио своих работ для дальнейшего продвижения кондидатуры в разные компании. Зарегистрировавшись на нём вы сможете найти материал по крипто-рынку с предельно понятным для каждого человека объяснением, а также базовое обучения на каждый из языков программирования проработанное профессиональными преподователями и проверяющие ваши знания тесты. Благодаря данным урокам вы сможете полностью понять что такое крипто-рынок и как он работает, сделать разные приложения на JavaScript, сайты на HTML и PHP, программы разработанные на C++, JAVA, C# и т.д.
              <br><br>Один из примеров разработки на данных языках предоставлен ниже(работает лишь на Персональных Компьютерах):

              <br><br>

              <H1 >SnakeGame: </H1>
              <br><br>
                <iframe src="snake.html" frameborder="0" widht="100%" height="500rem" class="quiz-frame" ></iframe>
                <p>Управление:</p>                
                <ul><li>Начать данную игру можно нажав на игру</li><li>На стрелки назначено управление данной змеёй</li><li>Начать новую игру можно лишь обновив данную страницу в браузере</li></ul>
               </div>
              </div>
        </div>
        
        </div>
    
    <div class="firstvklad">
      <div class="first">
        <div class="anim-show">


<!-- Script Text Animation(работает только без флекса) -->


  <!-- <div class="element-animation">
    <script>
        function onEntry(entry) {
            entry.forEach(change => {
              if (change.isIntersecting) {
               change.target.classList.add('element-show');
              }
            });
          }
          
          let options = {
            threshold: [0.5] };
          let observer = new IntersectionObserver(onEntry, options);
          let elements = document.querySelectorAll('.element-animation');
          
          for (let elm of elements) {
            observer.observe(elm);
          }
          </script> -->

    <h3>Что же такое программирование?</h3>
    
    <p>Программирование — процесс создания компьютерных программ.</p>
    
    <p>
    Программирование сочетает в себе элементы искусства, науки, математики и инженерии.
    В узком смысле слова, программирование рассматривается как кодирование — реализация  одного или 
    нескольких взаимосвязанных алгоритмов на некотором языке программирования.  В более широком смысле, 
    программирование — процесс создания программ, то есть разработка ПО.</p>
  </div>
</div>

<div class="second">
  <div class="anim-show">
  <h3>Плюсы профессии программиста: </h3>
  <p>Высокая зарплата. Средняя зарплата высококвалифицированного программиста 70-100 тыс. рублей. </p>
  <p>Востребованность. Рынок труда для программистов растет за счет цифровизации всех сфер общественной жизни. </p>
  <p>Онлайн-образование, телемедицина, интернет вещей (IoT), даже сельское хозяйство не обходится теперь без IT-специалистов. </p>
  <p>Интересные задачи и простор для творчества</p>
</div>
</div>
<div class="third">
  <div class="anim-show">
  <h3>Минусы профессии программиста: </h3>
  <p> Сложность согласования с клиентами условий работы</p>
  <p>Необходимость постоянного развития и освоения новых технологий</p>
  <p>Издержки профессии – проблемы со здоровьем. Самые распространенные — нарушение зрения, опорно-двигательного аппарата и режима сна</p>
  <p> Необходимость знания технического английского языка</p>
</div>
</div>
    </div>


    <div class="anim-show">

    <div class="adaptivny-slayder">
      
        <input type="radio" name="kadoves" id="slaid1" checked>
        <input type="radio" name="kadoves" id="slaid2">
        <input type="radio" name="kadoves" id="slaid3">
         
        <div class="kadoves">
        <label for="slaid1"></label>
        <label for="slaid2"></label>
        <label for="slaid3"></label>
        </div>
         
        <div class="adaptivny-slayder-lasekun">
        <div class="abusteku-deagulus">
        <img src="img/programming-tasks-3.jpg">
        <img src="img/pexels-christina-morillo-1181263_1500_700_jpg_5_60.jpg"/>
        <img src="img/header_full_stack_senior.jpg"/>
        </div>
        </div>
      </div> 
    </div>
</div>
 
<div class="Onlineblock">

<div class="First">
  <div class="anim-show">



  <!-- Online Test Pad Test Widget (#189330)



  <div id="otp_wgt_5g6a5k7ne7iem"></div>
  <script async src="https://onlinetestpad.com/js/widget.js" type="text/javascript"></script>
  <script type="text/javascript">
      var otp_wjs_dt = (new Date).getTime();
      (function (w, d, n, s, rp) {
          w[n] = w[n] || [];
          rp = {};
          w[n].push(function () {
              otp_render_widget(d.getElementById("otp_wgt_5g6a5k7ne7iem"), 'onlinetestpad.com', '5g6a5k7ne7iem', rp);
          }); 
          s = d.createElement("script");
          s.type = "text/javascript";
          
          // s.src = "//onlinetestpad.com/js/widget.js?" + otp_wjs_dt;
          s.async = true;
          d.getElementsByTagName("head")[0].appendChild(s);
      })(this, this.document, "otp_widget_callbacks");
  </script> -->

   
   <p class="ZagWidget">Насколько же ты знаешь программирование?</p> 

  
<!-- Тест с сайта learningapps -->


<!-- <iframe src="https://learningapps.org/watch?v=pfjr3gpm322" style="border:0px;width:100%;height:400px;margin: 0px;" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe> -->

<!-- Окончательный вариант теста -->

        <iframe src="quiz.php" width="100%" height="500rem" class="quiz-frame" ></iframe>
</div> 
</div>


<!-- Первый вариант теста на java -->



<!-- <div class="Second">

  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nihil dolores deleniti sed consectetur nemo quos, enim ducimus. Distinctio in similique natus praesentium est! Tenetur nobis quaerat rerum labore aut.
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nihil dolores deleniti sed consectetur nemo quos, enim ducimus. Distinctio in similique natus praesentium est! Tenetur nobis quaerat rerum labore aut.
</div> -->



</div>




<!-- <div class="secondvklad">

    <div class="firstinvklad">
        <div class="buttons" class="firstinvklad">
          <div class="anim-show">
            <p id="center">
            <p id="textone">Игра для того  кто хочет стать программистом</p>
            
        <div class="supercenter">
          <a id="openpopup" href="#"   class="button"> 1</a>
          <a href="https://vk.com/ishope" class="button"> 2</a>
          <a href="https://vk.com/ishope" class="button"> 3</a>
          <a href="https://vk.com/ishope" class="button"> 4</a><br>
          <a href="https://vk.com/ishope" class="button"> 5</a>
          <a href="https://vk.com/ishope" class="button"> 6</a>
          <a href="https://vk.com/ishope" class="button"> 7</a>
          <a href="https://vk.com/ishope" class="button"> 8</a><br>
          <a href="https://vk.com/ishope" class="button"> 9</a>
          <a href="https://vk.com/ishope" class="button">10</a>
          <a href="https://vk.com/ishope" class="button">11</a>
          <a href="https://vk.com/ishope" class="button">12</a><br>
          <a href="https://vk.com/ishope" class="button">13</a>
          <a href="https://vk.com/ishope" class="button">14</a>
          <a href="https://vk.com/ishope" class="button">15</a>
          <a href="https://vk.com/ishope" class="button">16</a><br>
          <a href="https://vk.com/ishope" class="button">17</a>
          <a href="https://vk.com/ishope" class="button">18</a>
          <a href="https://vk.com/ishope" class="button">19</a>
          <a href="https://vk.com/ishope" class="button">20</a><br>
          <a href="https://vk.com/ishope" class="button">21</a>
          <a href="https://vk.com/ishope" class="button">22</a>
          <a href="https://vk.com/ishope" class="button">23</a>
          <a href="https://vk.com/ishope" class="button">24</a><br>
          <a href="https://vk.com/ishope" class="button">25</a>
          <a href="https://vk.com/ishope" class="button">26</a>
          <a href="https://vk.com/ishope" class="button">27</a>
          <a href="https://vk.com/ishope" class="button">28</a><br>
          <a href="https://vk.com/ishope" class="button">29</a>
          <a href="https://vk.com/ishope" class="button">30</a>
          <a href="https://vk.com/ishope" class="button">31</a>
          <a href="https://vk.com/ishope" class="button">32</a><br> </div>
    
        
    
    
        </div>
    
        </div>
        
        <script src="main.js"></script>




    </div>
    <div class="secondinvklad">
      
      <div id="popup" class="popup" >
        <div class="popup_container">
          <div class="anim-show">
            <div id="popup_body" class="popup_body" >
                <p>Что такое вспомогательный алгоритм?</p>
                <div class="scenter">
                  
                <div class="otvets" id="otveti1">
                    <p>
                        <a href="" class="buttonsv">Алгоритм, в котором перераспределяются элементы в определённом порядке. </a>
                        <a href="" class="buttonsv">Алгоритм, в котором прямо или косвенно содержится ссылка на него же как на вспомогательный алгоритм. </a>
                        <a href="" class="buttonsv">Алгоритм, целиком используемый в составе другого алгоритма.</a>
                    </p>


                </div>
              </div>
                </div>
                <div id="popup_close" class="popup_close">&#10006</div>  
            </div>
        </div>
        </div>

    </div>
  </div> -->




<?php
    //Подключение подвала
    require_once("footer.php");
?>