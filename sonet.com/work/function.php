<?php
/*
	FUNCTION SONET.COM
*/
include_once ($_SERVER["DOCUMENT_ROOT"].'/work/config.php');

function myHead($title=""){
	?>
	<!DOCTYPE HTML>
	<html>
	<head>
		<title><?=$title ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="/work/css/main.css" rel="stylesheet">
		<link href="/work/css/style.css" rel="stylesheet">
		<link href="/work/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
	</head>
	<body>
	<?php
}
function myHeader() {
	?>
	<div class="wrapper" >
		<div class="top">
			<div class="city">
				Одесса 
			</div>
			<div class="login">
				<a href="/page/login.php">
					<p class="click">Войти в личный кабинет
					</p>
				</a>
			</div>
		</div>
		<div class="header">
			<a href="/">
				<div class="logo-home">
				</div>
			</a>
				<a href="http://sonet.com/page/clientrequest.php"><input class="connect" value="Подключиться" autocomplete="off" type="submit"></a>
		
			<div id="myfond_gris" opendiv=""></div>
				<a href="http://sonet.com/page/bussiness.php#backCalls"><input  class="mymagicoverbox call" value="Обратный звонок" autocomplete="off" type="submit" iddiv="box_1">
				</a>
			<div class="phone">8(048)777-77-77</div>
			<div class="extra-phone"></div>
		</div>
		<div class="menu">
			<ul>
				<li><a class="active" href="/">Главная</a></li>
				<li><a class="" href="/page/plans.php">Тарифы</a></li>
				<li><a class="" href="/page/clientrequest.php">Подключиться</a></li>
				<li><a class="" href="/page/bussiness.php">Для бизнеса</a></li>
				<li><a class="" href="/page/faq.php">Вопросы и ответы</a></li>
				<li><a class="" href="/page/payment.php">Оплата</a></li>
				<li><a class="" href="/page/about.php">О компании</a></li>
			</ul>
		</div>
	<?php
}
?>
<?php
function myContent($pageName=''){
	if($pageName=="/"){
		?>	
		<div class="page Home Index">
			<div class="offers">
				<div class="slider">
					<div class="content">
						<div class="longspace notext">
							<div class="offer" style="margin-left: -3546px;">
								<a href="http://sonet.com/#">
									<img src="http://sonet.com/pic/vid/slide1.jpg">
								</a>
							</div>
							<div class="offer">
								<a href="http://sonet.com/#">
									<img src="http://sonet.com/pic/vid/slide2.jpg">
								</a>
							</div>
							<div class="offer">
								<a href="http://sonet.com/#">
									<img src="http://sonet.com/pic/vid/slide3.jpg">
								</a>
							</div>
							<div class="offer">
								<a href="http://sonet.com/#">
									<img src="http://sonet.com/pic/vid/slide4.jpg">
								</a>
							</div>
							<div class="offer">
								<a href="http://sonet.com/#">
									<img src="http://sonet.com/pic/vid/slide1.jpg">
								</a>
							</div>
							<div class="offer">
								<a href="http://sonet.com/#">
									<img src="http://sonet.com/pic/vid/slide2.jpg">
								</a>
							</div>
							<div class="offer">
								<a href="http://sonet.com/#">
									<img src="http://sonet.com/pic/vid/slide3.jpg">
								</a>
							</div>
							<div class="offer">
								<a href="http://sonet.com/#">
									<img src="http://sonet.com/pic/vid/slide4.jpg">
								</a>
							</div>
						</div>
					</div>
					<ul class="controls">
						<li class=""></li>
						<li class=""></li>
						<li class=""></li>
						<li class="active"></li>
						<li class="stop">II</li>
					</ul>
				</div>
			</div>
			<div class="news">НОВОСТИ</div>
<?php
			if($_SESSION['admin']){
	?>
				<a style='margin-left:533px' href='http://sonet.com/page/action/add.php?news'>Добавить новость</a>
				<br><br>
<?php
			}
	?>
			<div class="information">
				<?php news();?>
			</div>
			<br><br>
<?php
	}
	elseif ($pageName == "/page/plans.php") {
	?>
		<div class="page Home Plans">
			<div class="plans">
				<div class="heading" style="height: 27px">ТАРИФНЫЕ ПЛАНЫ</div>					
					<?php
						if($_SESSION['admin']){
							echo "<a style='margin-left:482px' href='http://sonet.com/page/action/add.php?rates'>Добавить тарифный план</a>
								<br><br>
							";
						}
					?>
				<div class="variants">
					<?=rates()?>
				</div>
				<div class="pricelistlink">
					<a class="links-header" href="http://sonet.com/page/priceList.php">Прайс-лист дополнительных услуг</a>
				</div>
				<?=pages(1)?>
			</div>
		</div>
<?php
	}
	elseif ($pageName == "/page/clientrequest.php"){
	?>
	<div class="page ClientRequest Index">
		<div class="heading">ЗАЯВКА НА ПОДКЛЮЧЕНИЕ</div>
		<form id="ClientRequest" action="/page/action/clientRequestAction.php" method="POST">
			<div class="leftpersonal">
				<div>
				<div class="personals">Ф.И.О:</div>
				<input id="clientRequest_ApplicantName" class="personal" name="clientRequest_ApplicantName" autocomplete="off" type="text">
				</div>
			<div>
				<div class="personals">Номер телефона:</div>
				<input id="clientRequest_ApplicantPhoneNumber" class="personal" placeholder="Введите номер в десятизначном формате" name="clientRequestApplicantPhoneNumber" autocomplete="off" type="text">
			</div>
			<div>
				<div class="personals">Электронная почта:</div>
				<input id="clientRequestEmail" class="personal" name="clientRequestEmail" autocomplete="off" type="text">
			</div>
			<div>
				<div>
					<div class="personals">Улица:</div>
					<input id="clientRequest_Street" class="personal" onkeyup="typeWatcher(1000)" name="clientRequestStreet" autocomplete="off" type="text">
				</div>
				<div class="block">
					<div class="addon">Дом:</div>
					<input id="clientRequest_HouseNumber" class="addons margin-zero padding-left-4" onkeyup="typeWatcher(1000)" style="width:170px;" name="clientRequestHouseNumber" autocomplete="off" type="text">
				</div>
				<div class="block">
					<div class="addon centre">Корпус:</div>
					<input id="clientRequest_Housing" class="addons margin-zero padding-left-4" onkeyup="typeWatcher(1000)" style="width:160px;" name="clientRequestHousing" autocomplete="off" type="text">				
				</div>
				<div class="block">
					<div class="addon">Квартира:</div>
					<input id="clientRequest_Apartment" class="addons margin-zero padding-left-4" name="clientRequestApartment" value="0" autocomplete="off" type="text">
				</div>
				<div class="block padding-left-7">
					<div class="addon centre">Подъезд:</div>
					<input id="clientRequest_Entrance" class="addons margin-zero padding-left-4" name="clientRequestEntrance" value="0" autocomplete="off" type="text">
				</div>
				<div class="block padding-left-7">
					<div class="addon centre">Этаж:</div>
					<input id="clientRequest_Floor" class="addons margin-zero padding-left-4" name="clientRequestFloor" value="0" autocomplete="off" type="text">
				</div>
			<div>
				<div class="personals">Тарифный план:</div>
				<select id="clientRequest_Plan" name="clientRequestPlanId" class="rounded">
					<option value="Популярный" title="" selected="selected">Популярный</option>
					<option value="Оптимальный" title="">Оптимальный</option>
					<option value="Народный" title="" >Народный (Акция)</option>
				</select>
			</div>
		</div>
		<div class="contract">
			<div>
				<input data-val="true" data-val-required="Требуется поле IsContractAccepted." id="clientRequest_IsContractAccepted" name="clientRequest.IsContractAccepted" value="true" autocomplete="off" type="checkbox">
				 Я прочитал договор оферту
			</div>
			<p>В соответствии со ст.663 Гражданского кодекса Украины Поскольку деятельность предпринимателей по обслуживанию широкого круга потребителей (например, граждан) является публичной, то и договоры, опосредующие эту деятельность, названы публичными.</p>
		</div>
		<input class="resend" value="Отправить" autocomplete="off" type="submit">
	</form>
</div>
<?php
}
	elseif ($pageName == "/page/bussiness.php") {
?>
		<div class="page Bussiness Index">
  			<div class="greyblock"> 		
				<?php pages(2);?>
				<div class="girl"></div>
				<div class="wifi"></div>
	   		</div>
	    <div class="whiteblock">
			<div class="stoiki"></div>
			<?php pages(3);?>
		</div>
		<div class="staff"></div>
		<form action="/page/action/bussinessAction.php" method="post">
			<div id="backCalls" class="window" style="height:464px;">
				<div class="windowicon"></div>
				<div class="cooperation">
					<h3>Свяжитесь с нами</h3>
					<p>по вопросам сотрудничеста:</p>
				</div>
				<div id="apply" class="applications" style="height:264px;">
					<div class="label">Ф.И.О:<sup>*</sup></div>
					<input id="callMeBackTicket_Name" class="application entry" name="callMeBackTicketName" autocomplete="off" type="">
					<div class="label">Номер телефона:<sup>*</sup></div>
					<input id="callMeBackTicket_PhoneNumber" class="application entry" name="callMeBackTicketPhoneNumber" autocomplete="off" type="">
					<div class="label">Электронная почта:</div>
					<input id="callMeBackTicket_Email" class="application entry" name="callMeBackTicketEmail" autocomplete="off" type="">
					<div class="label">Комментарий:</div>
					<textarea id="callMeBackTicket_Text" name="callMeBackTicketText" class="entry" rows="6" cols="75"></textarea>
					<div class="label" style="margin-top: 17px;">
						<span style="position: relative; top: -16px;">
					</div>
				</div>
				<div class="definitely"><sup>*</sup>- обязательно для заполнения</div>
				<input class="contacting" value="Связаться" autocomplete="off" type="submit">
			</div>
		</form>
	</div>
<?php
	}
	elseif ($pageName == "/page/faq.php") {
	?>
<div class="page Faq Index">
	<div class="heading">ВОПРОСЫ И ОТВЕТЫ</div>
		<div class="know hidden">
			<div class="ask">Задать вопрос:</div>
			<a class="main-item" href="javascript:void(0);" tabindex="1" >
			</a>
			<div class="networking sub-menu">
				<form action="/page/action/faq.php" method="post">
					<div>
						<div class="ties">Email : </div>
						<input id="ticket_Email" class="entry" name="ticketEmail" autocomplete="off" type="text">
					</div>
					<div>
						<div class="ties">Текст вопроса* : </div>
						<textarea id="ticket_Text" name="ticketText" class="entry" rows="6" cols="75"></textarea>
					</div>
					<input class="set" value="Отправить вопрос" autocomplete="off" type="submit">
				</form>
			</div>
		</div>
		<div class="problem">
			<?=answers();?>
	</div>
	<?php
	}
		elseif ($pageName == "/page/payment.php") {
	?>
		<div class="page About Payment">
			<h2 class="heading" style="padding-top: 33px;">
				СПОСОБЫ ОПЛАТЫ
			</h2>
			<div class="payment font width-1000"> 
				<h3 class="topic">Оплата он-лайн</h3>
				<table style="width: 100%;">
					<tbody><tr>
						<td class="logoBlock">
							<p style="text-align: center;">
								<a href="https://www.privat24.ua/#login">
								<img style="width: 178px;" src="http://sonet.com/pic/vid/private.png"></a>
							</p>
							<p style="text-align: center; margin: 0px;"> Оплата через 
								<a class="docLink" href="https://www.privat24.ua/#login">Приват24</a> </p>
						</td>
						<td class="logoBlock">
							<p style="text-align: center; margin-top: 20px;">
								<a href="https://www.mastercard.com/ua/consumer/">
									<img src="http://sonet.com/pic/vid/visamastercard.jpg" alt="img">
								</a>
							</p>
							<p style="text-align: center; margin: 0px;">
								Оплата Картами
								<a class="docLink" href="https://www.mastercard.com/ua/consumer/">
									VISA и MasterCard
								</a>
							</p>
						</td>
					</tr>
				</tbody></table>  
				<h3 class="topic">Оплата наличными:</h3>
				<ul style="padding-left: 14px; padding-top: 6px;">
					<li>
						<p>Через <a class="docLink" href="https://privatbank.ua/ru/udalenniy-banking/terminaly-samoobsluzhivaniya/">терминалы и отделения</a> Приват банка.</p>
					</li>
					<li>
						<p>Через терминалы <a class="docLink" href="https://ru.otpbank.com.ua/">OTP Bank</a></p>
					</li>
					<li>
						<p>В офисе компании по адресу -
						 <a class="addressLink" href="https://www.google.com.ua/maps/place/%D0%9A%D0%BE%D0%B2%D0%B0%D0%BB%D1%8C%D1%81%D1%8C%D0%BA%D0%B0+%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F,+1,+%D0%9E%D0%B4%D0%B5%D1%81%D0%B0,+%D0%9E%D0%B4%D0%B5%D1%81%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C/@46.4825037,30.7212103,17z/data=!3m1!4b1!4m5!3m4!1s0x40c63193a781e153:0x7edb2da4f956e4f8!8m2!3d46.4825!4d30.723399?hl=ru"> Ковальська вулиця, 1, Одеса, Одеська область</a>  в будние дни с 9-00 до 18-00. </p>
						
					</li>
				</ul> 
			</div>	
		</div>
	<?php
	}
		elseif ($pageName == "/page/about.php") {
	?>
		<div class="page About Index">	
			<div class="whiteblock">				
				<div class="map left-move">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.293526124528!2d30.721210315591854!3d46.48249997912617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63193a781e153%3A0x7edb2da4f956e4f8!2z0JrQvtCy0LDQu9GM0YHRjNC60LAg0LLRg9C70LjRhtGPLCAxLCDQntC00LXRgdCwLCDQntC00LXRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1480541853579" width="450" height="450" frameborder="0" style="border:0" allowfullscreen>
					</iframe>
				</div>
				<?php pages(4);?>
			</div>
		</div>
	<?php
	}
		elseif ($pageName == "/page/login.php") {
	?>
	<div class="page Account Login">
		<form action="/page/action/loginAction.php" method="post">
			<div class="window">
				<div class="cooperation">
					<p>Вход в личный кабинет</p>
				</div>
				<div class="applications">
					<div class="label">Номер счета:</div>
					<input class="application entry" name="username" autocomplete="off" type="text">
					<div class="label">Пароль:</div>
					<input class="application entry" name="password" value="" autocomplete="off" type="password">
				</div>
				<input class="contacting" value="Войти" autocomplete="off" type="submit">
			</div>
		</form>
	</div>
<?php
	}
	elseif ($pageName == "/page/support.php") {
?>
	<div class="page Faq TechSupport">
		<div class="whiteblock">
		<?php pages(5);?>
			<div class="girl"></div>
		</div>
		<div class="know">
			<div class="networking">
				<form enctype="multipart/form-data" action="/action/techSupport.php" method="post">	
					<div>
						<div class="ties">Email : </div>
						<input id="ticket_Email" class="entry" name="ticket.Email" autocomplete="off" type="text">
					</div>
					<div>
						<div class="ties">Текст вопроса* : </div>
						<textarea id="ticket_Text" name="ticket.Text" class="entry" rows="6" cols="75"></textarea>
					</div>
					<input id="ticket_Client" name="ticket.Client" value="" autocomplete="off" type="hidden">
					<input data-val="true" data-val-number="The field Id must be a number." data-val-required="Требуется поле Id." id="ticket_Id" name="ticket.Id" value="0" autocomplete="off" type="hidden">
					<input class="set" value="Отправить вопрос" autocomplete="off" type="submit">
				</form>	
			</div>
		</div>
<?php
	}
	elseif ($pageName == "/page/priceList.php") {
	?>
<div class="page Home PricesList">
	<div class="pricesBox">
        <table class="pricestable" style="margin-top: 30px; width: 100%;margin-bottom:20px;">
            <thead>
	            <tr class="pricesmenu">
	                <th colspan="4" class="pricetitle">
	                    Прайс-лист на дополнительные услуги ООО «СОНЕТ» для Физ. Лиц
	                </th>
					<?php
					if($_SESSION['admin']){
						echo "<a style='margin-left:333px' href='http://sonet.com/page/action/add.php?ratesplus'>Добавить услугу</a>
							<br><br>
						";
					}
					?>
	            </tr>
	            <tr class="pricesmenu">
	                <td class="pricetitle" style="width: 38px;">№ п/п</td>
	                <td class="pricetitle" style="width:680px">Наименование услуги</td>
	                <td class="pricetitle" style="width: 99px;">Стоимость, грн.</td>
	                    <td class="pricetitle">Комментарий</td>
	            </tr>
            </thead>
           	<tbody>
            		<?php ratesplus();?>    
            </tbody>
        </table>
	</div>
</div>
<?php
	}
}
function myFooter(){
	?>
	<div class="features">
		<div class="requisite">
			<a href="/">
				<div class="logo"></div>
			</a>
			<div class="address">
				<p>© 2016 — ООО «СОНЕТ»</p>
				<p>г. Одесса, Ковальська ул. д. 1 </p>
				<p><a href="mailto:internet@sonet.net">internet@sonet.com</a></p>
			</div>
		</div>
		<div class="support">
			<ul>
				<li class="tech"><a href="/page/support.php">Техподдержка</a><sup>24</sup></li>
			</ul>
		</div>
		<div class="support">
			<ul>
				<li><a href="/page/login.php">Личный кабинет</a></li>
				<li><a href="/page/plans.php">Тарифы</a></li>
				<li><a href="/page/clientrequest.php">Заявка на подключение</a></li>
				<li><a href="/page/faq.php">Вопросы и ответы</a></li>
				<li><a href="/page/payment.php">Оплата</a></li>
			</ul>
		</div>
		<div class="support">
			<ul>
				<li><a href="/page/about.php">О компании</a></li>
				<li><a href="/page/bussiness.php">Для бизнеса</a></li>
			</ul>
		</div>
	</div>
	<script type="text/javascript" src="http://sonet.com/work/js/jquery-2.js"></script>
	<script type="text/javascript" src="http://sonet.com/work/js/HomeController.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
</body>
</html>
<?php
	}
function news(){
	global $link;
	$query="SELECT *
	FROM news
	ORDER BY date DESC";
	$result=$link->query($query);
	while( $row = mysqli_fetch_array($result)){
		$idnews=$row["id"];
	?>
		<div class="text" >
			<h3 class="links-header">
				<a href="/page/post.php?idnews=<?=$idnews?>"><?=$row["name"]?></a>
			</h3>
			<p><?=$row["date"]?></p>
			<div class="font"><?=$row["content"]?></div>
			<?php if($_SESSION['admin']){
			 ?>
			<a href="/page/action/delete.php?news=<?=$idnews?>">Удалить |</a>
			<a href="/page/action/edit.php?news=<?=$idnews?>">Изменить</a>
			<?php 
			} ?>
		</div>	
<?php
	}
}

function showOnePost($postID){
	$id=$_GET['idnews'];
	global $link;
 	$query="SELECT *
	FROM news
	WHERE id=$id";
	$result=$link->query($query);
	while( $row = mysqli_fetch_array($result)){
	?>
		<div id="bigtext" class="text" >
			<h3 class="links-header">
				<?=$row["name"]?>
			</h3>
			<p><?=$row["date"]?></p>
			<div class="font"><?=$row["content"]?></div>
			<?=$idnews?>
		</div>
<?php
			}
}

function rates(){
	global $link;
	$query="SELECT *
	FROM rates
	ORDER BY id ASC";
	$result=$link->query($query);
	while( $row = mysqli_fetch_array($result)){
		$idrates=$row["id"];
	?>
	<div class="type ">
		<h1><?=$row["name"]?></h1>
		<h2><?=$row["speed"]?> Мбит/с</h2>
		<p>
			<?=$row["textrates"]?>
		</p>
		<h3>
			<?=$row["price"]?> грн./мес. 
		</h3>
		<form action="/page/clientrequest.php" method="post">
			<input class="button plug" value="Подключить" autocomplete="off" type="submit">
		</form>
		<?php 
			if($_SESSION['admin']){
				?>
		<a href="/page/action/edit.php?rates=<?=$idrates?>">Изменить |</a>
		<a href="/page/action/delete.php?rates=<?=$idrates?>">Удалить</a>
		<?php 
			}
		 ?>
	</div>
<?php
	}
}
function ratesplus(){
	global $link;
	$query="SELECT *
	FROM ratesplus
	ORDER BY ratesplusnumber ASC";
	$result=$link->query($query);
	while ($row = mysqli_fetch_array($result)) {
		$number = $row['ratesplusnumber'];
		$name = $row['name'];
		$price = $row['price'];
		$comment = $row['comment'];
		$id = $row['id'];
		?>
		<tr class="pricerecord">
		    <td class="pricecell">
			    <?=$number?>
	   	    </td>
		    <td class="pricecell"><?=$name?></td>
		    <td class="pricecell"><?=$price?></td>
		    <td class="pricecell"><?=$comment?>
		    <?php 
			if($_SESSION['admin']){
				?>
		    <a class="edit" href="/page/action/edit.php?ratesplus=<?=$id?>">Изменить |</a>
				<a class="edit" href="/page/action/delete.php?ratesplus=<?=$id?>">Удалить</a>
			<?php 
			}
			 ?>
		    </td>
		</tr>
<?php
	}
}
/* обработчик для страниц */
function pages($id){
	global $link;
	$query="SELECT *
	FROM pages
	WHERE id=$id";
	$result=$link->query($query);
	if($id == 1){
		$class = 'details';
	}
	elseif($id == 2){
		$class = 'greyblocktext';
	}
	else{
		$class = 'whiteblocktext';
	}

	while( $row = mysqli_fetch_array($result)){
		$name = $row['name'];
		$text=$row["content"];	
		?>
		<div class="heading"><?php echo $name; ?>
		</div>
		<div class="<?=$class?>"><?php echo $text;?>
		<?php 
			if($_SESSION['admin']){
				?>
		<a class="edit" href='/page/action/edit.php?id=<?=$id?>'>Изменить</a>
		<?php 
		} ?>
		</div>
<?php
	}
	?>
<?php
}
// функция для редактирования страниц
	function editPages($page){
		$id = $page;
		global $link;
		$query="SELECT *
		FROM pages
		WHERE id='$id'";
		$result = $link -> query($query);
		while($row = mysqli_fetch_array($result)){
			$name = $row['name'];
			$text = $row["content"];
			$s=$row["id"];
		}
	?>
		<div class="formedit">
			<form enctype="multipart/form-data" action="edit.php?update=<?=$id?>" METHOD="POST">
				Название :
				<input type="text" name="title" value="<?=$name?>">
				Описание : 
				<textarea name='text' rows="20" cols="45"><?=$text?></textarea>
				<BR>
				<input name="updatetovar" type="submit" value="ОБНОВИТЬ">
			</form>
		</div>
<?php
	}
// функция для обновления товара
function updatePage($id){
	$name = $_POST['title'];
	$text = $_POST['text'];
	global $link;
	$query ="UPDATE pages 
		SET name='$name', content='$text'
		WHERE id='$id'";
	$result=$link->query($query);
	if($result){
		echo "Вы успешно обновили запись.";
	}
}
function answers(){
	global $link;
	$query="SELECT *
	FROM questions
	ORDER BY id ASC";
	$result = $link -> query($query);
	while($row = mysqli_fetch_array($result)){
		?>
			<div class="question">
				<span><?=$row['id']?> . </span>
				<?=$row['question']?>
				<div class="answer hidden sub-menu">
					<span>
					<?=$row['answer']?>
				</div>
			</div>	
		<?php
	}
}		