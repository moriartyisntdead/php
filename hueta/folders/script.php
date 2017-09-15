<?php

$host = 'www.wuxiancheng.cn';
echo `ping -n 3 {$host}`;

$path = '../../';

//var_dump(files_count($path));

function files_count($path){
    if(!file_exists($path)){
        return 'Folder not exist';
    } else {
        return scandir($path);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .cbalink{
            display: none;
        }
    </style>
</head>
<body>

</body>
</html>
