 <html>
<head><title>Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- IMPORTED FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- SIGN UP CSS STYLESHEET -->
<link rel = "stylesheet" href="assets/css/signupStyle.css" >
</head>
<body>

<div class = "background">

<div class = "signup-container">
            <img src = "images/logo.png">
    <h1>SIGN UP</h1>
    <form id="form" method= "POST" action="signupcheck.php">
<div class="input-fields">
  <label for="name">Name</label>
  <input name="Name" id="name" type="text" placeholder="Name"/>
  <div class="error"></div>
</div>

<div class="input-fields">
  <label for="email">Email</label>
  <input name="Email" id="email" type="text" placeholder="Email"/>
  <div class="error"></div>
</div>

<div class="input-fields">
  <label for="password">Password</label>
  <input name="Password" id="password" type="password" placeholder="Password"/>
  <div class="error"></div>
</div>
            <input type = "submit" id = "submit-button" value = "Create an account"/>
            <!--divider-->
        <div class = "divider"><span>or</span></div>
        <div class = "google-signup"><img src = "images/google-icon.png"><p>Sign up with Google</p>
        </div>
        <p class = "question">Already have an account? Log in <a href = "index.php"> here.</a></p>
    </div> <!--closing tag for input-fields-->
    </form>
</div> <!--end of signup-container-->
</div><!--background-->

<script src="assets/js/signupScript.js"></script>


</body>
</html>