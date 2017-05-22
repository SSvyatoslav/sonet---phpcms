<?php 
	include_once '../work/function.php';

	$a = $_SERVER['REQUEST_URI'];

	myHead("Войти в личный кабинет");

	myHeader();

	if(!$_SESSION['admin']){
		
		myContent("$a");
	}
	else{
		
		?>
			<h2>
				<a href="http://sonet.com/#">
					 Новости
				</a>
				<br>
				<a href="http://sonet.com/page/action/edit.php?slider">Изменить изображения слайдера</a>
				<br>
				<a href="http://sonet.com/page/login.php?tiket"> Заявки от пользователей на подключение </a>
				<br>
				<a href="http://sonet.com/page/login.php?business"> С нами хотят сотрудничать </a>
				<br>
				<a href="http://sonet.com/page/login.php?faq">Ответить на вопросы</a>
			</h2>

		<?php
	if(isset($_GET['faq'])){ 
		global $link;

		$query="SELECT *
		FROM questions
		ORDER BY id DESC";

		$result = $link -> query($query);
		while($row = mysqli_fetch_array($result)){
			$s= $row['id'];
			?>
				Вопрос :
				<br>
				<p>
					<?=$row['question']?>
				</p>
				<form enctype="multipart/form-data" action="login.php?answer=1" METHOD="POST">
				Наш отвтет	
				<br>
				<textarea name='answer' rows="10" cols="45"><?=$row['answer']?></textarea>
				<input type='hidden' name='key' value='<?=$s?>'>
				<BR>
				<input name="updatetovar" type="submit" value="ОТВЕТИТЬ">
			</form>
			<?php
		}
	}

	if (isset($_GET['answer'])) {
		echo $_POST['answer'];
		$answer = $_POST['answer'];
		$key = $_POST['key'];

		$query="UPDATE questions
		SET answer='$answer'
		WHERE id=$key"; 
		$result=$link->query($query);
		var_dump($query);
		if ($result) {
			echo "work";
		}
		else{
			echo "no wok";
		}
		/*echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://sonet.com/'></HEAD></HTML>";*/

	}
	if(isset($_GET['business'])){
		global $link;
		$query="SELECT *
		FROM  callback
		ORDER BY id ASC";

		$result = $link -> query($query);
		?>
		<table border="1" cellpadding="5" cellspacing="0" width="100%">
			<tr>
				<th>Название</th>
				<th>Телефон</th>
				<th>Email</th>
				<th>Комментарий</th>
				<th>Дата</th>
			</tr>


		<?php
		while($row = mysqli_fetch_array($result)){
			$name = $row['name'];
			$text = $row["content"];
			$s=$row["id"];
			?>
			<tr>
				<th><?=$row['name']?></th>
				<th><?=$row['phone']?></th>
				<th><?=$row['email']?></th>
				<th><?=$row['usercomment']?></th>
				<th><?=$row['pubdate']?></th>
			</tr>	

		<?php

		
	}
	?>
	</table>
	
	<?php
	}
	if(isset($_GET['tiket'])){
		global $link;
		$query="SELECT *
		FROM TiketAddUser
		ORDER BY id ASC";

		$result = $link -> query($query);

		?>
		<table border="1" cellpadding="5" cellspacing="0" width="100%">
			<tr>
				<th>Название</th>
				<th>Телефон</th>
				<th>Email</th>
				<th>Улица</th>
				<th>Дом</th>
				<th>Корпус</th>
				<th>Квартира</th>
				<th>Подъезд</th>
				<th>Этаж</th>
				<th>Тарифный план</th>
				<th>Дата</th>
			</tr>

		<?php

		while($row = mysqli_fetch_array($result)){
			$name = $row['name'];
			$text = $row["content"];
			$s=$row["id"];
			?>
			<tr>
				<th><?=$row['name']?></th>
				<th><?=$row['phone']?></th>
				<th><?=$row['email']?></th>
				<th><?=$row['street']?></th>
				<th><?=$row['house']?></th>
				<th><?=$row['housing']?></th>
				<th><?=$row['apartment']?></th>
				<th><?=$row['access']?></th>
				<th><?=$row['floor']?></th>
				<th><?=$row['tariffplan']?></th>
				<th><?=$row['pubdate']?></th>
			</tr>
			<?php
			
		}

		?>
		</table>
		<?php
	}


	}





	myFooter();

