<?php

$degree = $_POST['degree'];
$hours = floor($degree * 12 / 360);
if ($hours == 0) $hours = 12;

echo json_encode(['degree' => $degree, 'hours' => $hours]);