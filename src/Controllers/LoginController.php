<?php

use App\Config\DataBaseConnect;

error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    require_once '../../vendor/autoload.php';

    // Подключение к базе данных
    $databaseConnection = DataBaseConnect::getInstance();
    $conn = $databaseConnection->getConnection();

    if ($conn->connect_error) {
        die("Ошибка подключения к базе данных: " . $conn->connect_error);
    }

    // Проверяем, если форма была отправлена
    if (isset($_POST['login'])) {
        // Получаем данные из формы
        $name = $_POST['login'];
        $password = $_POST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $checkQuery = "SELECT token FROM users WHERE email='$name' OR phone='$name' OR login = '$name' AND token = '$hashedPassword'";


        $result = $conn->query($checkQuery)->fetch_object()->token;

        if (password_verify($password, $result) === false) {
            echo 'не удачный вход';
        }
        echo 'удачный вход';

    }
       // catch Exception('не верный логин или пароль');


       // }


    /* $submittedPassword = "Введенный_пароль";
     $hashedPasswordFromDatabase = "Хэшированный_пароль_из_базы_данных";

     if (password_verify($submittedPassword, $hashedPasswordFromDatabase)) {
         echo "Пароль верный";
     } else {
         echo "Пароль неверный";
     }*/




