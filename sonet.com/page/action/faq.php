<?php 
	include ($_SERVER["DOCUMENT_ROOT"].'/work/function.php');
if($_SESSION['admin']){
	$email = $_POST['ticketEmail'];
	$question = $_POST['ticketText'];
	$date = date('d-m-Y . H:i:s');
	$query = "INSERT INTO questions( email, question,  pubdate)
	VALUES ( '$email', 
	'$question', '$date')";
	$result=$link->query($query);
	if ($result) echo "<p class='green'>Добавлено в базу данных.</p>";	
	else echo "Ошибка при добавлении в базу";
}