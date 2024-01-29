<?php
require_once '../boot.php';

session_start();

//id пользователя отправившего форму
$user_id = $_SESSION["user_id"];

$stmt = pdo()->prepare("
    INSERT INTO feedback (`user_id`,`text`, `large_amount_text`, `active_radio`, `checkboxes`, `select_list`)
    VALUES ($user_id, :text, :large_amount_text, :active_radio, :checkboxes, :select_list)
");

$stmt->execute([
    'text' => $_POST[htmlspecialchars('text')],
    'large_amount_text' => $_POST[htmlspecialchars('large_amount_text')],
    'active_radio' => $_POST['active_radio'],
    'checkboxes' => implode(', ', $_POST['checkboxes']),
    'select_list' => $_POST['select_list'],
]);

print_r("Форма усмешно отправлена");

header('Location: ../feedbackForm.php');