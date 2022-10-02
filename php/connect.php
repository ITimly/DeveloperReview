<?php
$connect = mysqli_connect('localhost', 'mysql', 'mysql', 'Timly');
    
    if(!$connect)
    {
        die('Error connect to database!');
    }
?>