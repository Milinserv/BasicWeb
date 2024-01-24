<head>
    <title>Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="text-center justify-content-center">
<form class="col-md-4 mt-xl-5 offset-md-4" method="post" action="../src/registration.php">
    <h1 class="h3 mb-5 fw-normal">Регистрация</h1>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" name="login" placeholder="name@example.com">
        <label for="floatingInput">Логин</label>
    </div>

    <div class="form-floating">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <label for="floatingPassword">Пароль</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary mt-4 mb-4" type="submit">Регистрация</button>
    <p>
        <a href="../view/loginViewForm.php"
           class="link-success link-offset-2
           link-underline-opacity-25
           link-underline-opacity-100-hover">Войти ?</a>
    </p>
</form>
</body>