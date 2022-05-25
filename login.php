<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
        include_once "./includes/style.php";
    ?>
</head>
<body>
    <?php
        include_once "./includes/navbar.php";
        require_once "./login.include.php";
    ?>
    
    <div class="container mt-2">
    <form action="<?=   $_SERVER['PHP_SELF']   ?>" method="POST">
        <div class="card">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
            <div class="mb-2">
                    <label for="username">User Name</label>
                    <input type="text" name="username" id="username" class="form-control">
                    <span class="text-danger"><?php  echo empty($error_username)?"":$error_username ?></span>
                </div>
                <div class="mb-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <span class="text-danger"><?php  echo empty($error_password)?"":$error_password ?></span>
                </div>
            </div>
            <div class="card-footer">
            <div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    
</body>
</html>