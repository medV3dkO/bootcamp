<?php
   if($_FILES["filename"]["size"] > 1024*3*1024)
   {
     echo ("Размер файла превышает три мегабайта");
     exit;
   }
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], "files/".$_FILES["filename"]["name"]);
    $uploadpath = 'files/'.$_FILES["filename"]["name"];
   }
?>
<?php
$db_server = "46.174.50.7";
$db_user = "u16652_med";
$db_password = "89223089871";
$db_name = "u16652_tour"; 
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $name =    $_POST['name'];
    $discp = $_POST['discp'];
    $date =   $_POST['date'];
    $formatpl =    $_POST['formatpl'];
    $payment = $_POST['payment'];
	$regl = $uploadpath;
 
    $update_columns = array();
    if(trim($name) !== "")   { $update_columns[] = "name = :name"; }
    if(trim($date) !== "")   { $update_columns[] = "date = :date"; }
    if(trim($formatpl) !== "")  { $update_columns[] = "formatpl = :formatpl"; }
    if(trim($discp) !== "")  { $update_columns[] = "discp = :discp"; }
    if(trim($payment) !== "")  { $update_columns[] = "payment = :payment"; }
    if(trim($regl) !== "")  { $update_columns[] = "regl = :regl"; }
    
    if(sizeof($update_columns > 0)){

        $sql = 'INSERT INTO ts_tour (name, discp, date, formatpl, payment, regl) VALUES (:name, :discp, :date, :formatpl, :payment, :regl)';
        // Перед тем как выполнять запрос предлагаю убедится, что он составлен без ошибок.
        // echo $sql;
        // Например, если в форме заполнены поля: название, автор книги и номер Id=1,
        // то запрос должен выглядеть следующим образом:
        // "UPDATE books SET title = :title, author = :author WHERE id=:id"
        
        // Подготовка запроса.
        $statement = $db->prepare($sql);
 
        // Привязываем к псевдо переменным реальные данные,
        // если они существуют (пользователь заполнил поле в форме).   
		if(trim($name) !== ""){
        $statement->bindParam(":name", $name);
		}
        if(trim($date) !== ""){
            $statement->bindParam(":date", $date);
        }
        if(trim($formatpl) !== ""){
            $statement->bindParam(":formatpl", $formatpl);
        }
        if(trim($discp) !== ""){
            $statement->bindParam(":discp", $discp);
        }
        if(trim($payment) !== ""){
            $statement->bindParam(":payment", $payment);
        }
        if(trim($regl) !== ""){
            $statement->bindParam(":regl", $regl);
        }
            // Выполняем запрос.
        $statement->execute();
		echo "Ваш запрос выполнен, перенаправление...";
		header("refresh: 3; url=https://medv3dko.xyz/admin/");
	}
    }
 
catch(PDOException $e) {
    echo "Ошибка при обновлении записи в базе данных: " . $e->getMessage();
}
 
// Закрываем соединение.
$db = null;
?>