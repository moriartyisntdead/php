<?php
$counter;
if (isset($_COOKIE['counter']) && is_int($_COOKIE['counter'])) {
    $counter = $_COOKIE['counter'];
} else $counter = 0;

echo gettype($_COOKIE['counter']);

$counter++;
setcookie('counter', $counter);
echo "Вы здесь были уже " . $counter . " раз. <br>";
$_COOKIE['last-visit'] = date('d.m.y');
echo "Последнее посещение сайта было " . $_COOKIE['last-visit'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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