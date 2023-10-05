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
if (isset($_POST['name'])) {
    // Получаем данные из формы
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['password-2'];

    // Проверяем, совпадают ли пароли
    if ($password != $confirmPassword) {
        echo "Пароли не совпадают!";
    } else {
        // Проверяем, есть ли уже пользователь с таким email или телефоном в базе данных
        $checkQuery = "SELECT * FROM users WHERE email='$email' OR phone='$phone'";
        $result = $conn->query($checkQuery);
        if ($result->num_rows > 0) {
            echo "Пользователь с таким email или телефоном уже существует!";
        } else {
            // Все проверки пройдены, добавляем пользователя в базу данных
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $insertQuery = "INSERT INTO users (login, phone, email, token) VALUES ('$name', '$phone', '$email', '$hashedPassword')";
            if ($conn->query($insertQuery) === TRUE) {
                echo "Регистрация успешна!";
                header('/');
                // Здесь можно добавить код для перенаправления на другую страницу после успешной регистрации
            } else {
                echo "Ошибка при регистрации: " . $conn->error;
            }
        }
    }


    /*$submittedPassword = "Введенный_пароль";
    $hashedPasswordFromDatabase = "Хэшированный_пароль_из_базы_данных";

    if (password_verify($submittedPassword, $hashedPasswordFromDatabase)) {
        echo "Пароль верный";
    } else {
        echo "Пароль неверный";
    }*/

}


