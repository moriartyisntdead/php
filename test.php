<?php
if ($_POST['data'] && $_POST['number']) {
    echo json_encode("There is " . substr_count($_POST['data'], $_POST['number']) . " occurrences of number " . $_POST['number'] . " in " . $_POST['data']);
} else echo json_encode("Something went wrong.");
exit();
?>
