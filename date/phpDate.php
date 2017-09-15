<?php

/***
 * Class DateObj
 *
 * calcSeconds("time") -> считает количество секунд во времени
 * calcSeconds("day") ->кол-во секунд время+день
 * calcSeconds("month") ->кол-во секунд время+день+месяц
 * calcSeconds("year") ->кол-во секунд время+день+месяц+год

 * такие же методы calcMinutes, calcDays, calcMonths, calcWeeks
 */

class DateObj{

    var $date;
    var $day;
    var $month;
    var $year;
    var $time = 'Время не указано';
    var $hours = 'Часы не указаны';
    var $minutes = 'Минуты не указаны';
    var $seconds = 'Секунды не указаны';

    function __construct($date){
        $date = str_replace('/', '-', $date);
        $date = str_replace('.', '-', $date);

        if (strlen($date) > 10){
            $dateAndTime = explode(' ', $date);
            $this->checkDate($dateAndTime[0]);
            $this->checkTime($dateAndTime[1]);
        } else $this->checkDate($date);
    }

    function getDay(){
        if ($this->day > 31){
            return 'День введен некорректно';
        } else return $this->day;
    }

    function getMonth(){
        if ($this->month > 12){
            return 'Месяц введен некорректно';
        } else return $this->month;
    }

    function getYear(){
        return $this->year;
    }

    function getTime(){
        return $this->time;
    }

    function getHours(){
        if ($this->hours > 23){
            return 'Часы введены некорректно';
        } else return $this->hours;
    }

    function getMinutes(){
        if ($this->minutes > 59){
            return 'Минуты введены некорректно';
        } else return $this->minutes;
    }

    function getSeconds(){
        if ($this->seconds > 59){
            return 'Секунды введены некорректно';
        } else return $this->seconds;
    }

    private function checkDate($data){
        $array = explode("-", $data);
        if(count($array) < 3) exit;
        if(strlen($array[0]) == 4){
            $this->day = $array[2];
            $this->month = $array[1];
            $this->year = $array[0];
        } elseif (strlen($array[2]) == 4){
            $this->day = $array[0];
            $this->month = $array[1];
            $this->year = $array[2];
        } else{
            exit;
        }
    }

    private function checkTime($data){
        $time = explode(':', $data);
        switch (count($time)){
            case 2:
                $this->hours = $time[0];
                $this->minutes = $time[1];
                $this->seconds = '00';
                $this->time = $data;
                break;
            case 3:
                $this->hours = $time[0];
                $this->minutes = $time[1];
                $this->seconds = $time[2];
                $this->time = $data;
                break;
            default:
                var_dump($time);
                $this->time = "Время введено неправильно";
        }
    }
}

$type = $_POST['type'];
$date = $_POST['date'];

$object = new DateObj($date);
$result;
$type1;

switch ($type){
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
    case "time":
        $result = $object->getTime();
        $type1 = 'getTime()';
        break;
    case "hours":
        $result = $object->getHours();
        $type1 = 'getTime()';
        break;
    case "minutes":
        $result = $object->getMinutes();
        $type1 = 'getTime()';
        break;
    case "seconds":
        $result = $object->getSeconds();
        $type1 = 'getTime()';
        break;
}
echo json_encode(['type' => $type1, 'date' => $date, 'result' => $result]);

?>