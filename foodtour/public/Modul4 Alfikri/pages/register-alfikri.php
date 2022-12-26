<?php

include '../config/register.php';

session_start();
$error = '';
$validate = '';

if (isset($_POST['submit'])) {

    $username = stripslashes($_POST['username']);

    $username = mysqli_real_escape_string($connect, $username);
    $name = stripslashes($_POST['name']);
    $name = mysqli_real_escape_string($connect, $name);
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($connect, $email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($connect, $password);
    $repass = stripslashes($_POST['repassword']);
    $repass = mysqli_real_escape_string($connect, $repass);

    if (!empty(trim($name)) && !empty(trim($username)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($repass))) {

        if ($password == $repass) {

            if (cek_nama($name, $connect) == 0) {

                $pass = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO user_alfikri (username,name,email, password ) VALUES ('$username','$name','$email','$pass')";
                $result = mysqli_query($connect, $query);

                if ($result) {
                    $_SESSION['username'] = $username;

                    header('Location: login-alfikri.php');

                } else {
                    $error = 'Register User Gagal !!';
                }
            } else {
                $error = 'Username sudah terdaftar !!';
            }
        } else {
            $validate = 'Password tidak sama !!';
        }

    } else {
        $error = 'Data tidak boleh kosong !!';
    }
}

function cek_nama($username, $connect)
{
    $nama = mysqli_real_escape_string($connect, $username);
    $query = "SELECT * FROM user_alfikri WHERE username = '$nama'";
    if ($result = mysqli_query($connect, $query))
        return mysqli_num_rows($result);
}
?>


<!doctype html>
<html lang="en">

<head>
    <title>Showroom alfikri</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/style.css">
</head>

<body>
            <div class="container-fluid mb-4">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-4">
                        <form class="form-container" action="register-alfikri.php" method="POST">
                            <h4 class="text-center font-weight-bold"> REGISTER </h4>
                            <?php if ($error != '') { ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $error; ?>
                            </div>
                            <?php } ?>
                            <br>
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Masukkan Nama">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="InputEmail">Alamat Email</label>
                                <input type="email" class="form-control" id="InputEmail" name="email"
                                    aria-describeby="emailHelp" placeholder="Masukkan email">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Masukkan username">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="InputPassword">Password</label>
                                <input type="password" class="form-control" id="InputPassword" name="password"
                                    placeholder="Password">
                                <?php if ($validate != '') { ?>
                                <p class="text-danger">
                                    <?= $validate; ?>
                                </p>
                                <?php } ?>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="InputPassword">Re-Password</label>
                                <input type="password" class="form-control" id="InputRePassword"
                                    name="repassword" placeholder="Re-Password">
                                <?php if ($validate != '') { ?>
                                <p class="text-danger">
                                    <?= $validate; ?>
                                </p>
                                <?php } ?>
                            </div>
                            <br>
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                            <div class="form-footer mt-2">
                                <p> Sudah punya account? <a href="login-alfikri.php">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </body>