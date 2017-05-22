<?php
	
	include_once '../work/function.php';

	$a = $_SERVER['REQUEST_URI'];

	myHead("ТАРИФНЫЕ ПЛАНЫ");

	myHeader();

	myContent("$a");

	myFooter();
