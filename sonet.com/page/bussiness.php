<?php 
	include_once '../work/function.php';

	$a = $_SERVER['REQUEST_URI'];

	myHead("Решение для бизнеса");

	myHeader();

	myContent("$a");

	myFooter();
	