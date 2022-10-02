<?php
    require_once '../connect.php';
    $name = $_POST['first_nameX']." ".$_POST['last_nameX'];
    $email = $_POST['emailX'];
    $phone = $_POST['phoneX'];
    $application = $_POST['applicationX'];
    $max_id = mysqli_query($connect, "select max(id)+1 as maxID from `user_call_form`")->fetch_assoc()['maxID'];
    mysqli_query($connect, "insert into `user_call_form` (`id`, `name`, `email`, `phone`, `user_questions`) values ('$max_id', '$name', '$email', '$phone', '$application')");
    header('Location: /');
?>