<?php
session_start();
include('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");
$current_time = date("Y-m-d H:i:s");
$calculate_time = '';
$text = '';
$start_datetime = '';

if (date("H") >= 8) {
    $calculate_time = Date('Y-m-d 8:00:00', strtotime('+1 days'));

    $start_datetime = new DateTime($calculate_time);
    $diff = $start_datetime->diff(new DateTime($current_time));

    if ($diff->y != 0) {
        $text .= $diff->y . ' Y ';
    }

    if ($diff->m != 0) {
        $text .= $diff->m . ' M ';
    }

    if ($diff->d != 0) {
        $text .= $diff->d . ' d ';
    }


    $text .= $diff->h . ' h ';

    $text .= $diff->i . ' m ';

    $text .= $diff->s . ' s ';
} else {
    $calculate_time = Date('Y-m-d 8:00:00');

    $start_datetime = new DateTime($calculate_time);
    $diff = $start_datetime->diff(new DateTime($current_time));

    if ($diff->y != 0) {
        $text .= $diff->y . ' Y ';
    }

    if ($diff->m != 0) {
        $text .= $diff->m . ' M ';
    }

    if ($diff->d != 0) {
        $text .= $diff->d . ' d ';
    }


    $text .= $diff->h . ' h ';

    $text .= $diff->i . ' m ';

    $text .= $diff->s . ' s ';
}

$today_date = date("Y-m-d");

$row = $db_handle->numRows("SELECT * FROM usercoin where user_id={$_SESSION['userid']} and date='$today_date'");

if ($row == 0) {
    $text = "CLAIM NGT POINT";
    echo $text;
} else {
    echo $text;
}
