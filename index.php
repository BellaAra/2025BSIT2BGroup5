<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="loginStyle.css">
	<link rel="stylesheet" href="footerStyle.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

    <div class="navbar">
<?php include 'nav.php';?>
    </div>

    <!-- Right-aligned content -->
    <div class="right-wrapper">
        <div class="tag">
            <h1 class="login-heading">DON'T JUST PAY THE BILL, CONTROL EVERY SPARK.</h1>
        </div>

        <div class="container">
            <div class="login-box">
                <h1>LOG IN</h1>
                <input type="text" class="textbox" placeholder="Username">
                <input type="password" class="textbox" placeholder="Password">

                <p class="question">DON'T HAVE AN ACCOUNT? <a href="#" class="signup">SIGN UP</a></p>

                <a href="#" class="login-button">LOG IN</a>

                <div class="social-icons">
                    <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icons"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icons"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="icons"><i class="fa-brands fa-youtube"></i></a>
                </div>

                <img src="https://storage.googleapis.com/website-production/uploads/2023/01/new-yorker-banner-ad-.png" alt="New Yorker banner ad">
            </div>
        </div>
    </div>
	
<footer>
<?php require 'footer.php';?>
</footer>


</body>
</html>