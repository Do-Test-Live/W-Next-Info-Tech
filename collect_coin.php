<?php
session_start();
include('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");
$today_date = date("Y-m-d");
if (isset($_POST['claimCoin'])) {

    $row = $db_handle->numRows("SELECT * FROM usercoin where user_id={$_SESSION['userid']} and date='$today_date'");
    if ($row == 0) {
        $insert = $db_handle->insertQuery("INSERT INTO `usercoin`( `user_id`, `coin`, `date`) VALUES ('{$_SESSION['userid']}','1000','$today_date')");
        echo "<script>
                alert('Coin Claim Successful');
                window.location.href='profile.php';
                </script>";
    }
}

