<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Управление игроками | BOOTCAMP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/bootstrap.min.css" >
    <link rel="stylesheet" href="../css/style.css" >
	  <style type="text/css">
   #centerLayer {
    margin-left: 43%; /* Отступ слева */
	margin-top: 3%; /* Отступ слева */
   }
   #centerLayer1 {
    margin-left: 5%; /* Отступ слева */
	margin-top: 3%; /* Отступ слева */
   }
 .ex{
	border:1px solid #ccc; /*рамка*/
	background:#eaeaea; /*фон*/
	padding: 10px 10px; /*отступы внутри*/
	text-decoration: none; /*убрать подчеркивание ссылки*/
}
  </style>
	</head>
<body>
<?php
require_once "../lib/conn.php";
$id1=$_GET['pndg_id'];
$id2=$_GET['del_id'];
$id3=$_GET['del_idp'];
	        if (isset($_GET['pndg_id'])) {
          $sql1 = mysqli_query($link1, "INSERT INTO ts_teams (id, team_name, players, pl_main, phone_main, configs, tour_id) SELECT id, team_name, players, pl_main, phone_main, configs,tour_id FROM ts_pending WHERE id=$id1");
		  $sql2 = mysqli_query($link1, "DELETE FROM `ts_pending` WHERE `ID`=$id1");
      if ($sql2) {
        echo "<div class='alert alert-success' role='alert'>
    <strong>Готово!</strong> Необходимая команда одобрена.
</div>";
	  header("refresh: 2; url=https://medv3dko.xyz/admin");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link1) . '</p>';
      }
    }
	        if (isset($_GET['del_id'])) {
		  $sql3 = mysqli_query($link1, "DELETE FROM `ts_pending` WHERE `ID`=$id2");
      if ($sql3) {
        echo "<div class='alert alert-success' role='alert'>
    <strong>Готово!</strong> Необходимая команда удалена.
</div>";
	  header("refresh: 2; url=https://medv3dko.xyz/admin");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link1) . '</p>';
      }
    }
	        if (isset($_GET['del_idp'])) {
		  $sql3 = mysqli_query($link1, "DELETE FROM `ts_teams` WHERE `ID`=$id3");
      if ($sql3) {
        echo "<div class='alert alert-success' role='alert'>
    <strong>Готово!</strong> Необходимая команда удалена.
</div>";
	  header("refresh: 2; url=https://medv3dko.xyz/admin");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link1) . '</p>';
      }
    }
?>
<?php
$id= $_GET['pl_id'];
require_once "../lib/conn.php";
      $sql = mysqli_query($link1, "SELECT ID, plmain, pl2, pl3, pl4, pl5, vkmain, vk2, vk3, vk4, vk5 FROM ts_players WHERE ID=$id");

	  if (isset($_GET["pl_id"])) {
	      while ($res = mysqli_fetch_array($sql)) {
echo "							  <form method='POST' action='redp.php' id='www'><div class='form-group'>
<div class='form-group'>
							    <label for='labelPhone'>Ниже приведены данные игроков. Здесь их можно изменить.</label>
								<div class='row'>
								<div class='col-1'>1:</div>
                                <input type='text' class='form-control w-25 p-3 col' name='plmain'  placeholder='playername (Командир)' size='5' value='{$res['plmain']}'>
								<div class='col-1'>&ndash;</div>
								<input type='text' class='form-control w-25 p-3 col' name='vkmain'  placeholder='VK Profile (Командир)' size='5' value='{$res['vkmain']}'>
								<div class='col-1'></div>
								<div class='w-100'></div>
								<div class='col-1'>2:</div>
                                <input type='text' class='form-control w-25 p-3 col' name='pl2'  placeholder='playername' size='5' value='{$res['pl2']}'>
								<div class='col-1'>&ndash;</div>
								<input type='text' class='form-control w-25 p-3 col' name='vk2'  placeholder='VK Profile' size='5' value='{$res['vk2']}'>
								<div class='col-1'></div>
								<div class='w-100'></div>
								<div class='col-1'>3:</div>
                                <input type='text' class='form-control w-25 p-3 col' name='pl3'  placeholder='playername' size='5' value='{$res['pl3']}'>
								<div class='col-1'>&ndash;</div>
								<input type='text' class='form-control w-25 p-3 col' name='vk3'  placeholder='VK Profile' size='5' value='{$res['vk3']}'>
								<div class='col-1'></div>
								<div class='w-100'></div>
								<div class='col-1'>4:</div>
                                <input type='text' class='form-control w-25 p-3 col' name='pl4'  placeholder='playername' size='5' value='{$res['pl4']}'>
								<div class='col-1'>&ndash;</div>
								<input type='text' class='form-control w-25 p-3 col' name='vk4'  placeholder='VK Profile' size='5' value='{$res['vk4']}'>
								<div class='col-1'></div>
								<div class='w-100'></div>
								<div class='col-1'>5:</div>
                                <input type='text' class='form-control w-25 p-3 col' name='pl5'  placeholder='playername' size='5' value='{$res['pl5']}'>
								<div class='col-1'>&ndash;</div>
								<input type='text' class='form-control w-25 p-3 col' name='vk5'  placeholder='VK Profile' size='5' value='{$res['vk5']}'>
								<div class='col-1'></div>
								<div class='w-100'></div>
								<div class='col-1'></div>
								<input type='hidden' name='id' value='{$res['ID']}'>
								</div>
							  </div> </div> </div>
							  <div id='centerLayer'>
							          <a class='btn btn-secondary' href='https://medv3dko.xyz/admin'>Назад</a>
                                      <button type='submit' class='btn btn-primary' id='eee'>Изменить</button></div></form>";
		  }
	  }
?>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  </body>
</html>