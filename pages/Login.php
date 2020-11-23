<?php
session_start();
if (isset($_SESSION['id'])) {
    header('Location:community.php');
} else {
    //login
    require 'Login/login.php';
    //logup
    require 'Login/logup.php';
    require 'Login/forget.php';

}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">

    <title>Login</title>
</head>

<body>
    <header>
        <nav class="sticky-top">

            <ul id="menue" class="sticky-top">
                <li class="logo"> <a href="index.php"><img src="../images/logo.svg" alt="" id="imglogo"
                            height="60px"></a>
                </li>
                <li class="toggle d-flex align-items-center"> <img src="../images/Icons/toggle.png" id="toggle" alt="" width="40" height="40">
                </li>
                <a class="item " href="../index.php">
                    <li>Home </li>
                </a>
                <a class="item " href="..\pages\aboutus.php">
                    <li>Our story</li>
                </a>
                <a class="item" href="../pages/services.php">
                    <li>Our services</li>
                </a>
                <a class="item" href="../pages/store.php">
                    <li>Store</li>
                </a>
                <a class="item" href="../pages/community.php">
                    <li> Community</li>
                </a>
                <a class="item" href="../pages/contact.php">
                    <li>Contact</li>
                </a>

                <?php
if (isset($_SESSION['id'])) {
    echo '
    <a class="item" href="..\pages\mycarts.php">
    <img src="../images\Icons\Carts.png" width="50" height="50">
</a>
';
} else {
    echo '
               <li class="item button">
                    <a href="..\pages\Login.php">
                        <button type="submit" class="btn btn-primary">Join us</button>
                    </a>
                </li>';
}

?>

            </ul>
        </nav>

        <h1 class="title">Join us</h1>
    </header>
    <main>
        <div class="container">
            <form  method="post" id="form1" >
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="bigtitle mb-5">Login</h2>
                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Enter your email" name="login" class="form-control" id="email">
                    </div>
                    <div class="col-md-2">

                    </div>

                </div>
                <div class="row mb-5">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2">
                        <label for="password">Password</label>
                    </div>
                    <div class="col-md-6">
                        <input type="password" placeholder="Enter your Paasowrd" name="password0" class="form-control" id="password">
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary" name="signin" id="signin">Sign In</button><br><br>

                    </div>
                    <div class="col-md-6">
                        <p>New user? you want be part of our community?<span id="join"> click here</span></p>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-6">
                        <p>Forget Password?<span id="forget" > click here</span></p>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                    </div>
                    <div class="col-11">
                        <p id="error"></p>
                    </div>
                </div>
            </form>

            <form  method="post" enctype="multipart/form-data" id="form2">
                <div class="row ">
                    <div class="col-12 mb-5">
                        <h2 class="bigtitle">Logup</h2>
                    </div>
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="firstname">First name</label>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <input type="text" placeholder="Enter your first name" name="firstname" class="form-control"
                            id="firstname">
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="lastname">Last name</label>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <input type="text" placeholder="Enter your alst name" name="lastname" class="form-control"
                            id="lastname">
                    </div>
                    <div class="col-lg-1">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-1 ">

                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="pic">Upload your picture</label>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <input type="file" name="picture" class="form-control-file" id="pic">
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="pic">Sexe</label>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <input type="radio" name="sexe" value="man" id="Man" checked> Man
                        <input type="radio" name="sexe" value="woman" id="Woman" class="ml-5"> Woman
                    </div>
                    <div class="col-lg-1 ">

                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="email2">Email</label>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <input type="text" name="email" placeholder="Enter your email" class="form-control" id="email2">
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="phonenumber">Phone number</label>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <input type="text" name="phonenumber" placeholder="Enter your phone number" class="form-control" required id="phonenumber">
                    </div>
                    <div class="col-lg-1">

                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="birthday">Birthday</label>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <input type="date" name="bithday"  max="2017-01-01" min="1800-01-01"  value="2017-01-01" class="form-control" required id="birthday">
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="securityquestion">Your favorite place (Security question)</label>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <input type="text" name="securityquestion" class="form-control" id="securityquestion" required placeholder="Enter your favorite country" >
                    </div>
                    <div class="col-lg-1">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="password2">Password</label>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <input type="password" name="password1" placeholder="Enter a password" class="form-control"
                            id="password2">
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="password3">Valid password</label>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <input type="password" name="password2" placeholder="Enter password again" class="form-control"
                            id="password3">
                    </div>
                    <div class=" col-lg-1">

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-2 col-md-4">
                        <button class="btn btn-primary" name="signup" id="signup" disabled>Sign Up</button><br><br>

                    </div>
                    <div class="col-lg-8 col-md-6">
                        <p>Have already account?<span id="login" > click here</span></p>
                    </div>
                    <div class="col-lg-1">

                    </div>

                </div>
                <div class="row">
                    <div class="col-1">
                    </div>
                    <div class="col-11">
                        <p id="error3"></p>
                        <p id="error4"></p>
                        <p id="error5"></p>
                        <p id="error6"></p>
                        <p id="error7"></p>
                        <p id="error8"></p>
                        <p id="error8"></p>
                        <p id="error9"></p>

                    </div>
                </div>
            </form>

            <form  method="post"  id="form3">
                <div class="row ">
                    <div class="col-12 mb-5">
                        <h2 class="bigtitle">Forgot password</h2>
                    </div>
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="firstname">First name</label>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <input type="text" required placeholder="Enter your first name" name="recfirstname" class="form-control">
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="lastname">Last name</label>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <input type="text" required placeholder="Enter your last name" name="reclastname" class="form-control">
                    </div>
                    <div class="col-lg-1">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="email2">Email</label>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <input type="text" required name="recemail" placeholder="Enter your email" class="form-control" >
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="phonenumber">Phone number</label>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <input type="text" name="recphonenumber" placeholder="Enter your phone number" class="form-control" required id="phonenumber">
                    </div>
                    <div class="col-lg-1">

                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="birthday">Birthday</label>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <input type="date" name="recbithday"  max="2017-01-01" min="1800-01-01"  value="2017-01-01" class="form-control" required id="birthday">
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <label for="securityquestion">Your favorite place (Security question)</label>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <input type="text" name="recsecurityquestion" class="form-control"  required placeholder="Enter your favorite country" >
                    </div>
                    <div class="col-lg-1">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-2 col-md-4">
                        <button class="btn btn-primary" name="recover"  >Recover </button><br><br>

                    </div>
                    <div class="col-lg-8 col-md-6">
                        <p>Have already account?<span id="login2" > click here</span></p>
                    </div>
                    <div class="col-lg-1">

                    </div>

                </div>

            </form>
        </div>
    </main>
    <?php

?>


<footer>
        <div class="container-fluid">
            <div class="row text-center">
                <div class=" col-md-4">
                    <p class="tmplt">This Template made by Souhaib & Radouan</p>

                </div>
                <div class="col-md-8">
                    Follow us :
                    <a href="https://www.facebook.com/Del.Souhaib"><img src="../images/Social media/facebook.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href="https://www.linkedin.com/in/souhaib-allout/"><img src="../images/Social media/linkedin.png" class="social" class="social" width="50px"
                            height="50px" alt=""></a>
                    <a href=""> <img src="../images/Social media/google.png" class="social" width="50px" height="50px"
                            alt=""></a>
                </div>
            </div>
        </div>
    </footer>









    <script src="../javascript/login.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>