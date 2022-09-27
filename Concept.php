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

<iframe width="400rem" height="300rem" src="https://www.youtube.com/embed/JfpCicDUMKc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
        </div>
      </div>
</div>

</div>
    <div class="nameredacktor">
     <span id="header1" id="word"></span>
    
    </div>
    <div class="lesson1">

      
<h1>1.1 Среда программирования</h1>
Для того, чтобы начать программировать на языке Java, первоначально нужно установить программную среду на свой компьютер.
<br><br>
В этом уроке мы рассмотрим:
<br><br>
-Откуда скачать установочный пакет Java.<br>
-Процесс инсталляции.<br>
-Настройку путей к выполняемым файлам.<br>
-Проверку установки.<br><br>


Скачать инсталляционный пакет можно на сайте компании Oracle по ссылке:

 <a href="http://www.oracle.com/technetwork/java/javase/downloads/index.html">http://www.oracle.com"</a><br>

Качаем JDK последней версии (Java 7 или Java 8).
<br><br>
Дальнейшая установка будет рассмотрена на примере Windows. Если вы не знаете тип вашей  Windows (x86 или x64) откройте Панель управления -> Система там будет указан Тип системы. Если тип вашей системы — 32 разрядная, то нужно устанавливать версию для x86, если 64 разрядная, то x64.
<br>
Внимание, перед тем как начать скачивание, нужно выбрать пункт Accept License Agreement вверху таблицы.
    </div>
    <div class="lesson1">
      Для того, чтобы установить Java на компьютер,  запустите скаченный файл, после чего начнется процесс установки .


    </div>

    <div class="Codepen2">
      <div class="ending">
        <div class="eone">
          <div class="anim-show">
            <img class="c++" src="images/images for LP/JAVA/1 урок/1.jpg" target="_blank" width="100%" height="100%" alt=""></a>
          </div>
        </div>
        
        <div class="eone">
          <div class="anim-show">
            <img class="c"  src="images/images for LP/JAVA/1 урок/2.jpg" target="_blank" width="100%" height="100%" alt=""></a>
          </div>
        </div>
        <!-- <div class="eone">
          <div class="anim-show">
            <img class="c" src="img/yO7h10O4tRc.jpg" target="_blank" width="100%" height="100%" alt=""></a>
          </div> -->
        </div>
      </div>
    </div>
    <div class="lesson1">
    Следуйте инструкциям мастера установки, и через несколько минут установка будет завершена.

По окончанию установки, программа предложит перейти к технической документации и руководствам по Java, для чего нужно будет нажать кнопку Next Steps. После этого в вашем браузере откроется страница с документацией Java <a href=" http://docs.oracle.com/javase/">http://docs.oracle.com/javase/</a> , которая является очень полезной для изучения.
</div>

<div class="lesson1">
  <h1>Настройка переменных сред:  </h1>
  На следующем шаге необходимо  задать пути к выполняемым файлам, а именно задать системные переменные PATH, CLASSPATH и JAVA_HOME .

  Для этого откройте Панель управления -> Система, выберете Дополнительные параметры системы. В появившемся окне нажмите кнопку Переменные среды.
  
  В открывшемся окне в блоке Системные переменные нужно проверить существует ли переменная PATH, если переменная не существует, то ее нужно создать нажав на кнопку Создать, если переменная  PATH уже существует, то ее нужно  Изменить


</div>




    <div class="Codepen1">
      <div class="ending">
        <div class="eone">
          <div class="anim-show">
            <img class="c++" src="images/images for LP/JAVA/1 урок/3.jpg" target="_blank" width="100%" height="100%" alt=""></a>
          </div>
        </div>
        
        <div class="eone">
          <div class="anim-show">
            <img class="c"  src="images/images for LP/JAVA/1 урок/4.jpg" target="_blank" width="100%" height="100%" alt=""></a>
          </div>
        </div>
        <div class="eone">
          <div class="anim-show">
            <img class="c" src="images/images for LP/JAVA/1 урок/5.jpg" target="_blank" width="100%" height="100%" alt=""></a>
          </div>
        </div>
      </div>
    </div>
    <div class="lesson1">
      Если переменной PATH уже присвоены другие значения, то новое значение добавляется через точку с запятой «;» в самом конце строки.
    
    Также необходимо создать переменную CLASSPATH, если она еще не создана. В качестве ее значения необходимо указать «.;»
    
    Подобным образом создается/изменяется переменная JAVA_HOME.  Значение этой переменной — путь к каталогу, в который была установлена Java (как для PAHT), но уже без поддериктории bin. Например:
    
    Значение в PATH: C:\Program Files\Java\jdk1.7.0_25\bin
    
    Значение в JAVA_HOME: C:\Program Files\Java\jdk1.7.0_25
    
    После того, как были прописаны переменные, установку Java можно считать завершенной! 
    </div>
    <div class="lesson1">
      <h1>Проверка установки:</h1>

      Чтобы проверить, успешно ли прошла установка, откройте командную строку. Для этого в меню Windows Пуск  в строке поиска введите команду cmd и нажмите Enter. После этого откроется командное окно, в котором нужно ввести следующую команду.

java -version
После чего, если отобразится информация об установленной версии java, то установка прошла успешно.
    </div>
    <div class="Codepen2">
      <div class="ending">
        <div class="eone">
          <div class="anim-show">
            <img class="c++" src="images/images for LP/JAVA/1 урок/6.jpg" target="_blank" width="100%" height="100%" alt=""></a>
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
        </div>
      </div>
    </div>

    <?php
    //Подключение подвала
    require_once("footer.php");
?>