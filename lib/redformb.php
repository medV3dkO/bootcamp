<?php
 
require_once "conn.php";
 
$title = "Изменение";
 
$id = $_GET['red_idb'];
 
$sql = "SELECT * FROM places WHERE id=$id";
$query = mysqli_query($link, $sql) or die();
 
$dataFromTable = mysqli_fetch_assoc($query);
?>
<body>
    <div>
        <input class="inputStandard" type="button" onclick="history.back();" value="Назад"/>
    </div>
 
    <form action=redb.php method="get">
        <fieldset>
            <legend>Редактирование брони</legend>
            <input type=hidden name=id value="<? echo $id ?>">
            <div class="field">
                <label>Номер:</label>
                <input class=inputForm type=text name=number value="<? echo $dataFromTable['number'] ?>" readonly size=1>
            </div>
            <div class="field">
                <label>Статус:</label>
                <input class=inputForm type=text name=status id=date value="<? echo $dataFromTable['status'] ?>" size=30>
            </div>
            <div class="field">
                <label>Игровое время:</label>
                <input class=inputForm type=text name=expired value="<? echo $dataFromTable['expired'] ?>">
            </div>
            <div class="field">
                <label>Пакет:</label>
                <input class=inputForm type=text name=paket id="date" value="<? echo $dataFromTable['paket'] ?>">
            </div>
            <div class="field">
                <input class=inputStandard type=submit name=submit value="Изменить">
            </div>
        </fieldset>
    </form>
    <script type="text/javascript" src="../js/jquery.maskedinput.min.js"></script>
	<script language="JavaScript" type="text/javascript">
jQuery(function($) {
$('#date').mask('забронировано на 99/99/9999 , 99:99');
});
	</script>
	</body>