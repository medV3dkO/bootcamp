<?php
 
require_once "conn.php";
 
 
$id = $_GET['id'];
$status = $_GET['status'];
$expired = $_GET['expired'];
$paket = $_GET['paket'];

           $sql = mysqli_query($link, "UPDATE `places` SET `status` = '$status',`expired` = '$expired',`paket` = '$paket' WHERE `ID`=$id");

      if ($sql) {
        echo "<div class='alert alert-success' role='alert'>
    <strong>Готово!</strong> Необходимая запись обновлена.
</div>";
header("refresh: 2; url=https://medv3dko.xyz/admin");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
?>
