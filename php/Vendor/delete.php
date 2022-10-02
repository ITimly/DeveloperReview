<?php
    require_once '../connect.php';
    $id = $_GET['id'];
    mysqli_query($connect, "delete from `user_call_form` where `user_call_form`.`id` = '$id'");
    $user_count = mysqli_query($connect, "select count(id) as userCount from `user_call_form`")->fetch_assoc()['userCount'];
    $user_id = 1;
    for ($i = 1; $i <= $user_count; $i++)
    {
        $min_id = mysqli_query($connect, "select min(`id`) as minID from `user_call_form` where `id` >= '$user_id'")->fetch_assoc()['minID'];
        mysqli_query($connect, "update `user_call_form` set `id` = '$i' where `id` = '$min_id'");
        $user_id = $min_id + 1;
    }
    header('Location: /php/index.php');
?>