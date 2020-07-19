<?php
require_once "lib/conn.php";
$id = $_POST['id'];

$sql = "SELECT * FROM ts_tour WHERE id=$id";
$query = mysqli_query($link1, $sql) or die();
 
$dataFromTable = mysqli_fetch_assoc($query);

$results = "<div class='d-flex justify-content-center list-group-item-secondary'><div class='p-2'>Название турнира:<span class='redt'> ".$dataFromTable['Name']."</span></div><div class='p-2'>Командный взнос:<span class='redt'> ".$dataFromTable['Payment']." </span> рублей.</div></div><div hidden>ID турнира: $id</div><p></p>";

      echo $results;

?>