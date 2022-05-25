<?php
require_once('service/userservice.php');
require_once('database/dbconnect.php');
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/stylelogin.css">

</head>

<body>
    <div class="container right-panel-active">
        <!-- Sign Up -->
        <div class="container__form container--signup">
            <form action="login_register.php" method="POST" class="form" id="form1">
                <h2 class="form__title">Sign Up</h2>
                <input type="text" name="uname" placeholder="Username" class="input" />
                <input type="email" name="email" placeholder="Email" class="input" />
                <label class="select" for="slct"></label>
                <select id="slct" name="genderSelect" required="required">
                    <option value="X" disabled="disabled" selected="selected">Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Other</option>
                </select>
               
                <input type="date" name="dob" placeholder="Date Of Birth" class="input " />
                <input type="number" name="telNo" placeholder="Telephone No" class="input " />
                <input type="password" name="pass" placeholder="Password" class="input " />
                <input name="signupBtn" type="submit" value="Sign Up" class="btn">
            </form>
        </div>
        <!-- Sign In -->
        <div class="container__form container--signin">

            <form action="" method="POST" class="form" id="form2">
                <h2 class="form__title">Sign In</h2>
                <input type="text" name="log_uname" placeholder="Username" class="input" />
                <input type="password" name="log_pass" placeholder="Password" class="input" />

                <p class="liw"> Log in with</p>
                <div class="icons">
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-skype"></ion-icon>
                    </a>
                </div>
                <input name="signinBtn" type="submit" value="Sign In" class="btn">

            </form>

        </div>
        <!-- Overlay -->
        <div class="container__overlay">
            <div class="overlay">
                <div class="overlay__panel overlay--left">
                    <button class="btn" id="signIn">Sign In</button>
                </div>
                <div class="overlay__panel overlay--right">
                    <button class="btn" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo '<script> alert("POST Successfully"); </script>';
        if (isset($_POST['signupBtn'])) {
            echo '<script> alert("Register Successfully"); </script>';
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

        if (isset($_POST['signinBtn'])) {
            $username1 = $_POST['log_uname'];
            $password1 = $_POST['log_pass'];
            echo '<script> alert("Login Successfully"); </script>';
            echo $username1;
            echo $password1;

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
    } else {
        echo '<script>alert("else");</script>';

    }

    ?>


    <script>
        const signInBtn = document.getElementById("signIn");
        const signUpBtn = document.getElementById("signUp");
        const fistForm = document.getElementById("form1");
        const secondForm = document.getElementById("form2");
        const container = document.querySelector(".container");
        signInBtn.addEventListener("click", () => {
            container.classList.remove("right-panel-active");
        });
        signUpBtn.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });
        fistForm.addEventListener("submit", (e) => e.preventDefault());
        secondForm.addEventListener("submit", (e) => e.preventDefault());
    </script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>