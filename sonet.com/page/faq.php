<?php 
	include_once '../work/function.php';

	$a = $_SERVER['REQUEST_URI'];

	myHead("Вопросы и ответы");

	myHeader();

	myContent("$a");

	myFooter();	