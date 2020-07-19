<?php
require_once "conn.php";
$id1 = $_GET['clr_idt'];
 if (isset($_GET['clr_idt'])) {
          $sql = mysqli_query($link1, "DELETE FROM `ts_pending` WHERE `tour_id`=$id1");
		  $sql1 = mysqli_query($link1, "DELETE FROM `ts_teams` WHERE `tour_id`=$id1");
      if ($sql && $sql1) {
        echo "<div class='alert alert-success' role='alert'>
    <strong>Готово!</strong> Необходимые записи удалены.
</div>";
	  header("refresh: 2; url=https://medv3dko.xyz/admin");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link1) . '</p>';
      }
    }
$id2 = $_GET['clrempt_idt'];
 if (isset($_GET['clrempt_idt'])) {
	 $sql2 = mysqli_query($link1, "SELECT FROM `ts_pending` WHERE `id`, `team_name`, `players`, `pl_main`, `phone_main`, `configs`, `tour_id` = ''");
          $sql3 = mysqli_query($link1, "DELETE FROM `ts_pending` WHERE players = ''");
		  $sql4 = mysqli_query($link1, "DELETE FROM `ts_teams` WHERE players = ''");
      if ($sql3 && $sql4) {
        echo "<div class='alert alert-success' role='alert'>
    <strong>Готово!</strong> Необходимые записи удалены.
</div>";
	  header("refresh: 2; url=https://medv3dko.xyz/admin");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link1) . '</p>';
      }
    }
$id2 = $_GET['pndg_idt'];
 if (isset($_GET['pndg_idt'])) {
          $sq5 = mysqli_query($link1, "INSERT INTO ts_teams (id, team_name, players, pl_main, phone_main, configs, tour_id) SELECT id, team_name, players, pl_main, phone_main, configs,tour_id FROM ts_pending WHERE tour_id=$id2");
		  $sql6 = mysqli_query($link1, "DELETE FROM `ts_pending` WHERE tour_id =$id2");
      if ($sq5 && $sql6) {
        echo "<div class='alert alert-success' role='alert'>
    <strong>Готово!</strong> Необходимые записи удалены.
</div>";
	  header("refresh: 2; url=https://medv3dko.xyz/admin");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link1) . '</p>';
      }
    }
?>

<?php
 
require_once "conn.php";
 
$title = "Изменение";
 
$id = $_GET['red_idt'];
 
$sql = "SELECT * FROM ts_tour WHERE id=$id";
$query = mysqli_query($link1, $sql) or die();
 
$dataFromTable = mysqli_fetch_assoc($query);
?>
<body>
	 <script type="text/javascript" src="../js/jquery.maskedinput.min.js"></script>
    <div>
        <input class="inputStandard" type="button" onclick="history.back();" value="Назад"/>
    </div>
 
    <form action=redt.php method="get">
        <fieldset>
            <legend>Редактирование турнира:</legend>
            <input type=hidden name=id value="<? echo $id ?>">
            <div class="field">
                <label>Название:</label>
                <input class=inputForm type=text name=name value="<? echo $dataFromTable['Name'] ?>">
            </div>
            <div class="field">
                <label>Дисциплина:</label>
                <input class=inputForm type=text name=discp value="<? echo $dataFromTable['discp'] ?>">
            </div>
            <div class="field">
                <label>Формат игроков:</label>
                <input class=inputForm type=text name=formatpl id="format" value="<? echo $dataFromTable['formatpl'] ?>">
            </div>
            <div class="field">
                <label>Дата:</label>
                <input class=inputForm type=text name=date id="date" value="<? echo $dataFromTable['Date'] ?>">
            </div>
            <div class="field">
                <label>Взнос:</label>
                <input class=inputForm type=text name=payment value="<? echo $dataFromTable['Payment'] ?>">
            </div>
            <div class="field">
                <input class=inputStandard type=submit name=submit value="Изменить">
            </div>
        </fieldset>
    </form>
	<script language="JavaScript" type="text/javascript">
jQuery(function($) {
$('#format').mask('9x9');
$('#date').mask('99.99.9999');
});
	</script>
	</body>