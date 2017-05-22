<?php 
if($_SESSION['admin']){
	include ($_SERVER["DOCUMENT_ROOT"].'/work/function.php');
	$name = $_POST['callMeBackTicketName'];
	$phone =$_POST['callMeBackTicketPhoneNumber'];
	$email = $_POST['callMeBackTicketEmail'];
	$usercomment = $_POST['callMeBackTicketText'];
	$date = date('d-m-Y . H:i:s');
	$query = "INSERT INTO callback( name, phone, email, usercomment, pubdate)
	VALUES ( '$name', '$phone', '$email', 
	'$usercomment', '$date')";
	$result=$link->query($query);
	if ($result) echo "<p class='green'>Добавлено в базу данных.</p>";	
	else echo "Ошибка при добавлении в базу";
}