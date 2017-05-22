<?php 
include ($_SERVER["DOCUMENT_ROOT"].'/work/function.php');
	myHead("Добавление новой новости");

	myHeader();
	showOnePost($_GET['idnews']);

	myFooter();