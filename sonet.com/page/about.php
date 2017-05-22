<?php 
	include_once '../work/function.php';

	$a = $_SERVER['REQUEST_URI'];

	myHead("О нас - SONET");

	myHeader();

	myContent("$a");

	myFooter();




