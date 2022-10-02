<?php
    require_once 'connect.php';
    $user_id = $_GET['id'];
    $user = mysqli_query($connect, "select name, note from `user_call_form` where `id` = '$user_id'");
    $user = mysqli_fetch_all($user);
    foreach ($user as $user_info) {
        $user_name = $user_info[0];
        $user_questions = $user_info[1];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Update Note</title>
    </head>
    <style>
        th, td{
            padding: 10px;
        }
        th{
            background: #606060;
            color: whitesmoke;
        }
        td{
            background: #b5b5b5;
        }
    </style>
    <body>
        <h3>Update Note</h3>
        <form action="Vendor/update.php" method="post">
            <input type="hidden" name="id" value="<?=$user_id?>">
            <p><b>User name</b></p>
            <p><?= $user_name ?></p>
            <p><b>Application</b></p>
            <textarea name="note"><?= $user_questions ?></textarea><br><br>
            <button type="submit">Update</button>
        </form>
    </body>
</html>