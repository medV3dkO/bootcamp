<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
<?php
$db_server = "46.174.50.7";
$db_user = "u16652_med";
$db_password = "89223089871";
$db_name = "u16652_medv3dko"; 
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id =       $_POST['red_id'];
    $number =    $_POST['number'];
    $date =   $_POST['date'];
    $time =    $_POST['time'];
    $expired = $_POST['expired'];
    $paket = $_POST['paket'];
	$status = "забронировано на $date , $time";
	$avai = "1";
	
    if(empty($expired)){
        $expired = "Пакет";
    }
	
    if(empty($paket)){
        $paket = "По-часовая";
    }
    
    if(empty($id)){
        echo "Вы не выбрали место!";
        return;
    }
 
    $update_columns = array();
    if(trim($id) !== "")   { $update_columns[] = "id = :id"; }
    if(trim($status) !== "")   { $update_columns[] = "status = :status"; }
    if(trim($number) !== "")  { $update_columns[] = "number = :number"; }
    if(trim($expired) !== "")  { $update_columns[] = "expired = :expired"; }
    if(trim($paket) !== "")  { $update_columns[] = "paket = :paket"; }
	if(trim($avai) !== "")  { $update_columns[] = "avai = :avai"; }
    
    if(sizeof($update_columns > 0)){

        $sql = "UPDATE places SET " . implode(", ", $update_columns) . " WHERE id=:id";
        // Перед тем как выполнять запрос предлагаю убедится, что он составлен без ошибок.
        // echo $sql;
        // Например, если в форме заполнены поля: название, автор книги и номер Id=1,
        // то запрос должен выглядеть следующим образом:
        // "UPDATE books SET title = :title, author = :author WHERE id=:id"
        
        // Подготовка запроса.
        $statement = $db->prepare($sql);
 
        // Привязываем к псевдо переменным реальные данные,
        // если они существуют (пользователь заполнил поле в форме).        
        $statement->bindParam(":id", $id);
        if(trim($number) !== ""){
            $statement->bindParam(":number", $number);
        }
        if(trim($expired) !== ""){
            $statement->bindParam(":expired", $expired);
        }
        if(trim($status) !== ""){
            $statement->bindParam(":status", $status);
        }
        if(trim($paket) !== ""){
            $statement->bindParam(":paket", $paket);
        }
        if(trim($avai) !== ""){
            $statement->bindParam(":avai", $avai);
        }
            // Выполняем запрос.
        $statement->execute();
	}
    
        echo "Запись c ID: " . $id . " успешно обновлена!";
		$info = 'Успешная отправка формы';
    }
 
catch(PDOException $e) {
    echo "Ошибка при обновлении записи в базе данных: " . $e->getMessage();
}
 
// Закрываем соединение.
$db = null;
?>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>