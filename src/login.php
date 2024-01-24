<?php

require_once '../boot.php';

// Проверяем наличие пользователя с указанным юзернеймом
$stmt = pdo()->prepare("SELECT * FROM `users` WHERE `login` = :login");
$stmt->execute(['login' => $_POST['login']]);
if (!$stmt->rowCount()) {
    print_r('Пользователь с такими данными не зарегистрирован');
    die;
}
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Проверяем пароль
if (password_verify($_POST['password'], $user['password'])) {
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
    die;
}
