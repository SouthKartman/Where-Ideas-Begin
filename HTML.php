<?php
    //Подключение шапки
    require_once("headertut.php");
?>



	
<div class="hamburger-menu">
		<input id="menu__toggle" type="checkbox" />
		<label class="menu__btn" for="menu__toggle">
		  <span></span>
		</label>
		
		<ul class="menu__box">

		  <li><a target="_blank" class="menu__item" href="index.php">Главная</a></li>
		  <li><a target="_blank" class="menu__item" href="https://github.com/">GitHub</a></li>
		  <li><a target="_blank" class="menu__item" href="kod.php">Редакторы кода</a></li>
		  <li><a target="_blank" class="menu__item" href="Tutorials.php">Курсы</a></li>
		  <li><a target="_blank" class="menu__item" href="https://www.aktt.org/">Сайт Техникума</a></li>
		  <li><a target="_blank" class="menu__item" href="ourteams.php">Наша Команда</a></li>
		  
	<br><br> <iframe frameborder="0" style="border:none;width:295px;height:80px;" width="320" height="450" src="https://music.yandex.ru/iframe/#playlist/yamusic-daily/152599575">Слушайте <a href='https://music.yandex.ru/users/yamusic-daily/playlists/152599575'>Плейлист дня</a> — <a href='https://music.yandex.ru/users/yamusic-daily'>yamusic-daily</a> на Яндекс.Музыке</iframe>
		  <!-- <br><br><iframe class="test" src="https://open.spotify.com/embed/playlist/37i9dQZF1E3aiW7d90Hxx2?utm_source=generator" width="295" height="80" widht-left= frameborder="0" allowtransparency="true" allow="encrypted-media" ></iframe>
		  <script>
		              const onPlay = () => {
		                console.log('onplay')
		                const audio = new Audio('https://www.youtube.com/watch?v=S4lZHCgefMI&list=RDS4lZHCgefMI&start_radio=1');
		                audio.play();
		              }
		              </script> -->
		</ul>
	  </div>
	  
	



	<div class="description">
		<div class="logo">HTML и CSS</div>
		<p>HTML (от англ. HyperText Markup Language — «язык гипертекстовой разметки») — стандартизированный язык разметки документов для просмотра веб-страниц в браузере.
			<BR><BR>CSS ( англ. Cascading Style Sheets «каскадные таблицы стилей») — формальный язык описания внешнего вида документа (веб-страницы), написанного с использованием языка разметки HTML.
		</p>
	</div>

	<div class="swiper slider slider_main">
		<div class="swiper-wrapper slier__wrapper">

			<div class="swiper-slide slider__item">
				<div class="slider__img" data-swiper-parallax="20%" >
					<a href="lesson1html.php"> 
						<img src="images/1.jpg" alt="">
						</a>
				</div>
			</div>
			<div class="swiper-slide slider__item">
				<div class="slider__img" data-swiper-parallax="30%" >
					<a href="lesson2html.php"> 
						<img src="img/1proj.jpg" alt="">
						</a>
				</div>
			</div>
			<div class="swiper-slide slider__item">
				<div class="slider__img" data-swiper-parallax="20%" >
					<a href="lesson3html.php"> 
						<img src="img/1proj.jpg" alt="">
						</a>
				</div>
			</div>
			<div class="swiper-slide slider__item">
				<div class="slider__img" data-swiper-parallax="30%" >
					<a href="lesson4html.php"> 
						<img src="img/1proj.jpg" alt="">
						</a>
				</div>
			</div>
			<div class="swiper-slide slider__item">
				<div class="slider__img" data-swiper-parallax="20%" >
					<a href="images/images for LP/HTML/lesson5and6/Strochnye_i_blochnye_elementy_Blochnaya_model2.pptx"> 
						<img src="img/1proj.jpg" alt="">
						</a>
				</div>
			</div>
			<div class="swiper-slide slider__item">
				<div class="slider__img" data-swiper-parallax="20%" >
					<a href="images/images for LP/HTML/lesson5and6/FlexBox.pptx"> 
						<img src="img/1proj.jpg" alt="">
						</a>
				</div>
			</div>
			
		</div>
	</div>

	<div class="swiper slider slider_bg">
		<div class="swiper-wrapper slier__wrapper">

			<div class="swiper-slide slider__item">
				<div class="slider__img" data-swiper-parallax="20%" style="background-image: url(images/1.jpg);"></div>
			</div>
			<div class="swiper-slide slider__item">
				<div class="slider__img" data-swiper-parallax="30%" style="background-image: url(images/2.jpg);"></div>
			</div>
			<div class="swiper-slide slider__item">
				<div class="slider__img" data-swiper-parallax="20%" style="background-image: url(images/3.jpg);"></div>
			</div>
			<div class="swiper-slide slider__item">
				<div class="slider__img" data-swiper-parallax="30%" style="background-image: url(images/4.jpg);"></div>
			</div>
			<div class="swiper-slide slider__item">
				<div class="slider__img" data-swiper-parallax="20%" style="background-image: url(images/5.jpg);"></div>
			</div>
			
			<div class="swiper-slide slider__item">
				<div class="slider__img" data-swiper-parallax="20%" style="background-image: url(images/7.jpg);"></div>
			</div>
			
			<div class="swiper-slide slider__item">
				<div class="slider__img" data-swiper-parallax="20%" style="background-image: url(images/7.jpg);"></div>
			</div>

		</div>
	</div>

	<script src="libs/swiper/swiper-bundle.min.js"></script>
	<script src="js/app.js"></script>

    <?php
    //Подключение подвала
    require_once("footerform.php");
?>