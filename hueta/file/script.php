<?php

define("FILE_NAME", "document.txt");

if (isset($_POST['fname'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    if (!$fname && !$lname) {
        echo 'Oops, something went wrong...';
    } else {
        echo 'Name = ' . $fname . '<br> Surname = ' . $lname . '<br> Everything is okay';
        $dataToWrite = 'Name = ' . $fname . ', Surname = ' . $lname;
        $fp = fopen(FILE_NAME, "a");
        $success = fwrite($fp, $dataToWrite . PHP_EOL);
        if ($success) {
            echo '<br>Success! Data has been written';
            header("Location: script.php");
        } else echo '<br>Oops! Data hasn\'t been written';
        fclose($fp);
    }
} else {
    echo <<<HTML
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

        input[type="text"], #btn {
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border-radius: 5px;
            background-color: white;
        }
    </style>
    <script src="../../jquery-3.2.1.min.js"></script>
</head>
<body>
<div class="wrapper">
    <form action="script.php" method="post">
        <div>
            <label for="fname">Enter name:</label>
            <input type="text" id="fname" name="fname" value="Tony">
        </div>
        <div>
            <label for="lname">Enter surname:</label>
            <input type="text" id="lname" name="lname" value="Stark">
        </div>
        <button id="btn">Send</button>
        <pre></pre>
    </form>
</div>
<script>

</script>
</body>
</html>
HTML;
}


if (file_exists(FILE_NAME)) {
    $fp = fopen(FILE_NAME, "a");
    $document_array = file(FILE_NAME);
    for ($i = 0; $i < count($document_array); $i++) {
        echo $i . ' : ' . htmlspecialchars($document_array[$i]) . '<br>';
    }
    echo filesize(FILE_NAME);
} else echo 'File not exists';
?>