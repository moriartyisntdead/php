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
        return $this->day;
    }

    function getMonth(){
        return $this->month;
    }

    function getYear(){
        return $this->year;
    }

    function setDate($date){
        $this->checkDate($date);
    }

    function consoleLog($qwerty){
         echo '<script>console.log("' .$qwerty . '");</script>';
    }

    function returnSmth($data){
        echo json_encode($data);
        exit;
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
        } else $this->returnSmth("Date isn't valid");
    }

}

$type = $_POST['type'];
$date = $_POST['date'];

$object = new DateObj($date);
$result;
$type1;

switch ($type) {
    case "day":
        $result = $object->getDay();
        $type1 = 'getDay()';
        break;
    case "month":
        $result = $object->getMonth();
        $type1 = 'getMonth()';
        break;
    case "year":
        $result = $object->getYear();
        $type1 = 'getYear()';
        break;
}
$object->returnSmth(['type'=> $type1, 'date' => $date, 'result' => $result]);

?>