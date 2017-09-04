<?php
session_start();
$_SESSION['firstName'] = $_POST['firstName'];
array_push($_SESSION['pages'], $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Last Name</title>
    <style>
        .cbalink {
            display: none;
        }
    </style>
</head>
<body>
<form action="page-3.php" method="post">
    <input type="text" name="lastName" value="Ivasiuk">
    <button type="submit">Next</button>
</form>
</body>
</html>