<?php

class DateObj{

    var $date;
    var $day;
    var $month;
    var $year;

    function __construct($date){
        $this->checkDate($date);
    }

    function getDay(){
        echo $this->day;
    }

    function getMonth(){
        echo $this->month;
    }

    function getYear(){
        echo $this->year;
    }

    function setDate($date){
        $this->checkDate($date);
    }

    function consoleLog($qwerty){
         echo '<script>console.log("' .$qwerty . '");</script>';

    }

    private function checkDate($date){
        if (preg_match('/^([0-9]{1,2})-([0-9]{1,2})-([0-9]{4})$/', $date, $matches) &&
            $matches[1] <= 31 && $matches[2] <= 12){
            if (strlen($matches[1]) == 1){
                $matches[1] = 0 . $matches[1];
                $matches[0] = $matches[1] . '-' . $matches[2] . '-' . $matches[3];
            }
            if (strlen($matches[2]) == 1){
                $matches[2] = 0 . $matches[2];
                $matches[0] = $matches[1] . '-' . $matches[2] . '-' . $matches[3];
            }
            $this->date = $matches[0];
            $this->day = $matches[1];
            $this->month = $matches[2];
            $this->year = $matches[3];
        } elseif (preg_match('/^([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})$/', $date, $matches) &&
            $matches[2] <= 12 && $matches[3] <= 31){
            if (strlen($matches[2]) == 1){
                $matches[2] = 0 . $matches[2];
                $matches[0] = $matches[1] . '-' . $matches[2] . '-' . $matches[3];
            }
            if (strlen($matches[3]) == 1){
                $matches[3] = 0 . $matches[3];
                $matches[0] = $matches[1] . '-' . $matches[2] . '-' . $matches[3];
            }
            $this->date = $matches[0];
            $this->day = $matches[3];
            $this->month = $matches[2];
            $this->year = $matches[1];
        } else echo "Date isn't valid";
    }

}

$type = $_POST['type'];
$date = $_POST['date'];

$object = new DateObj($date);
$result;

switch ($type){
    case "day":
        $result = $object->getDay();
        break;
}
echo json_encode($result);
/*//$test = new DateObj('5-9-2017');
$test = new DateObj('2017-9-5');
echo  "Today " . $test->date;
echo  "<br> The day is " . $test->day;
echo  "<br> The month is " . $test->month;
echo  "<br> The year is " . $test->year;*/

?>

<!--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .cbalink {
            display: none;
        }
    </style>
</head>
<body>

</body>
</html>-->
