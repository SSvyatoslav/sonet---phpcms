<?php 
include ($_SERVER["DOCUMENT_ROOT"].'/work/function.php');
	myHead("Добавление новой новости");
	myHeader();
	if($_SESSION['admin']){
?>
<div id="center">

<?php
	if (isset($_GET['news'])) {
?>
	<h3>
		Добавление новой новости
	</h3>
	<br>
	<form enctype="multipart/form-data" action="add.php" method="POST">
		Название новости :<br>
		<INPUT type="text" name="newstittle" size="45" required>  <br>
		Текст Новости :<br>
		<textarea rows="10" cols="45" name="newstext" required></textarea>
		<br>
		<input type="submit" value="Добавить Новость" />
	</form>
<?php
	}
	elseif (isset($_GET['rates'])) {
	?>
	<h3>
		Добавление тарифного плана
	</h3>
	<br>
	<form enctype="multipart/form-data" action="add.php" method="POST">
		Название :<br>
		<input type="text" name="ratestittle" size="45" required>  <br>
		Скорость : <br>	
		<input type="number" name="ratesspeed" required >
		<br>
		Текст :<br>
		<textarea rows="10" cols="45" name="ratestext" required></textarea>
		<br>
		Цена : <br>
		<input type="number" name="ratesprice" required>
		<br><br>
		<input type="submit" value="Добавить Тариф" />
	</form>
<?php
	}
	elseif(isset($_GET['ratesplus'])){
		?>
		<h3> Добавление дополнительной услуги </h3>
		<br>
		<form enctype="multipart/form-data" action="add.php" method="POST">
			№ : <br>
			<input type="number" name="ratesplusnumber">
			<br>
			Название :<br>
			<input type="text" name="ratesplustittle" size="45" required>  <br>
			Цена : <br>
			<input type="number" name="ratesplusprice" required>
			<br>
			Текст :<br>
			<textarea rows="10" cols="45" name="pluscoment" required></textarea>
			<br>
			<br>
			<input type="submit" value="Добавить Тариф" />
		</form>
		<?php
	}
	if(isset($_POST['ratesplusnumber'])){
		$number = $_POST['ratesplusnumber'];
		$name = $_POST['ratesplustittle'];
		$price = $_POST['ratesplusprice'];
		$comment = $_POST['pluscoment'];
		$query = "INSERT INTO ratesplus(ratesplusnumber, name, price, comment)
		VALUES ('$number', '$name', '$price', '$comment')";
		$result=$link->query($query);
		if($result){
			echo "<p class='green'>Добавлено в базу данных.</p>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://sonet.com/page/action/add.php?ratesplus'></HEAD></HTML>";
		}
		else{
			echo "no work";
		}
	}	
	if(isset($_POST['newstittle'])){
		$name = $_POST['newstittle'];
		$textnews = $_POST['newstext'];
		$author = $_SESSION['admin'];
		$date = date('d-m-Y . H:i:s');
		$query = "INSERT INTO news( name, content, author, date)
		    VALUES ( '$name', '$textnews', '$author', '$date')";
		$result=$link->query($query);
		if ($result) echo "<p class='green'>Добавлено в базу данных.</p>";	
		else{
			echo "Ошибка при добавлении в базу";
		}
	}
	if(isset($_POST['ratestittle'])){
		$name = $_POST['ratestittle'];
		$speed = $_POST['ratesspeed'];
		$text = $_POST['ratestext'];
		$price = $_POST['ratesprice'];
		$query = "INSERT INTO rates(name, speed, textrates, price)
		    VALUES ( '$name', '$speed', '$text', '$price')";
		$result=$link->query($query);
		if ($result) echo "<p class='green'>Добавлено в базу данных.</p>";	
		else{
			var_dump($result);
		}
	}
?>
</div>
<?php
myFooter();


}
else {
	echo "У вас не достаточно прав что бы смотреть эту страницу";
}