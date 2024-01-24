<?php
require_once __DIR__ . '/boot.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="text-center justify-content-center">
<main>
    <?php if (!check_auth()) {
        return require './view/loginViewForm.php';
    } else {
        header('Location: ../feedbackForm.php');
    } ?>
</main>
</body>
</html>
