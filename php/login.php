<?php
    require_once 'connect.php';
    $verification_user = mysqli_query($connect, "select * from `verification`");
    $verification_user = mysqli_fetch_all($verification_user);
    foreach ($verification_user as $info) {
        $full_info += "".$info[0];
        $full_info += "".$info[1];
        $full_info += "".$info[2];
        $full_info += "".$info[3];
    }
    echo $full_info;
?>