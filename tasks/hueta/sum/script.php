<?php

$number = $_POST['number'];
$result = 0;
for($i = 0; $i < strlen($number); $i++)
    $result += $number[$i];
echo json_encode(['result' => $result]);