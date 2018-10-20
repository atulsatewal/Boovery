<?php

function logger($user, $action, $diary_no)
{


    require '../secure/db_connect.php';
    require '../secure/config.php';

    $q = "INSERT INTO logs (user_name, action, diary_no) VALUES ( ?, ?, ?)";

    if ($stmt = $mysqli->prepare($q)) {
        $stmt->bind_param('sss', $user, $action, $diary_no);

        if (!$stmt->execute()) if (DEBUG) echo $stmt->error;

    } else if (DEBUG) echo $mysqli->error();

    return true;

}
