<?php
    session_start();
    require_once 'connect.php';
    $verification_user_name = false;
    $original_form = false;
    setcookie('authorized_user', $verification_user_name);
    setcookie('original_form', $original_form);
    header('Location: ../HomePage.html');
?>