<?php
    require_once '../connect.php';
    $id = $_POST['id'];
    $note = $_POST['note'];
    mysqli_query($connect, "update `user_call_form` set `note` = '$note' where `user_call_form`.`id` = '$id'");
    header('Location: /php/index.php');
?>