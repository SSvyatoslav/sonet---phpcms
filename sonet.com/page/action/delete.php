<?php
include ($_SERVER["DOCUMENT_ROOT"].'/work/function.php');
if($_SESSION['admin']){
	if (isset($_GET['news'])) {
		echo $_GET['news'];
		$query="DELETE FROM news
		WHERE id='$_GET[news]' ";
		$resulti=$link->query($query);
		echo mysqli_error($link);	
		echo "<HTML><HEAD>
			<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://sonet.com/'>
		</HEAD></HTML>"; 
	}
	if (isset($_GET['rates'])) {
		$query="DELETE FROM rates
		WHERE id='$_GET[rates]' ";
		$resulti=$link->query($query);
		echo mysqli_error($link);	
		echo "<HTML><HEAD>
			<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://sonet.com/page/plans.php'>
		</HEAD></HTML>"; 
	}
	if(isset($_GET['ratesplus'])){
		$query="DELETE FROM ratesplus
		WHERE id='$_GET[ratesplus]'";
		$result=$link->query($query);
		if($result){
			echo "<HTML><HEAD>
			<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://sonet.com/page/priceList.php'>
			</HEAD></HTML>"; 
		}
	}
}