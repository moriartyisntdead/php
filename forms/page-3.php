<?php
session_start();
$_SESSION['lastName'] = $_POST['lastName'];
array_push($_SESSION['pages'], $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Age</title>
    <style>
        .cbalink {
            display: none;
        }
    </style>
</head>
<body>
<form action="test.php" method="post">
    <input type="text" name="age" value="21">
    <button type="submit">Age</button>
</form>
</body>
</html>