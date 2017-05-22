<?php 
	include_once '../work/function.php';

	$a = $_SERVER['REQUEST_URI'];

	myHead("Способы оплаты");

	myHeader();

	myContent("$a");

	myFooter();
