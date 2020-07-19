<?php

	$db_name = "u16652_medv3dko";

	$login = "u16652_med";
	$password = "89223089871";
	
	
	try{
		$pdo = new PDO("mysql:host=46.174.50.7;dbname=".$db_name.";charset=utf8",$login, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		$Log_File = "log.txt";
		file_put_contents($Log_File, date("Y-m-d H:i:s")." -//- ".$e->getMessage().PHP_EOL, FILE_APPEND | LOCK_EX);	
		echo '<meta charset="UTF-8">Ошибка базы данных';
	}

?>