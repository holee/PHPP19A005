<?php
    require_once "./connections/connection.php";
    $error_username=$error_email=$error_password="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            
            if(empty($_POST['username'])){
                $error_username="please input username.";
            }else{
                if(strlen($_POST["username"])<4){
                    $error_username="username must atleast 4 charachters.";
                }
            }

            if(empty($_POST['email'])){
                $error_email="please input your email.";
            }

            if(empty($_POST['password'])){
                $error_password="please input your password.";
            }else{
                if(strlen($_POST['password'])<5){
                    $error_password="password must be at least 5 characters.";
                }
            }

            if((empty($error_username)) && (empty($error_email)) && (empty($error_password))){
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $email=$_POST["email"];
                    $userid=$_POST["id"];
                    $confirm_password=$_POST['confirm_password'];
                    if($password==$confirm_password){
                        $passord_encrypt=password_hash($password,PASSWORD_DEFAULT);
                        $sql="UPDATE users SET username=:username,`password`=:password,email=:email WHERE id=:id;";
                        if($statement=$connection->prepare($sql)){
                            
                            if($statement->execute([
                                                    ':id'=>$userid,
                                                    ":username"=>$username,
                                                    ':password'=> $passord_encrypt,
                                                    ':email'=>$email])){
                                            echo "updated";              
                                            header("location:user-list.php");
                                            exit;
                            }else{
                                echo "cannot update";
                            }
                        }else{
                            echo "cannot register new user.";
                        }
                    }else{
                        $error_password="your password is not match.";
                    }

            }

        }
?>
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
        $sql="SELECT * FROM users WHERE id=?";
        if($stmt=$connection->prepare( $sql)){
            $id=$_GET['userid']??0;
            $stmt->execute([$id]);
            $result=$stmt->fetch(PDO::FETCH_ASSOC);
        }
    ?>
<div class="container mt-2">
    <form action="<? echo $_SERVER['PHP_SELF']  ?>" method="POST">
        <input type="hidden" name="id" value="<?=  $result['id'] ?>"
        <div class="card">
            <div class="card-header">
                <strong>New User</strong>
            </div>
            <div class="card-body">
                <div class="mb-2">
                    <label for="username">User Name</label>
                    <input type="text" name="username" id="username" 
                            value="<?=  $result['username']??'' ?>"
                           class="form-control">
                    <span class="text-danger"><?php  echo empty($error_username)?"":$error_username ?></span>
                </div>
                <div class="mb-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" 
                            value="<?=  $result['email']??'' ?>"
                            id="email" class="form-control">
                    <span class="text-danger"><?php  echo empty($error_email)?"":$error_email ?></span>
                </div>
                <div class="mb-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <span class="text-danger"><?php  echo empty($error_password)?"":$error_password ?></span>
                </div>
                <div class="mb-2">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                </div>
            </div>
            <div class="card-footer">
                <div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
        </form>
    </div>

</body>
</html>
