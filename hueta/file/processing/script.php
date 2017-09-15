<?php

if ($_FILES['file']['size'] > 1048576)
    echo '<br> Error! File is too large.';
elseif (file_exists('MyDir')) {
    if(move_uploaded_file($_FILES['file']['tmp_name'],'MyDir/' . $_FILES['file']['name'])){
        echo '<br> File was successfully loaded';
    } else echo '<br> Oops. Something went wrong';
} else {
    mkdir('MyDir', 0777, true);
}