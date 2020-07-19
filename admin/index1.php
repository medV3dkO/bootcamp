<?php
  if (isset($_GET["logout"])) {
	  session_destroy();
	  header("Location: https://medv3dko.xyz/admin/"); /* Redirect browser */
      exit;
  }
  $today = date("d.m.yy");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Админ-панель | BOOTCAMP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >
	    <script>
    function disp(form) {
        if (form.style.display == "none") {
            form.style.display = "block";
        } else {
            form.style.display = "none";
        }
    }
    </script>

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

    .tabs>input[type="radio"] {
      display: none;
    }

    .tabs>input[type="radio"]:checked+label {
      background-color: #bdbdbd;
    }

    .tabs>div {
      display: none;
      border: 1px solid #eee;
      padding: 10px 15px;
      border-radius: 4px;
    }

    #tab-btn-1:checked~#content-1,
    #tab-btn-2:checked~#content-2,
    #tab-btn-3:checked~#content-3 {
      display: block;
    }

    .tabs>label {
      display: inline-block;
      text-align: center;
      vertical-align: middle;
      user-select: none;
      background-color: #eee;
      border: 1px solid transparent;
      padding: 2px 8px;
      font-size: 20px;
      line-height: 1.5;
      border-radius: 4px;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
      margin-left: 6px;
      cursor: pointer;
      margin-bottom: 10px;
    }
	
    .lol {
      display: inline-block;
      text-align: center;
      vertical-align: middle;
      user-select: none;
      background-color: #ab1a1a;
	  color: white;
      border: 1px solid transparent;
      padding: 2px 8px;
      font-size: 20px;
      line-height: 1.5;
      border-radius: 4px;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
      margin-left: 6px;
	  left: 5px;
      cursor: pointer;
      margin-bottom: 10px;
    }

    .tabs>label:first-of-type {
      margin-left: 0;
    }
  </style>
</head>
<body>
<?php
require_once "../lib/conn.php";
    if (isset($_POST["Number"])) {
      if (isset($_GET['red_id'])) {
          $sql = mysqli_query($link, "UPDATE `places` SET `Number` = '{$_POST['Number']}',`Status` = '{$_POST['Status']}',`Paket` = '{$_POST['Paket']}',`Expired` = '{$_POST['Expired']}' WHERE `ID`={$_GET['red_id']}");
      } else {
          
      }

      if ($sql) {
        echo "<div class='alert alert-success' role='alert'>
    <strong>Готово!</strong> Необходимая запись обновлена.
</div>";
header("refresh: 2; url=https://medv3dko.xyz/admin");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }
	
 if (isset($_GET['red_id'])) {
      $sql = mysqli_query($link, "SELECT `ID`, `Number`, `Status`, `Paket`, `Expired` FROM `places` WHERE `ID`={$_GET['red_id']}");
      $product = mysqli_fetch_array($sql);
    }
?>
<?php
require_once "../lib/conn.php";

      if (isset($_GET['free_id'])) {
          $sql = mysqli_query($link, "UPDATE `places` SET `Status` = '',`Paket` = '',`Expired` = '',`avai` = '0' WHERE `ID`={$_GET['free_id']}");
header("refresh: 2; url=https://medv3dko.xyz/admin");
      if ($sql) {
        echo "<div class='alert alert-success' role='alert'>
    <strong>Готово!</strong> Необходимое место очищено.
</div>";
	  header("refresh: 2; url=https://medv3dko.xyz/admin");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }
      if (isset($_GET['free_all'])) {
          $sql = mysqli_query($link, "UPDATE `places` SET `Status` = '',`Paket` = '',`Expired` = '',`avai` = '0'");
		  
      if ($sql) {
        echo "<div class='alert alert-success' role='alert'>
    <strong>Готово!</strong> Всё места очищены.
</div>";
header("refresh: 2; url=https://medv3dko.xyz/admin");
	  exit;
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }
      if (isset($_GET['occupy_all'])) {
          $sql = mysqli_query($link, "UPDATE `places` SET `Status` = 'забронировано на $today',`Paket` = '',`Expired` = '',`avai` = '1'");
		  
      if ($sql) {
        echo "<div class='alert alert-success' role='alert'>
    <strong>Готово!</strong> Всё места заняты.
</div>";
header("refresh: 2; url=https://medv3dko.xyz/admin");
	  exit;
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }
      if (isset($_GET['del_idt'])) {
          $sql = mysqli_query($link1, "DELETE FROM `ts_tour` WHERE `ID`={$_GET['del_idt']}");
header("refresh: 2; url=https://medv3dko.xyz/admin");
      if ($sql) {
        echo "<div class='alert alert-success' role='alert'>
    <strong>Готово!</strong> Необходимая запись удалена.
</div>";
	  header("refresh: 2; url=https://medv3dko.xyz/admin");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }
  ?>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
  <div class="tabs">
    <input type="radio" name="tab-btn" id="tab-btn-1" value="" checked>
    <label for="tab-btn-1">Бронирования</label>
    <input type="radio" name="tab-btn" id="tab-btn-2" value="">
    <label for="tab-btn-2">Управление турнирами</label>
    <input type="radio" name="tab-btn" id="tab-btn-3" value="">
    <label for="tab-btn-3">Заявки на турниры</label>
	<a class="lol float-right" href="admin?logout">Выйти</a>
	
    <div id="content-1">
      <div class="container">
	  <a id="green" href="?free_all">Освободить все места</a>
	  <a id="red" href="?occupy_all">Занять все места</a>
	  <p></p>
<table class="table">
  <thead class="thead-dark">
  <tr>
    <td>№ места</td>
    <td>Статус</td>
	<td>Время</td>
	<td>Пакет</td>
  </tr>
   </thead>
   <tbody>
<?php // Вывод данных
require_once "../lib/conn.php"; 

    $sql = mysqli_query($link, 'SELECT `ID`, `Number`, `Status`, `Paket`, `Expired` FROM `places`');
    while ($result = mysqli_fetch_array($sql)) {
      echo '<tr>' .
           "<th scope='row'>{$result['Number']}</th>" .
           "<td>{$result['Status']}</td>" .
		   "<td>{$result['Expired']}</td>" .
		   "<td>{$result['Paket']}</td>" .
		   "<td width='5%'><a id='green' href='?free_id={$result['ID']}'>Освободить</a></td>" .
		   "<td width='5%'><div id='btnr'><a id='red' href='../lib/redformb.php?red_idb={$result['ID']}'>Изменить</a></div></td>" .
           '</tr>';
    }
  ?>
  </tbody>
</table>
</div>
    </div>
    <div id="content-2">
			<p><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Создать турнир</button></p>
			<table class="table">
  <thead class="thead-dark">
  <tr>
    <td>Название</td>
    <td>Дата</td>
	<td>Взнос</td>
	<td>Дисциплина</td>
	<td>Формат</td>
  </tr>
   </thead>
   <tbody>
<?php // Вывод данных
    $sql = mysqli_query($link1, 'SELECT `ID`, `Name`, `Date`, `Payment`, `discp`, `formatpl` FROM `ts_tour`');
	if (mysqli_num_rows ($sql) == 0) {
			  echo "<td><span class='redt'>Активных турниров не имеется.</span></td>";
  } else {
    while ($result = mysqli_fetch_array($sql)) {
      echo '<tr>' .
           "<th scope='row'>{$result['Name']}</th>" .
           "<td>{$result['Date']}</td>" .
		   "<td>{$result['Payment']}</td>" .
		   "<td>{$result['discp']}</td>" .
		   "<td>{$result['formatpl']}</td>" .
		   "<td width='5%'><a id='red' href='?del_idt={$result['ID']}'>Удалить</a></td>" .
		   "<td width='5%'><a id='green' href='../lib/redformt.php?red_idt={$result['ID']}'>Изменить</a></td>" .
		   "<td width='5%'><a id='red' href='../lib/redformt.php?clr_idt={$result['ID']}'>Очистить заявки</a></td>" .
		   "<td width='5%'><a id='green' href='../lib/redformt.php?pndg_idt={$result['ID']}'>Одобрить заявки</a></td>" .
		   "<td width='5%'><a id='red' href='../lib/redformt.php?clrempt_idt={$result['ID']}'>Очистить пустые заявки</a></td>" .
           '</tr>';
    }
  }
  ?>
  </tbody>
</table>

			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
					  <div class="modal-header">
					  <div class="float-left">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
			        <h4 class="modal-title" id="gridSystemModalLabel">Создание турнира</h4>
			      </div>
			      <div class="modal-body">
			      	<div class="row">
			      		<div class="col-md-12">
			      			<div class="hide" id="respons"></div>
					      	<form method="POST" action="../lib/createtour.php" id="createtour" enctype="multipart/form-data">
							  <div class="form-group">
							    <label for="labelEmail">Название:</label>
							    <input type="text" class="form-control" name="name" placeholder="Любое" required>
							  </div>
							  <div class="form-group">
							    <label for="labelPhone">Дисциплина:</label>
							    <select class="custom-select" name="discp">
  <option selected>Не выбрано</option>
  <option value="CS:GO">CS:GO</option>
  <option value="Dota 2">Dota 2</option>
  <option value="Warface">Warface</option>
</select>
							  </div>
							  <div class="form-group">
							    <label for="labelText">Формат игроков:</label>
							    <input type="text" class="form-control" name="formatpl" id="format" placeholder="1х1" required>
							  </div>
							  <div class="form-group">
							    <label for="labelText">Дата:</label>
							    <input type="text" class="form-control" name="date" id="date" placeholder="00/00/0000" required>
							  </div>
							  <div class="form-group">
							    <label for="labelText">Взнос:</label>
							    <input type="text" class="form-control" name="payment" placeholder="over9000 RUB" required>
							  </div>
							  							  <div class="form-group">
														  <label for="labelText">Регламент:</label>
      <p><input type="file" name="filename" id="filename"><br> </p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
							  <button type="submit" class="btn btn-primary">Отправить</button>
							  </div>
							</form>
						</div>
			      	</div>
			      	</div>	
			    </div>
			  </div>
			</div>
    </div>
   <div id="content-3">
   <div class='clearfix'>
   <div class='d-flex flex-column float-left'>
  <?php
require_once "../lib/conn.php"; 
$sql1 = mysqli_query($link1, 'SELECT `id`, `team_name`, `players`, `pl_main`, `phone_main`, `configs`, `tour_id` FROM `ts_pending`');
$sql3 = mysqli_query($link1, 'SELECT `tour_id` FROM `ts_pending`');
$sql4 = mysqli_query($link1, 'SELECT ts_tour.Name FROM ts_tour LEFT JOIN ts_pending ON ts_pending.tour_id = ts_tour.ID');
$sql5 = mysqli_query($link1, 'SELECT ts_tour.Name FROM ts_tour LEFT JOIN ts_teams ON ts_teams.tour_id = ts_tour.ID');
$sql2 = mysqli_query($link1, 'SELECT `id`, `team_name`, `players`, `pl_main`, `phone_main`, `configs`, `tour_id` FROM `ts_teams`');
  if (mysqli_num_rows ($sql1) == 0 && mysqli_num_rows ($sql2) == 0) {
	  echo "<h1 class='mb-4 redt list-group-item-warning'>Заявок нет</h1>";
  } else {
    while ($result1 = mysqli_fetch_array($sql1)) {
		$result = mysqli_fetch_array($sql4);
      echo "
<div class='p-2'><div class='card'>
  <div class='card-body'>
  <div class='list-group'>
  <div class='list-group-item-dark text-center'><label for='tab-btn-1'>{$result['Name']}</label></div>
  </div>
    <h4 class='card-title'>{$result1['team_name']}<span class='badge badge-warning'>Новая</span><span class='float-right'><a id='green' href='https://medv3dko.xyz/lib/getpl.php?pndg_id={$result1['id']}'>Одобрить</a></span></h4>
    <h6 class='card-subtitle mb-2 text-muted'>Командир: <span class='redt'>{$result1['pl_main']}</span></h6>
    <p class='card-text'>
      Телефон командира: <a href='tel:{$result1['phone_main']}'>{$result1['phone_main']}</a>
	     <p><a id='green' href='getpl.php?pl_id={$result1['players']}'>Список игроков</a></p>
         <a id='green' href='https://medv3dko.xyz/lib/{$result1['configs']}'>Скачать конфиги</a>
		 <a id='red' href='https://medv3dko.xyz/lib/getpl.php?del_id={$result1['id']}'>Удалить</a>
    </p>
</div>
</div>
</div>";
  }}
	?>
	</div>
	<div class='d-flex flex-column float-right'>
	<?php
	while ($result2 = mysqli_fetch_array($sql2)) {
		$result3 = mysqli_fetch_array($sql5);
		echo "
<div class='p-2'><div class='card'>
  <div class='card-body'>
    <div class='list-group'>
  <div class='list-group-item-dark text-center'><label for='tab-btn-1'>{$result3['Name']}</label></div>
  </div>
    <h4 class='card-title'>{$result2['team_name']}<span class='badge badge-success'>Подтверждены</span><span class='float-right'><a id='red' href='https://medv3dko.xyz/lib/getpl.php?del_idp={$result2['id']}'>Удалить</a></span></h4>
    <h6 class='card-subtitle mb-2 text-muted'>Командир: <span class='redt'>{$result2['pl_main']}</span></h6>
    <p class='card-text'>
      Телефон командира: <strong>{$result2['phone_main']}</strong>
	  <p class='text-center'><a id='green' href='https://medv3dko.xyz/lib/getpl.php?pl_id={$result2['players']}'>Список игроков</a>
	           <a id='green' href='https://medv3dko.xyz/lib/{$result2['configs']}'>Скачать конфиги</a>
    </p>
  </div>
</div>
</div>";
	}
	?>
	</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
		<script language="JavaScript" type="text/javascript">
jQuery(function($) {
$('#format').mask('9x9');
$('#date').mask('99.99.9999');
});
	</script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/jquery.form.js"></script>	
</body>
</html>