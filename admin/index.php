<?php
session_start();
include("bd.php");
$page = $_SERVER['REQUEST_URI'];

if (isset($_SESSION['user'])){								//если пользователь авторизован
	include_once "index1.php";
}else{		
	switch($page){
		default:
			include("login.php");
			break;
	}							//перекидываем на страницу регистрации авторизации
}
?>