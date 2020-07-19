<?php
 
require_once "conn.php";
 
 
$id = $_GET['id'];
$name = $_GET['name'];
$discp = $_GET['discp'];
$formatpl = $_GET['formatpl'];
$date = $_GET['date'];
$payment = $_GET['payment'];

           $sql = mysqli_query($link1, "UPDATE `ts_tour` SET `Name` = '$name',`Discp` = '$discp',`formatpl` = '$formatpl',`date` = '$date',`Payment` = '$payment' WHERE `ID`=$id");

      if ($sql) {
        echo "<div class='alert alert-success' role='alert'>
    <strong>Готово!</strong> Необходимая запись обновлена.
</div>";
header("refresh: 2; url=https://medv3dko.xyz/admin");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
?>
