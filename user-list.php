<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <?php
        include_once "./includes/style.php";
    ?>
</head>
<body>
    <?php
        include_once "./includes/navbar.php";
        require_once "./connections/connection.php";
    ?>
    <a href="./register.php">Add New</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql="SELECT * FROM users;";//select statement
                $stmt=$connection->query($sql);//call exec() of pdo object
                while($r=$stmt->fetch(PDO::FETCH_NUM)){
                   
            ?>
            <tr>
                <td><?= $r[0]  ?></td>
                <td><?= $r[1]  ?></td>
                <td><?= $r[2]  ?></td>
                <td><?= $r[3]  ?></td>
            </tr>
            <?php  }?>
            <?php
                $sql1="SELECT * FROM users;";//select statement
                $stmt1=$connection->query($sql1);//call exec() of pdo object
                $rows=$stmt1->fetchAll(PDO::FETCH_NUM);
            foreach($rows as $row):
            ?>
                <tr>
                    <?php foreach($row as $r):?>
                        <td><?= $r  ?></td>
                    <?php endforeach;  ?>
                </tr>
            <?php endforeach;  ?>
        </tbody>
    </table>
</body>
</html>


<?php

echo "<pre>";
print_r($_GET);
echo "</pre>";