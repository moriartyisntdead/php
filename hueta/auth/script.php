<?php

$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$msg;

if (isset($login, $password, $email)) {
    $user = parse_ini_file('config.ini', true);
    foreach ($user as $item => $value) {
        if($login == $user[$item]['login']
            && $password == $user[$item]['password']
            && $email == $user[$item]['email']){
            setcookie('specialkey', '1a2bc8fu7l6m4dn5', time()+3600);
            setcookie('username', $user[$item]['login']);
            header("Location: script.php");
            break;
        } else $msg = 'User not exist.';
    }
} elseif(isset($_POST['exit'])){
    setcookie('specialkey', '');
    header("Location: script.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .cbalink {
            display: none;
        }

        .wrapper {
            margin: 0 auto;
            width: 250px;
            text-align: center;
            padding-top: 150px;
        }

        input, button {
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border-radius: 5px;
            background-color: white;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <form action="script.php" method="post">
        <?php
        if (isset($_COOKIE['specialkey'])){
            echo 'Hello, ' . $_COOKIE['username'] .
                  '<input required name="exit" type="hidden">
                  <button  type="submit">Quit</button>';
        }
        else {
            echo '<input required name="login" type="text" placeholder="Enter login" value="login1">
                  <input required name="password" type="password" placeholder="Enter password" value="1111">
                  <input required name="email" type="email" placeholder="Enter email" value="test@test.test">
                  <button type="submit">Login</button>';
        }
        ?>
    </form>
</div>
</body>
</html>