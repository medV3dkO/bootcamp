<?php
$db_server = "46.174.50.7";
$db_user = "u16652_med";
$db_password = "89223089871";
$db_name = "u16652_tour"; 
    $dbh = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$whitelist = array('zip','rar');
$name      = null;
$error     = 'Файл не выбран или слишком большой.';
$uploaddir = 'files/configs/';

if (isset($_FILES)) {
	if (isset($_FILES['cfg'])) {
$file = $uploaddir . basename($_FILES['cfg']['name']);
$name     = basename($_FILES['cfg']['name']);
$error    = $_FILES['cfg']['error'];

if ($error === UPLOAD_ERR_OK) {
$extension = pathinfo($name, PATHINFO_EXTENSION);

			if (!in_array($extension, $whitelist)) {
				$error = 'Только .zip или .rar файлы.';
			} else {
            (move_uploaded_file($_FILES['cfg']['tmp_name'], $file));
}
}
	}
}
	echo json_encode(array(
	'name'  => $name,
	'error' => $error,
));		
$stmt = $dbh->prepare("SELECT * FROM ts_tmp WHERE team_id=(SELECT MAX(team_id) FROM ts_tmp)");
	$stmt->execute();
	$id = $stmt->fetchColumn();
$stmt1 = $dbh->prepare("UPDATE ts_pending SET configs =? WHERE ID=?");
$stmt1->execute([$file, $id]);
$dbh = null;
?>