<?php
if (isset($_POST["exit"])) {
    if (isset($_COOKIE['PHPSESSID'])) {
        unset($_COOKIE['PHPSESSID']);

        setcookie('PHPSESSID', null, -1, '/');
        sleep(2);
        header('Location: ../../view/loginViewForm.php');
        exit();
    }
}
