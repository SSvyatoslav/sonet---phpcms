<?php 
include ($_SERVER["DOCUMENT_ROOT"].'/work/function.php');
	myHead("Редактирование");
	myHeader();
if($_SESSION['admin']){
	?>
	<div id="center" style="height: 500px;">
		<h3>
			Редактирование 
		</h3>
	<?php
	// Изображение слайдера
	if(isset($_GET['slider'])){
	?>
		Изображение должно быть размеров : 1182 x 265
		<form enctype="multipart/form-data" action="edit.php?updateslider=1" METHOD="POST">
		№ Слайдера
		<input type="number" name="numberslider">
		<br>
		<input type="hidden" name="MAX_FILE_SIZE" value="30000000000000000" />
			Изображение слайдера: <input name="userfile" type="file" />
			<br>
		<BR>
		<input name="updatetovar" type="submit" value="ОБНОВИТЬ	">
	</form>
<?php
	}
//image
if(isset($_GET['updateslider'])){
	$img=$_FILES['userfile']['name'];
	$number = $_POST['numberslider'];
	echo $number;
	if($number == 1){
		$name = "slide1";
	}
	elseif ($number == 2) {
		$name = "slide2";
	}
	elseif ($number == 3) {
		$name = "slide3";
	}
	else{
		$name = "slide4";
	}
	echo "$img";
	$path = $_SERVER["DOCUMENT_ROOT"].'/pic/vid/';
	move_uploaded_file($_FILES['userfile']['tmp_name'], $path. "$name".'.jpg');
}
// Новости
if (isset($_GET['news'])) {
	$id=$_GET['news'];
	global $link;
	$query="SELECT *
	FROM news
	WHERE id=$id";
	$result1=$link->query($query);
	while($row = mysqli_fetch_array($result1)){
		// присваеваем имя для формы 
		$name = $row["name"];
		$content = $row["content"] ;
		$s=$row["id"];
		?>
		<div style='width:25%;float:left;'>
			<form enctype="multipart/form-data" action="edit.php?updatenews=1" METHOD="POST">
				Название новости	
				<input type="text" name="name" value="<?=$name?>">
				<br>
				Описание новости
				<textarea name='text' rows="10" cols="45"><?=$content?>
				</textarea>
				<input type='hidden' name='key' value='<?=$s?>'>
				<BR>
				<input name="updatetovar" type="submit" value="ОБНОВИТЬ НОВОСТЬ">
			</form>
		</div>
<?php
	}
}
// Тарифы в блоках
if (isset($_GET['rates'])) {
	$id=$_GET['rates'];
	global $link;
	$query="SELECT *
	FROM rates
	WHERE id=$id";
	$result1=$link->query($query);
	while($row = mysqli_fetch_array($result1)){
		// присваеваем имя для формы 
		$name = $row["name"];
		$speed = $row["speed"] ;
		$text = $row["textrates"];
		$price = $row["price"];
		$s=$row["id"];
		?>
	<div style='width:25%;float:left;'>
		<form enctype="multipart/form-data" action="edit.php?updaterates=1" METHOD="POST">
		Название	
			<input type="text" name="name" value="<?=$name?>">
			<br>
			Скорость
			<input type="number" name="speed" value="<?=$speed?>">
			<br>
			Описание
			<textarea name='text' rows="10" cols="45"><?=$text?></textarea>
			Цена
			<input type="number" name="price" value="<?=$price?>">
			<br>
			<input type='hidden' name='key' value='<?=$s?>'>
			<BR>
			<input name="updatetovar" type="submit" value="ОБНОВИТЬ	">
		</form>
	</div>
<?php
	}
}
// Текст для страниц
if($_GET['id']){
	editPages($_GET['id']);
}
if (isset($_GET['details'])) {
	$name = $_GET['details'];
	global $link;
	$query="SELECT *
	FROM pages
	WHERE name='rates'";
	$result1=$link->query($query);
	while($row = mysqli_fetch_array($result1)){
		// присваеваем имя для формы 
		$text = $row["content"] ;
		$s=$row["id"];
	}
?>
	<div style='width:25%;float:left;'>
		<form enctype="multipart/form-data" action="edit.php?updateretestext=1" METHOD="POST">
			Описание
			<textarea name='text' rows="20" cols="45"><?=$text?></textarea>
			<BR>
			<input name="updatetovar" type="submit" value="ОБНОВИТЬ">
		</form>
	</div>
	<?php
}
?>
<?php
// дополнительные услуги
if (isset($_GET['ratesplus'])) {
	$id = $_GET['ratesplus'];
	global $link;
	$query="SELECT *
	FROM ratesplus
	WHERE id='$id'";
	$result=$link->query($query);
	while($row = mysqli_fetch_array($result)){ 
	echo $row['id'];
	$s = $row['id'];
?>
	<div style='width:25%;float:left;'>
		<form enctype="multipart/form-data" action="edit.php?updateretesplus=1" METHOD="POST">
			№ : <br>
			<input type="number" name="ratesplusnumber" value="<?=$row['ratesplusnumber']?>"> <br>
			Назвнаие : <br>
			<input type="text" name="ratesplusname" value="<?=$row['name']?>"> <br>
			Цена : <br>
			<input type="number" name="ratesplusprice" value="<?=$row['price']?>">
			Описание
			<textarea name='ratespluscomment' rows="10" cols="45"><?=$row['comment']?></textarea>
			<input type='hidden' name='key' value='<?=$s?>'>
			<BR>
			<input name="updatetovar" type="submit" value="ОБНОВИТЬ">
		</form>
	</div>
	<?php
	}
}
?>
</div>
<?php
	// обновляем страницы
	if($_GET['update']){
		updatePage($_GET['update']);
	}
	if (isset($_GET['updatenews'])) {
		$name = $_POST['name'];
		$text = $_POST['text'];
		$key = $_POST['key'];
		$query="UPDATE news
		SET name='$name', content='$text'
		WHERE id=$key"; 
		$result=$link->query($query);
		echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://sonet.com/'></HEAD></HTML>";
	}
	if (isset($_GET['updaterates'])) {
		$name = $_POST['name'];
		$speed = $_POST['speed'];
		$text = $_POST['text'];
		$price = $_POST['price'];
		$key = $_POST['key'];
		$query="UPDATE rates
		SET name='$name', speed='$speed', textrates='$text', price='$price'
		WHERE id=$key";
		$result=$link->query($query);
		echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://sonet.com/page/plans.php'></HEAD></HTML>";
	}
	if(isset($_GET['updateretestext'])){
		$text = $_POST['text'];
		$query ="UPDATE pages 
		SET content='$text'
		WHERE name='rates'";
		$result=$link->query($query);
		echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://sonet.com/page/plans.php'></HEAD></HTML>";
	}
	if (isset($_GET['updateretesplus'])) {
		$key = $_POST['key'];
		echo $key;
		$query="UPDATE ratesplus
		SET ratesplusnumber='$_POST[ratesplusnumber]', name='$_POST[ratesplusname]', price='$_POST[ratesplusprice]', comment='$_POST[ratespluscomment]' 
		WHERE id=$key";
		var_dump($query);
		$result=$link->query($query);
		if($result){
			echo "work";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://sonet.com/page/priceList.php'></HEAD></HTML>";
		}
		else {
			echo "no work";
		}
	}	
myFooter();
}