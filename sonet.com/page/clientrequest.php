<?php 
	include_once '../work/function.php';

	$a = $_SERVER['REQUEST_URI'];

	myHead("ЗАЯВКА НА ПОДКЛЮЧЕНИЕ");

	myHeader();

	myContent("$a");

	myFooter();

