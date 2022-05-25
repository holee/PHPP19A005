<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include_once "./includes/style.php";
    ?>
</head>
<body>
    <h1>Login:<?php  echo ($_SESSION['username']??"") ?></h1>

    <?php

        $a=20;
        $b=30;
        $op="*";

        echo match($op){
            "+"=> $a + $b,
            "-"=> $a - $b,
            "*"=> $a * $b,
            "/"=> $a / $b,
            "%"=> $a % $b,
            default=>"Invalid operator."
        };


switch ($op) {
        case '+':
            echo $a + $b;
            break;
        case '-':
            echo $a + $b;
            break;
        case '*':
            echo $a * $b;
            break;
        case '/':
            echo $a / $b;
            break;
        case '%':
            echo $a % $b;
            break;
        default:
            echo "Invalid operator.";
            break;
}

 $roles=["user","admin","editor","mediator"];///index array

    ?>
<select name="role" class="form-select">
    <option value="" style="display: none;">Please your role</option>
    <?php  for($x=0;$x<count($roles);$x++): ?>
        <option><?=  $roles[$x]  ?></option>
    <?php endfor; ?>
</select>
<select name="role" class="form-select">
    <option value="" style="display: none;">Please your role</option>
    <?php 
        $x=0;  
        while($x<count($roles)): 
    ?>
        <option><?=  $roles[$x]  ?></option>
    <?php 
        $x++; 
        endwhile; 
    ?>
</select>

<?php
    $x=0;
    echo "<select name='role' class='form-select'>";
    do{
       echo "<option>".$roles[$x]."</option>";
       $x++;
    }while($x<count($roles));
    echo "</select>";

?>
</body>
</html>