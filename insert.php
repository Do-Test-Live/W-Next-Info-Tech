<?php
session_start();
include('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

if (isset($_POST["addData"])) {

    $name = $db_handle->checkValue($_POST['name']);
    $email = $db_handle->checkValue($_POST['email']);
    $phone = $db_handle->checkValue($_POST['phone']);
    $reserve = $db_handle->checkValue($_POST['reserve']);

    $inserted_at = date("Y-m-d H:i:s");

    $insert = $db_handle->insertQuery("INSERT INTO `registration`(`name`, `email`, `phone`, `reserve`, `inserted_at`) VALUES ('$name','$email','$phone','$reserve','$inserted_at')");

    $backend_message = '';

    $i = 0;
    foreach ($_POST as $key => $value) {
        if ($i < count($_POST) - 1) {
            $backend_message .= htmlspecialchars($key) . ": " . htmlspecialchars($value) . "<br>";
        }
        $i++;
    }

    $email_to = $db_handle->notify_email();
    $subject = 'Email From NGT TECH';

    $headers = "From: NGT TECH <" . $db_handle->from_email() . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <p style='text-align: center;color:green;font-weight:bold'>New Member Info Data</p>   
                        
                            <p style='color:black'> " . $backend_message . "
                            </p>
                        </div>
                    </body>
                </html>
                ";

    if ($insert) {
        echo "<script>
                alert('Registration Successful');
                window.location.href='index';
                </script>";
    }
}

if (isset($_POST["signUp"])) {
    $username = $db_handle->checkValue($_POST['username']);
    $name = $db_handle->checkValue($_POST['name']);
    $email = $db_handle->checkValue($_POST['email']);
    $password = $db_handle->checkValue($_POST['password']);

    $inserted_at = date("Y-m-d H:i:s");

    $insert = $db_handle->insertQuery("INSERT INTO `user`(`name`, `email`, `username`, `password`, 
                   `inserted_at`) VALUES ('$name','$email','$username','$password','$inserted_at')");

    $backend_message = '';

    $i = 0;
    foreach ($_POST as $key => $value) {
        if ($i < count($_POST) - 1) {
            $backend_message .= htmlspecialchars($key) . ": " . htmlspecialchars($value) . "<br>";
        }
        $i++;
    }

    $email_to = $db_handle->notify_email();
    $subject = 'Email From NGT TECH';

    $headers = "From: NGT TECH <" . $db_handle->from_email() . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <p style='text-align: center;color:green;font-weight:bold'>New Member Info Data</p>   
                        
                            <p style='color:black'> " . $backend_message . "
                            </p>
                        </div>
                    </body>
                </html>
                ";

    if ($insert) {
        echo "<script>
                alert('Registration Successful');
                window.location.href='login.php';
                </script>";
    }

}


if (isset($_POST["updateProfile"])) {
    $name = $db_handle->checkValue($_POST['name']);

    $attach_files = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);

        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (
            $file_type != "jpg" && $file_type != "png" && $file_type != "jpeg"
            && $file_type != "gif"
        ) {
            $attach_files = '';
        } else {
            move_uploaded_file($file_tmp, "assets/images/avatar/" . $file_name);
            $arr[] = "assets/images/avatar/" . $file_name;
        }
        $attach_files = implode(',', $arr);

        $update = $db_handle->insertQuery("UPDATE `user` SET `name`='$name',`image`='$attach_files' WHERE id={$_SESSION['userid']}");
    } else {
        $attach_files = '';

        $update = $db_handle->insertQuery("UPDATE `user` SET `name`='$name' WHERE id={$_SESSION['userid']}");
    }

    echo "<script>
                alert('Update Successful');
                window.location.href='profile.php';
                </script>";
}
