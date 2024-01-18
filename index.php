<?php
require_once __DIR__ . '/boot.php';

$user = null;

if (check_auth()) {
    // Получим данные пользователя по сохранённому идентификатору
    $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `id` = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Войти</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="text-center justify-content-center">
<main>
    <?php if ($user) { ?>
        <form class="col-md-4 mt-xl-5 offset-md-4" method="post" action="src/login.php">
            <h1 class="h3 mb-5 fw-normal">Добрый день !</h1>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" placeholder="name@example.com">
                <label for="floatingInput">Логин</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" placeholder="Password">
                <label for="floatingPassword">Пароль</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-4 mb-4" type="submit">Войти</button>

            <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
               href="/">Регистрация</a>
        </form>
    <?php } else { ?>
        <form class="col-md-4 mt-xl-5 offset-md-4" method="post" action="src/login.php">
            <h1 class="h3 mb-5 fw-normal">Добрый день !</h1>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" placeholder="name@example.com">
                <label for="floatingInput">Логин</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" placeholder="Password">
                <label for="floatingPassword">Пароль</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-4 mb-4" type="submit">Войти</button>

            <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
               href="/">Регистрация</a>
        </form>
    <?php } ?>
</main>
</body>
</html>
