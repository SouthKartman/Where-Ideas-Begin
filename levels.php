<?php

	//Стартуем сессию:
	session_start(); 

	//Пишем в сессию информацию о том, что мы авторизовались:
	$_SESSION['auth'] = true; 

	/*
		Пишем в сессию логин и id пользователя
		(их мы берем из переменной $user!):
	*/
	$_SESSION['id'] = $user['id']; 
	$_SESSION['login'] = $user['login']; 

	//Пишем в сессию статус пользователя (приоритет):
	$_SESSION['staus'] = $user['status']; 

?>


	<!-- //Если пользователь авторизован и администратор, то выполним какой-то код:
	// if ( $_SESSION['auth'] == true and $_SESSION['staus'] == 10) {

	// } -->


<?php
	/*
		При регистрации устанавливаем статус в единицу:
	*/
	$query = 'INSERT INTO users SET login="'.$login.'", password="'.$saltedPassword.'", salt="'.$salt.'", status=1';
?>