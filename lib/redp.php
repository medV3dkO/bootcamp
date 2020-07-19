<?php
  require_once "../lib/conn.php";
  $id = $_POST['id'];
  $plmain = $_POST['plmain'];
$pl2 = $_POST['pl2'];
$pl3 = $_POST['pl3'];
$pl4 = $_POST['pl4'];
$pl5 = $_POST['pl5'];
$vkmain = $_POST['vkmain'];
$vk2 = $_POST['vk2'];
$vk3 = $_POST['vk3']; 
$vk4 = $_POST['vk4']; 
$vk5 = $_POST['vk5'];
          $sql = mysqli_query($link1, "UPDATE ts_players SET plmain = '$plmain', pl2 = '$pl2', pl3 = '$pl3', pl4 = '$pl4', pl5 = '$pl5', vkmain = '$vkmain', vk2 = '$vk2', vk3 = '$vk3', vk4 = '$vk4', vk5 = '$vk5' WHERE ID=$id");
      if ($sql) {
        echo "<div class='alert alert-success' role='alert'>
    <strong>Готово!</strong> Данные обновлены. Перенаправление через 2 секунды.
</div>";
	  header("refresh: 2; url=https://medv3dko.xyz/lib/pending.php");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link1) . '</p>';
      }
  ?>