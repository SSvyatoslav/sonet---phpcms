<?php
	session_start();

	define('DB_HOST', '127.0.0.1');
	define('DB_LOGIN', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'sonet');

	$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);



	define('ORDERS_LOG', 'orders.log');

	if($link){
		//echo 'Соединение установлено.';
	}
	else{
		die('Ошибка подключения к серверу баз данных.');
	}