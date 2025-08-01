<?php
    if(isset($_POST['btnLogin'])) //login request
    {
        $email = $_POST["email"]; //value of name attribute in the form control
        $password = $_POST["password"];

        $hashCode = "$2y$10\$MOD.cgQQ79KSB2FjL82dX.NfbphQRz.15YGokHDEGCWRPVir24mo.";

        if(password_verify($password, $hashCode))// plain text, hash code
        {
            echo "Login Success!";
        }else{
            echo "Login Fail!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log</title>

<!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php 
                require_once "navigation.php";  //calling the navigation 
            ?>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="login.php" method="post" class="form mt-5">
                    <fieldset>
                        <legend>Admin Login</legend>

                        <div class="mb-2">
                            <label for="" class="form-lable">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label for=""  class="form-lable">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary mt-2" name="btnLogin">
                            Login
                        </button>

                    </fieldset>
                </form>
            </div>
        </div>

    </div>
</body>
</html>