<?php
if($_GET['module'] != 'control') {
    exit("lol");
}

var_dump($_COOKIE);
echo '<br>----------------------------------------------------------------------<br>';
var_dump($_SESSION);
echo '<br>----------------------------------------------------------------------<br>';

echo '<button type="submit">Clear cookies</button> <button type="submit">Clear cookies</button>';