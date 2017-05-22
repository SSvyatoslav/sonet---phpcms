<?php
if($_SESSION['admin']){
	include ($_SERVER["DOCUMENT_ROOT"].'/work/function.php');
	$name = $_POST['clientRequest_ApplicantName'];
	$phone = $_POST['clientRequestApplicantPhoneNumber'];
	$email = $_POST['clientRequestEmail'];
	$street = $_POST['clientRequestStreet'];
	$house = $_POST['clientRequestHouseNumber'];
	$housing = $_POST['clientRequestHousing'];
	$apartament = $_POST['clientRequestApartment'];
	$access = $_POST['clientRequestEntrance'];
	$floor = $_POST['clientRequestFloor'];
	$plan = $_POST['clientRequestPlanId'];
	$date = date('d-m-Y . H:i:s');
	$query = "INSERT INTO TiketAddUser( name, phone, email, street, house, housing, apartment, access, floor, tariffplan, pubdate)
	VALUES ( '$name', '$phone', '$email', '$street', '$house', '$housing', '$apartament', '$access', '$floor', '$plan', '$date')";
		$result=$link->query($query);
		if ($result) echo "<p class='green'>Добавлено в базу данных.</p>";	
		else echo "Ошибка при добавлении в базу";
}			
