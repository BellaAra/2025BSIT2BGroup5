<html lang="en">
<head> <title> Home </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- INDEX CSS STYLESHEET -->
    <link rel="stylesheet" href="assets/css/indexStyle.css">

<!-- IMPORTED FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

<?php require 'views/navbar.php' ?>

<div class="login-wrapper">
    <div class="right-wrapper">
        <div class="tag">
            <h1 class="login-heading">DON'T JUST PAY THE BILL,<br>CONTROL EVERY SPARK.</h1>
        </div>

        <div class="container">
            <div class="login-box">

            <form id="form" method= "POST" action="loginCheck.php">

                <h1> LOG IN </h1>
                <div class = "input-field">
                <input id="username" name="username" type="text" class="textbox" placeholder="Username">
                <div class="error"></div>
                </div>

                <div class = "input-field">
                <input id="password" name="password" type="password" class="textbox" placeholder="Password">
                <div class="error"></div>
                </div>

                <p class="question">DON'T HAVE AN ACCOUNT? <a href="signup.php" class="signup">SIGN UP</a></p>

                <button type="submit" class="login-button">LOG IN</button>

                <!-- SOCIAL ICONS INSIDE THE LOG-IN BOX -->
                <div class="social-icons">
                    <a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://www.facebook.com/login/&ved=2ahUKEwjJ1fbL1LCQAxU_h1YBHbscAW8QFnoECBAQAQ&usg=AOvVaw2NEj8NwnxhOue64pSijk7e" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://www.instagram.com/accounts/login/%3Fhl%3Den&ved=2ahUKEwiz37_i1LCQAxW8s1YBHYLjJfcQFnoECAsQAQ&usg=AOvVaw22wbeKu9CbUP9Ki54NoHiP" class="icons"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://x.com/i/flow/login%3Flang%3Den&ved=2ahUKEwj2psXq1LCQAxXx4DQHHeMlH40QFnoECA4QAQ&usg=AOvVaw0dA8t6QR85iaz53sRXoo10" class="icons"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://www.youtube.com/account&ved=2ahUKEwiXvu_x1LCQAxWSqFYBHejUB5YQFnoECA0QAQ&usg=AOvVaw13YCwHL9P8MILbm4eiqfiG" class="icons"><i class="fa-brands fa-youtube"></i></a>
                </div>

                <img src="images/loginAd.png" alt="New Yorker banner ad">
            </div>
        </div>
    </div>

</div>

</form>

<!-- END Login Section -->
</div>

<!-- DIV CONTAINING PHP OF WHY SAS AND CONTACT US -->
<div class="page-sections">

    <div id="whysas-section">
        <?php require 'whysas.php' ?>
    </div>

    <hr class="section-divider">

    <div id="contact-section">
        <?php require 'contactus.php' ?>
    </div>

</div>

<?php require 'views/footer.php';?>

<script src="assets/js/loginScript.js"></script>

</body>
</html>
