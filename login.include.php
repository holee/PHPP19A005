<?php
            require_once "./connections/connection.php";

            $error_username="";
            $error_password="";

            if($_SERVER["REQUEST_METHOD"]=="POST"){

                if(empty($_POST['username'])){
                    $error_username="please input username.";
                }
                if(empty($_POST['password'])){
                    $error_password="please input your password.";
                }

                if(empty($error_password) && empty($error_username)){
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $sql="SELECT password,username FROM users WHERE username='$username';";                    
                    $query=$connection->query($sql);
                    if($query){
                       if($row=$query->fetch()){
                            if(password_verify($password,$row['password'])){
                                 echo "<script>window.location.href='index.php'</script>";
                            }else{
                                $error_password="invalide password.";
                            }
                       }else{
                        $error_username="invalid username.";
                       }
                    }else{
                        echo "invalid username.";
                    }
                }
            }
    ?>