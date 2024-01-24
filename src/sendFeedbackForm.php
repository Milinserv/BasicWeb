<?php
require_once '../boot.php';

session_start();

//id пользователя отправившего форму
$user_id = $_SESSION["user_id"];

$stmt = pdo()->prepare("
    INSERT INTO feedback (`user_id`,`text`, `longtext`, `active_radio`, `checkboxes`, `select_list`)
    VALUES ($user_id, :text, :longtext, :active_radio, :checkboxes, :select_list)
");

$stmt->execute([
    'text' => $_POST['text'],
    'longtext' => $_POST['longtext'],
    'active_radio' => $_POST['active_radio'],
    'checkboxes' => $_POST['checkboxes'],
    'select_list' => $_POST['select_list'],
]);

print_r("Форма усмешно отправлена");

header('Location: ../feedbackForm.php');