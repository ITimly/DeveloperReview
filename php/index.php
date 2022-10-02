<?php
    session_start();
    require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Products</title>
    </head>
    <style>
        a.work-btn{
            text-decoration: none;
            color: whitesmoke;
        }
        button.quit-btn{
            background-color: #606060; 
        }
        div{
            display: inline-block;
        }
        .container{
            display: flex;
            justify-content: space-between;
            vertical-align: top;
        }
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
    <div class="container">
        <div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>APPLICATION</th>
                    <th>THE NOTE</th>
                    <th><a href="filter.php" class="work-btn">TIME</a></th>
                </tr>
                <?php
                $test = $_COOKIE['original_form']%2;
                    if($test == 0)
                        {
                            $products = mysqli_query($connect, "select * from `user_call_form` order by `date` desc");
                        }
                    else
                        {
                            $products = mysqli_query($connect, "select * from `user_call_form` order by `date`");
                        }
                    $products = mysqli_fetch_all($products);
                    foreach($products as $product){
                ?>
                <tr>
                    <td><?=$product[0]?></td>
                    <td><?=$product[1]?></td>
                    <td><?=$product[2]?></td>
                    <td><?=$product[3]?></td>
                    <td><?=$product[4]?></td>
                    <td><?=$product[5]?></td>
                    <td><?=$product[6]?></td>
                    <td><a href="update.php?id=<?= $product[0] ?>">Изменить заметку</a></td>
                    <td><a href="Vendor/delete.php?id=<?= $product[0] ?>">Удалить</a></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
        <div>
            <button type="button" class="btn quit-btn"><a href="exit.php" class="work-btn">Выйти</a></button>
        </div>
    </div>
    </body>
</html>