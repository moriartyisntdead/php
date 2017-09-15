<?php
session_start();
$_SESSION['age'] = $_POST['age'];
array_push($_SESSION['pages'], $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo "Your name is " . $_SESSION['firstName'] . ", your surname is " . $_SESSION['lastName'] . ", your age is " . $_SESSION['age'] . "<br>";
for($i = 0; $i < count($_SESSION['pages']); $i++){
    echo "<pre>", $_SESSION['pages'][$i], "</pre>";
}
session_unset();
session_destroy();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cbalink {
            display: none;
        }
    </style>
</head>
<body>

</body>
</html>
