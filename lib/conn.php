<?php
    $host = '46.174.50.7';
    $user = 'u16652_med';
    $pass = '89223089871';
    $db_name = 'u16652_medv3dko';
    $link = mysqli_connect($host, $user, $pass, $db_name);

    if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }
  ?>
<?php
    $host1 = '46.174.50.7';
    $user1 = 'u16652_med';
    $pass1= '89223089871';
    $db_name1 = 'u16652_tour';
    $link1 = mysqli_connect($host1, $user1, $pass1, $db_name1);

    if (!$link1) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }
  ?>