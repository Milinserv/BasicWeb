<head>
    <title>Форма обратной связи</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="col-md-4 mt-xl-5 offset-md-4">
<div class="row">
    <div class="col-6">
        <h1 class="h3 mb-5 fw-normal">Форма обратной связи</h1>
    </div>
    <form method="post" class="col" action="src/actionsButtons/exitButton.php">
        <button class="btn btn-danger" type="submit" name="exit">Выйти</button>
    </form>
</div>
<div class="container-contact2">
    <form method="post" action="./src/sendFeedbackForm.php">
        <div class="form-group mb-3">
            <label for="exampleFormControlInput1">Текстовое поле</label>
            <input type="text" class="form-control" name="text" placeholder="text">
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlTextarea1">Многострочное текстовое поле</label>
            <textarea class="form-control" name="largeAmountText" rows="3"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlTextarea1">Радиокнопки</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="active_radio" value="true">
                <label class="form-check-label" for="flexRadioDefault1">
                    True radio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="active_radio" value="false">
                <label class="form-check-label" for="flexRadioDefault2">
                    False radio
                </label>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlTextarea1">Флажки</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="checkboxes[default]" value="default">
                <label class="form-check-label" for="flexCheckDefault">
                    Default checkbox
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="checkboxes[checked]" value="checked">
                <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                </label>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlSelect1">Выпадающий список</label>
            <select class="form-control" name="select_list">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <div class="flex">
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </div>
    </form>
    <form method="post" action="src/actionsButtons/resetButton.php">
        <button type="submit" class="btn btn-secondary" name="reset">Сброс</button>
    </form>
</div>
</body>