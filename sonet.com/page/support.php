<?php 
	include_once '../work/function.php';

	$a = $_SERVER['REQUEST_URI'];

	myHead("Написать в техподдержку");

	myHeader();

	myContent("$a");

	myFooter();
