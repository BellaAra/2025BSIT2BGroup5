<html>
<head><title> USER PROFILE </title>

<!-- IMPORTED FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- EDIT USER CSS STYLESHEET -->
<link rel="stylesheet" href="assets/css/userinfoStyle.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
	
<!--POST-->
<?php

	$address = $_POST['address'];
	$bday = $_POST['bday'];
	$contact = $_POST['contact'];
	$bio = $_POST['bio'];

?>

<body>

<!--POST & GET-->
<form method="POST" action="edituser.php?
type=login&userAct=create">

<?php require 'views/navbar.php' ?>
	 
<div class="page-wrapper">

	<div class="maincontainer">

	<div class="forms">
		
	<h1 class="eup"> User Profile </h1>

    <div class = "resultbox">
        
<!-- ADDRESS INPUT FIELD -->
		<div class="input">
			<p> Address</p> 
			    <span class="value"><?php echo $address; ?></span>
		</div>

<!-- BDAY INPUT FIELD -->
<div class="bday-contact">
    <div class="input">
        <p> Birthday </p> 
		    <span class="value"><?php echo $bday; ?></span>
    </div>

<!-- CONTACT NUMBER INPUT FIELD -->
    <div class="input">
        <p> Contact Number </p> 
		    <span class="value"><?php echo $contact; ?></span>
    </div>
</div>

<!-- EMAIL TEXT AREA AND EDIT, SAVE BUTTONS -->
<div class="input"> 

			<p> Bio </p> 
		    <span class="value"><?php echo $bio; ?></span>
			</div>
</div>
							<div class="esButton">
				<button class="blueButton"> Edit </button>
				<button class="blueButton" type = "submit"> Save </button>
			</div>
		</form>

</div>


<!-- BLUE DIV CONTAINING THE USER PROFILE IMAGE -->
<div class="imagesection">
<img src="images/kao.jpg">
	<h1> Kaori Hirose </h1>
	<p class="admin"> ADMIN </p>
	
	<p class="profile-email"> kaorihirose@gmail.com </p>
	
<button class="logout-btn" onclick="redirelogin.html"> Logout </button>
		</div>

</div>

<?php require 'views/footer.php' ?>
</body>
</html>