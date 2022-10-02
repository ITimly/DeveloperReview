<?php
	require_once('connect.php');
	$_COOKIE['original_form']++;
    $_COOKIE['original_form'] = $_COOKIE['original_form'] % 2;
    setcookie('original_form', $_COOKIE['original_form']);
    header('Location: /php/index.php');
?>