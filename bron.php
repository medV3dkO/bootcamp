    <!DOCTYPE html>
<html lang="en">
  <head>
    <title>BOOTCAMP - Игровой клуб</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="jquery.dialog.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="source/jsCalendar.css">
		<link rel="stylesheet" type="text/css" href="themes/jsCalendar.micro.css">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="source/jsCalendar.js"></script>
		<script type="text/javascript" src="extensions/jsCalendar.datepicker.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script type="text/javascript" src="js/jquery.dialog.js"></script>
				<style type="text/css">
				.block {
  display: none;
}
.block.active {display: block;}
		</style>
  <!-- Скрипт плавного открытия и закрытия блока -->
		<script type="text/javascript">
show.visible = '2';
show.hidden = '3';
 function show(){
 	show.hidden = show.visible;
 	show.visible = (show.visible === '2')?'3':'2';
	document.getElementById(show.visible).style.display = 'block';
	document.getElementById(show.hidden).style.display = 'none';
	document.getElementById('hour').value = "";
}
 function show2(){
 	show.hidden = show.visible;
 	show.visible = (show.visible === '3')?'2':'3';
	document.getElementById(show.visible).style.display = 'block';
	document.getElementById(show.hidden).style.display = 'none';
	document.getElementById('paket').value = "";
}
		</script>
  </head>
  <?php
    $host = '46.174.50.7';
    $user = 'u16652_med';
    $pass = '89223089871';
    $db_name = 'u16652_medv3dko';
    $link = mysqli_connect($host, $user, $pass, $db_name);

    if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }
  ?>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="https://medv3dko.xyz/"><img src="img/boot.png">&nbsp;BOOT<span class="redt">CAMP</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Меню
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
			<li class="nav-item"><a href="https://medv3dko.xyz/" class="nav-link"><span>ГЛАВНАЯ</span></a></li>
	          <li class="nav-item"><a href="https://medv3dko.xyz/#about-section" class="nav-link"><span>О НАС</span></a></li>
	          <li class="nav-item"><a href="https://medv3dko.xyz/#price-section" class="nav-link"><span>НАШИ ЦЕНЫ</span></a></li>
			  <li class="nav-item"><a href="tournaments.php" class="nav-link"><span>ТУРНИРЫ</span></a></li>
	          <li class="nav-item"><a href="https://medv3dko.xyz/#contact-section" class="nav-link"><span>КОНТАКТЫ</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	<section class="ftco-section" id="bron-section">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Бронирование</h1>
            <h2 class="mb-4">Здесь вы можете забронировать место в наших клубах</h2>
			<script type="text/javascript"> $(function() { $('.map').maphilight(); }); </script>
<div class="float-left">
<div class="map" style="background: url(img/bron.jpg); display: block; margin:auto;">
<img src="img/bron.jpg" width="900" height="491" class="map maphilighted" usemap="#bron">
</div>
<map name="bron" id="ImageMapsCom-image-maps-2020-03-04-001111">
<area id="seven"  alt="" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}' title="7" href="https://medv3dko.xyz/bron.php?place=7" shape="rect" coords="95,38,163,105"  target="_self"     />
<area id="six" title="6" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}' href="https://medv3dko.xyz/bron.php?place=6" shape="rect" coords="206,38,274,105"  target="_self"     />
<area  id="five" title="5" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}' href="https://medv3dko.xyz/bron.php?place=5" shape="rect" coords="315,37,383,104"  target="_self"     />
<area  id="four" title="4" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}' href="https://medv3dko.xyz/bron.php?place=4" shape="rect" coords="421,38,489,105"  target="_self"     />
<area id="three" alt="" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}' title="3" href="https://medv3dko.xyz/bron.php?place=3" shape="rect" coords="578,38,646,105"  target="_self"     />
<area id="two" alt="" title="2" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}' href="https://medv3dko.xyz/bron.php?place=2" shape="rect" coords="687,38,755,105"  target="_self"     />
<area id="one" alt="" title="1" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}' href="https://medv3dko.xyz/bron.php?place=1" shape="rect" coords="793,38,861,105"  target="_self"     />
<area id="eith" alt="eith" title="8" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}' href="https://medv3dko.xyz/bron.php?place=8" shape="rect" coords="96,189,164,256"  target="_self"     />
<area id="nine" alt="nine" title="9" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}' href="https://medv3dko.xyz/bron.php?place=9" shape="rect" coords="96,298,164,365"  target="_self"     />
<area id="ten" alt="" title="10" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}' href="https://medv3dko.xyz/bron.php?place=10" shape="rect" coords="96,407,164,474"  target="_self"     />
<area id="eleven" alt="" title="11" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}' href="https://medv3dko.xyz/bron.php?place=11" shape="rect" coords="184,407,252,474"  target="_self"     />
<area id="twoten" alt="" title="12" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}' href="https://medv3dko.xyz/bron.php?place=12" shape="rect" coords="295,407,363,474"  target="_self"     />
<area id="ps1" alt="" title="PS1" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}' href="https://medv3dko.xyz/bron.php?place=13" shape="rect" coords="0,154,20,316"  target="_self"     />
<area id="ps2" alt="" title="PS2" data-maphilight='{"strokeColor":"0000ff","strokeWidth":2,"fillColor":"ff0000","fillOpacity":0.6}' href="https://medv3dko.xyz/bron.php?place=14" shape="rect" coords="0,329,20,491"  target="_self"     />
<area shape="rect" coords="898,489,900,491" alt="Image Map"  title="Image Map" href="" />
</map>
</div>
<div class="container2">
<form method="post" action="lib/bronaction.php" id="form1">
<?php
$pl = $_GET['place'];
if (!isset($pl)){
	echo "Выберите место на картинке";
	$val=2;
} else {
$avai = 1;
$res = mysqli_query($link, "SELECT avai FROM places WHERE id = {$_GET['place']} AND avai = '$avai'");
$datab = mysqli_query($link, "SELECT status FROM places WHERE id = {$_GET['place']}");
$rowb = mysqli_fetch_assoc($datab);
$statusb = $rowb["status"];
if(mysqli_num_rows($res)){
    echo "<p>Выбранное место: <span class='redt'>#" . $_GET["place"] . "</span>.<br /></p><p><span class='redt'>Место уже $statusb !</span><br /></p>";
	$val=0;
} else {
    echo "<p>Выбранное место: <span class='redt'>#" . $_GET["place"] . "</span>.<br /></p><span class='green'>Место свободно!</span>";
	$val=1;
}
}
?>
<p></p>
<div id="succes" class="white-popup mfp-hide">
  <h3>Ваша заявка успешно отправлена!</h3>
</div>
<div style="display:<?= $val == 1 ? 'block':'none' ?>">
  <div class="form-group">
   <label for="formGroupExampleInput">Дата:</label>
			<input id="formGroupExampleInput" type="text"
				   name="date"
				   data-datepicker
				   data-min="01/01/2020"
				   data-max="31/12/2028"
				   data-date="19/03/2020"
				   data-navigation="no"
				   data-class="classic-theme micro-theme"/>
  </div>
  <div class="form-group">
   <label for="formGroupExampleInput2">Время:</label>
<input style="width:50px" id="eITDbegintime" type="text" name="time" />
  </div>
   <div class="form-group" id="2" style="display:block">
   <label for="formGroupExampleInput3">Кол-во часов:</label>
   <input style="width:80px" id="hour" type="text" name="expired" />
   <p><a href="#" onClick="show();">Заказать пакетом</a></p>
  </div>
<div id="3" style="display:none"> 
<label for="formGroupExampleInput4">Выбрать пакет</label>
<select id="paket" name="paket">
  <option>Не выбрано</option>
  <option>Утро (8-11)</option>
  <option>5 часов</option>
  <option>Анлим (8-23)</option>
  <option>Ночной пакет</option>
</select>
<p><a href="#" onClick="show2();">Вернуться к часам</a></p>
</div>
  <?php
  echo "<input type='hidden' value=" . $_GET["place"] . " name='red_id'>"
  ?>
<input class="btn btn-red brongo" name="go" type="submit" onclick="reloadTimer()" value="Забронировать">
</form>
</div>
<div style="display:<?= $val == 0 ? 'block':'none' ?>">
<p><label>Чтобы забронировать на другое время свяжитесь с нами:</label></p>
<a class="btn btn-red brongo" href="https://vk.com/im?sel=-185712572" target="_blank">Забронировать</a>
</div>
</div>
    </section>
	  <footer id="sticky-footer" class="py-2 bg-white text-dark-80">
    <div class="container text-center">
      <small>Copyright &copy; BOOT<span class="redt">CAMP</span></small>
    </div>
  </footer>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
  <script type="text/javascript" src="https://davidlynch.org/projects/maphilight/jquery.maphilight.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
<script language="JavaScript" type="text/javascript">
jQuery(function($) {
$('#eITDbegintime').mask('99:99');
$('#eITDendtime').mask('99:99');
});
jQuery(function($) {
$('#hour').mask('9 час(ов)');
});
	</script>
	<script language="JavaScript" type="text/javascript">
$(document).ready(function () {
$("#form1").submit(function () {
 
 var form = $(this);
 var data = form.serialize();
   
$.ajax({
type: "POST",
url: 'lib/bronaction.php', //Здесь пишешь путь до обработчика
cache: false,
dataType: 'json', //Получаем данные в формате json
data: data,
success: function (data) 
{ 
 // Показываем сообщение
 $("#form_info").html(data).fadeIn(100); 
 
 // очищаем все поля инпутов
   form.find('input').not('input[type="submit"]').val(''); 
   location.reload(true)
},
 
error: function (data) {    
$.magnificPopup.open({
  items: {
    src: '#succes',
    type: 'inline'
  }
});  
},     
});
 return false; //отключаем обычную отправку формы
});
});

var timer = false;
var reloadTime = 3000; // ms

function reloadTimer() {
  if (!!timer) clearTimeout(timer);
  timer = setTimeout(function(){ top.location.reload(); }, reloadTime);
  }
</script>
  </body>
</html>