<?php
			if ($_POST['login']!='' && $_POST['pass']!=''){//проверяем что поля не пустые
		if (strlen($_POST['login'])<=30 && strlen ($_POST['pass'])<= 30){//проверяем чтоб логин и пароль был меньше 30 символов
			$login = htmlspecialchars($_POST['login']);//убираем спецсимволы
			$pass = htmlspecialchars($_POST['pass']);//убираем спецсимволы

			$login = mysql_real_escape_string($login);//еще одна экранизация
			$pass = mysql_real_escape_string($pass);//еще одна экранизация
		}
			}
	if ($_POST['login']=='' || $_POST['password']=='') echo '<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Авторизация | BOOTCAMP</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.css">
    </head>
<body>
 <div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <br>
            <form id="form" method="post" action="login">
                <fieldset>
                    <legend>Авторизуйтесь</legend>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="user">Логин</label>
                            <input type="text" id="login" name="login" placeholder="Имя пользователя">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="password">Пароль</label>
                            <input type="password" id="password" name="password" placeholder="Пароль">
                        </div>
                    </div>
                    <div class="row">
                        <mark id="error" class="inline-block secondary hidden" style="margin: 10px 0 10px 8px;">Текст ошибки</mark>
                    </div>
                    <div class="row">
                        <input type="submit" id="button" value="Войти">
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>';
	else{
		//вот так данные можно отправлять без проверки вовсе, ни чего очень плохого случиться не должно. 
		//PDO все заэкранирует и превратит в текст. 
		//Можно разве что проверять длинну текста и какие то специфическиие данные

		$sql = "SELECT * FROM admin_users WHERE login=:login AND password=:pass";//Формируем запрос без данных
		$result = $pdo->prepare($sql);
		$result->bindvalue(':login', $_POST['login']);	//Заполняем данные
		$result->bindvalue(':pass', md5($_POST['password']));	//Заполняем данные. Пароли хранить в открытом виде, дело такое. Поэтому двойной md5)
		$result->execute( );							//Выполняем запросы
		$result = $result->fetchAll();					//переводим обьект ПДО в массив данных, для удобной работы

		if (count($result)>0) {//Если база вернула 1 значение, значит и логин и пароль совпали. отлично
			echo 'Ура! Мы авторизировались! Перенаправляем в панель...'; 
			$_SESSION['user'] = $result[0];//сохраняем обьект пользователя в сессии
			header("refresh: 3; url=https://medv3dko.xyz/admin/");
			
		}else echo '<meta charset="UTF-8"><mark id="error" class="inline-block secondary hidden" style="margin: 10px 0 10px 8px;">Логин или пароль не верный или пользователь не существует.</mark> <a href="https://medv3dko.xyz/admin/">Попробовать ещё раз</a>';
	}
?>