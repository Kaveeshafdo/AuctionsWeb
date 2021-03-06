<?php
require_once('service/userservice.php');
require_once('database/dbconnect.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login_register.css" type="text/css">
    <title>login-register</title>
</head>

<body>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="login_register1.php" method="POST" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="uname" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pass" placeholder="Password">
                    </div>
                    <input type="submit" name="loginSubmit" value="Login" class="btn solid">
                    <div class="social-media">
                        <a href="https://www.facebook.com/" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/i/flow/login" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.google.com" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>


                <form action="login_register1.php" method="POST" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="uname" placeholder="Username" styele =" font-size: 1rem;">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="input-field">
                    <i class="fas fa-venus-mars"></i>
                        <select id="slct" name="genderSelect" required="required" class="selection" style= " border: none; background-color:transparent;">
                            <option value="X" disabled="disabled" selected="selected">Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            <option value="O">Other</option>
                        </select>
                    </div>
                    <div class="input-field">
                    <i class="fas fa-calendar-alt"></i>
                        <input type="date" name="dob" placeholder="Date Of Birth">
                    </div>
                    <div class="input-field">
                    <i class="fas fa-phone-alt"></i>
                        <input type="number" name="telNo" placeholder="Telephone No">
                    </div>
                    <div class="input-field">
                    <i class="fas fa-lock"></i>
                        <input type="password" name="pass" placeholder="Password">
                    </div>
                    <input type="submit" name="signSubmit" value="Sign up" class="btn solid">

                    <div class="social-media">
                        <a href="https://www.facebook.com/" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/i/flow/login" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.google.com" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="images/8.png" class="image" alt="">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of Us?</h3>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="images/9.png" class="image" alt="">
            </div>
        </div>
    </div>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['signSubmit'])) {
            $username = $_POST['uname'];
            $email = $_POST['email'];
            $genderSelect = $_POST['genderSelect'];
            $dateOfBirth = $_POST['dob'];
            $teleNo = $_POST['telNo'];
            $password = $_POST['pass'];

            $userService = new UserService();
            $userService->__constructWithoutId($username, $email, $password, $dateOfBirth, $teleNo, $genderSelect);
            $userService->insertUser();
            echo '<script> alert("Register Successfully"); </script>';
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['loginSubmit'])) {
            $username1 = $_POST['uname'];
            $password1 = $_POST['pass'];

            $db = new dbconnect();
            $result = $db->getfromdb("SELECT id,username,password FROM user WHERE username='$username1' && password='$password1'");

            if (mysqli_num_rows($result) > 0) {

                echo '<script> alert("Login Successfully"); </script>';
                echo "<script> window.location.href='index.php';
            </script>";
            } else if (mysqli_num_rows($result) == 0) {
                echo '<script> alert("Incorect User name or password"); </script>';
                echo "<script> window.location.href='login_register.php';</script>";
            }
        }
    }


    ?>

    <script src="js/script.js"></script>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>