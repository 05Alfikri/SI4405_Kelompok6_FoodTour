<?php

require('../config/register.php');

session_start();
$error = '';
$validate = '';

if( isset($_SESSION['username']) ) header('Location: login-alfikri.php');

if( isset($_POST['submit']) ){
         
        
        $username = stripslashes($_POST['username']);
        
        $username = mysqli_real_escape_string($connect, $username);
         
        $password = stripslashes($_POST['password']);
      
        $password = mysqli_real_escape_string($connect, $password);
        
      
        if(!empty(trim($username)) && !empty(trim($password))){
         
            $query      = "SELECT * FROM user_alfikri WHERE username = '$username'";
            $result     = mysqli_query($connect, $query);
            $rows       = mysqli_num_rows($result);
            if ($rows != 0) {
                $hash   = mysqli_fetch_assoc($result)['password'];
                if(password_verify($password, $hash)){
                    $_SESSION['username'] = $username;
                
                    header('Location: home-alfikri.php');
                }
                             
            
            } else {
                $error =  'Register User Gagal !!';
            }
             
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" co$connecttent="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="container-fluid mb-4">
           
            <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4">
                <form class="form-container" action="login-alfikri.php" method="POST">
                    <h4 class="text-center font-weight-bold"> Sign-In </h4>
                    <?php if($error != ''){ ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password">
                        <?php if($validate != '') {?>
                            <p class="text-danger"><?= $validate; ?></p>
                        <?php }?>
                    </div>
                  
                    <button type="submit" name="submit" class="btn btn-primary btn-block">LOGIN</button>
                    <div class="form-footer mt-2">
                        <p> Belum punya account? <a href="register-alfikri.php">Register</a></p>
                    </div>
                </form>
            </div>
            </div>
        </div>
   
</body>
</html>