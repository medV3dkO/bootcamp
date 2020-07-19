<?php
$db_server = "46.174.50.7";
$db_user = "u16652_med";
$db_password = "89223089871";
$db_name = "u16652_tour"; 
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $team_name =    $_POST['team_name'];
    $phone_main =   $_POST['phone_main'];
	$tour_id = $_POST['tour_id'];
 
    $update_columns = array();
    if(trim($team_name) !== "")   { $update_columns[] = "team_name = :team_name"; }
    if(trim($phone_main) !== "")  { $update_columns[] = "phone_main = :phone_main"; }
	if(trim($tour_id) !== "")   { $update_columns[] = "tour_id = :tour_id"; }
    
    if(sizeof($update_columns > 0)){

        $sql = 'INSERT INTO ts_pending (team_name, phone_main, tour_id) VALUES (:team_name, :phone_main, :tour_id)';
        // Перед тем как выполнять запрос предлагаю убедится, что он составлен без ошибок.
        // echo $sql;
        // Например, если в форме заполнены поля: название, автор книги и номер Id=1,
        // то запрос должен выглядеть следующим образом:
        // "UPDATE books SET title = :title, author = :author WHERE id=:id"
        
        // Подготовка запроса.
        $statement = $db->prepare($sql);
 
        // Привязываем к псевдо переменным реальные данные,
        // если они существуют (пользователь заполнил поле в форме).   
		if(trim($team_name) !== ""){
        $statement->bindParam(":team_name", $team_name);
		}
        if(trim($phone_main) !== ""){
            $statement->bindParam(":phone_main", $phone_main);
        }
        if(trim($tour_id) !== ""){
            $statement->bindParam(":tour_id", $tour_id);
        }
            // Выполняем запрос.
        $statement->execute();
		$id = $db->lastInsertId();
	}
    }
	
 
catch(PDOException $e) {
    echo "Ошибка при обновлении записи в базе данных: " . $e->getMessage();
}
// Закрываем соединение.
$db = null;
?>
<?php
    $dbh = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $dbh->prepare("INSERT INTO ts_tmp (team_id) VALUES (:id)");
		$stmt->bindParam(':id', $id);
		$stmt->execute();
?>