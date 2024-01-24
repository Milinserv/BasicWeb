<?php

require_once '../boot.php';

$stmt = pdo()->prepare("SELECT * FROM `users` WHERE `login` = :login");
$stmt->execute(['login' => $_POST['login']]);
if ($stmt->rowCount() > 0) {
    print_r('Никнейм уже занят');
    die;
}

$stmt = pdo()->prepare("INSERT INTO `users` (`login`, `password`) VALUES (:login, :password)");
$stmt->execute([
    'login' => $_POST['login'],
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
]);

header('Location: ../feedbackForm.php');

ini_set('session.gc_maxlifetime', 86400);
ini_set('session.cookie_lifetime', 0);
session_set_cookie_params(0);

session_start();
//находим id пользователя который сейчас авторизован, для отправки формы
$stmt = pdo()->prepare("SELECT id FROM users WHERE `login` = :login");
$stmt->execute([
    'login' => $_POST['login'],
]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
$_SESSION["user_id"] = $user["id"];
