<?php 
	error_reporting(E_ALL);
	include ($_SERVER["DOCUMENT_ROOT"].'/work/function.php');
if(!$_SESSION['admin']){
	if(isset($_POST['username'])){
		//выгружаем введеные даные администратором
		$nameuser = $_POST['username'];
		$password = $_POST['password'];
		//выгружаем с базы
		$query="SELECT *
		FROM users";
		$result=$link->query($query);
		while( $row = mysqli_fetch_array($result)){
				 $namedb = $row["name"];
				 $passworddb = $row["password"];
		}
		//сравниваем и устанавливаем куку 
		if($nameuser == $namedb && $password == $passworddb){
			echo "Поздравляю вы вошли как администратор";
			$_SESSION['admin'] = 'thisadmin';
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=/page/login.php'>
			</HEAD></HTML>";
			}
			else{
				echo "Введенное имя или пароль не правильные, попробуйте ещё разок.";
			}
		}
}