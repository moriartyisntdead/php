<?php
session_start();
$_SESSION['pages'] = array($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Name</title>
    <style>
        .cbalink {
            display: none;
        }
    </style>
</head>
<body>
<form action="page-2.php" method="post">
    <input type="text" name="firstName" value="Artem">
    <button type="submit">Next</button>
</form>
</body>
</html>