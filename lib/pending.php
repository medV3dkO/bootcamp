<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Управление турниром | BOOTCAMP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/bootstrap.min.css" >
    <link rel="stylesheet" href="../css/style.css" >

		<script language="JavaScript" type="text/javascript">
$(function() {
  $("a[rel]").overlay(function() {
  var wrap = this.getContent().find("div.wrap");
  if (wrap.is(":empty")) {
  wrap.load(this.getTrigger().attr("href"));
  }
  });
  });
</script>
	
<style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    .tabs {
      font-size: 0;
      max-width: auto;
      margin-left: auto;
      margin-right: auto;
    }

    .tabs>input[type="radio"] {
      display: none;
    }

    .tabs>div {
      /* скрыть контент по умолчанию */
      display: none;
      border: 1px solid #e0e0e0;
      padding: 10px 15px;
      font-size: 16px;
    }

    /* отобразить контент, связанный с вабранной радиокнопкой (input type="radio") */
    #tab-btn-1:checked~#content-1,
    #tab-btn-2:checked~#content-2 {
      display: block;
    }

    .tabs>label {
      display: inline-block;
      text-align: center;
      vertical-align: middle;
      user-select: none;
      background-color: #f5f5f5;
      border: 1px solid #e0e0e0;
      padding: 10px 15px;
      font-size: 16px;
      line-height: 1.5;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out;
      cursor: pointer;
      position: relative;
      top: 9px;
    }

    .tabs>label:not(:first-of-type) {
      border-left: none;
    }

    .tabs>input[type="radio"]:checked+label {
      background-color: #fff;
      border-bottom: 1px solid #fff;
    }
  </style>
</head>
<body>
  <div class="float-right">
<nav class="navbar navbar-light bg-light">
  <span class="navbar-text">
<ul class="nav nav-tabs">
  <li class="nav-item">
	<a class="nav-link btn-danger btn-sm" href="https://medv3dko.xyz/admin">Назад в панель</a>
  </li>
  </span>
</nav>
</div>
</ul> 
<div id='content-1'>
<?php
require_once "../lib/conn.php"; 
$sql = mysqli_query($link1, 'SELECT `Name` FROM `ts_tour`');
$sql1 = mysqli_query($link1, 'SELECT `id`, `team_name`, `players`, `pl_main`, `phone_main`, `configs` FROM `ts_pending`');
$sql2 = mysqli_query($link1, 'SELECT `id`, `team_name`, `players`, `pl_main`, `phone_main`, `configs` FROM `ts_teams`');
$result2 = mysqli_fetch_array($sql2);
  if (mysqli_num_rows ($sql1) == 0) {
	  echo "<h1 class='mb-4 redt list-group-item-warning'>Заявок нет</h1>";
  } else {
  while ($result = mysqli_fetch_array($sql)) {
  echo "<div class='tabs'>
    <input type='radio' name='tab-btn' id='tab-btn-1' value='' checked>
  <label for='tab-btn-1'>{$result['Name']}</label>
  <p>Заявки в ожидании:
Принятые заявки:</p>";
    while ($result1 = mysqli_fetch_array($sql1)) {
      echo "
	<div class='clearfix'>
				<div class='d-flex flex-column float-left'>
<div class='p-2'><div class='card'>
  <div class='card-body'>
    <h4 class='card-title'>{$result1['team_name']}</h4>
    <h6 class='card-subtitle mb-2 text-muted'>Командир: <span class='redt'>{$result1['pl_main']}</span></h6>
    <p class='card-text'>
      Телефон командира: <a href='tel:{$result1['phone_main']}'>{$result1['phone_main']}</a>
	  <div class='d-flex justify-content-center'>
	  <p class='text-center'><a id='green' href='getpl.php?pl_id={$result1['players']}'>Список игроков</a></div>
         <a id='green' href='https://medv3dko.xyz/lib/{$result1['configs']}'>Скачать конфиги</a>
		 <a id='green' href='https://medv3dko.xyz/lib/getpl.php?pndg_id={$result1['id']}'>Одобрить</a>
		 <a id='red' href='https://medv3dko.xyz/lib/getpl.php?del_id={$result1['id']}'>Удалить</a>
		 </div>
    </p>
  </div>
    </div>
</div>
</div>
<p></p>
<div class='d-flex flex-column float-right'>
<div class='p-2'><div class='card'>
  <div class='card-body'>
    <h4 class='card-title'>{$result2['team_name']}</h4>
    <h6 class='card-subtitle mb-2 text-muted'>Командир: <span class='redt'>{$result2['pl_main']}</span></h6>
    <p class='card-text'>
      Телефон командира: <strong>{$result2['phone_main']}</strong>
	  <p class='text-center'><a id='green' href='getpl.php?pl_id={$result1['players']}'>Список игроков</a>
	           <a id='green' href='https://medv3dko.xyz/lib/{$result2['configs']}'>Скачать конфиги</a>
    </p>
  </div>
</div>
</div>
  </div>
  </div>
</div>";
	}
	}
}  
	?>
	</div>
	<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredLabel">Список игроков</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form method='POST' action='javascript:void(null);' onsubmit='www()' id='www'>
							  <div id='formpl'></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-secondary">Сохранить</button>
      </div>
	  </form>
    </div>
  </div>
</div>
</div>
		  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="https://davidlynch.org/projects/maphilight/jquery.maphilight.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.maskedinput.min.js"></script>
  	<script type="text/javascript">
$("#formew").on('submit', function(){
    $.post(
        'getpl.php', // адрес обработчика
         $("#formew").serialize(), // отправляемые данные       

        function(msg) { // получен ответ сервера  
            $('#my_form').hide('slow');
            $('#formpl').html(msg);
        }		 
    );
});
</script>
	</body>
	</html>