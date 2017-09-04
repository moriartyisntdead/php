<?php
if ($_POST['data'] && $_POST['number']) {
    echo("There is " . substr_count($_POST['data'], $_POST['number']) . " occurrences of number " . $_POST['number'] . " in " . $_POST['data']);
} else echo "Something went wrong.";
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <style>
        .cbalink {
            display: none;
        }
    </style>
</head>
<body>

</body>
</html>
