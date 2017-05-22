<?php 
	include_once '../work/function.php';

	$a = $_SERVER['REQUEST_URI'];

	myHead("Дополнительные услуги");

	myHeader();

	myContent("$a");

	myFooter();
