<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    <style>
        .cbalink {
            display: none;
        }

        .task-form {
            margin: 0 auto;
            max-width: 200px;
            text-align: center;
        }

        .task-form input[type="text"] {
            margin-bottom: 15px;
            width: 85%;
        }

        .task-form button {
            width: 85%;
        }
    </style>
</head>
<body>

</body>
</html>

<?php
$menu = array(
    'Home' => 'test.php',
    'Articles' => 'index.html',
    'Menu' => 'tasks/menu.php'
);
foreach ($menu as $key => $value) {
    echo "<a href='$value'>$key</a> <br>";
}

$cols = 5;
$rows = 8;
?>
<table>
    <?php
    for ($i = 1; $i <= $rows; $i++) {
        echo("<tr>");
        for ($j = 1; $j <= $cols; $j++) {
            echo "<td>", $i * $j, "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
<form action="../test.php" method="post">
    <div class="task-form">
        <input type="text" placeholder="Enter data" name='data' value="1234567896562676">
        <input type="text" placeholder="Enter required number" name="number" value="6">
        <button type="submit">Search</button>
    </div>
</form>