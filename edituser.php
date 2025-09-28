<html>
<head><title> EDIT USER </title>

<!-- IMPORTED FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- EDIT USER CSS STYLESHEET -->
<link rel="stylesheet" href="assets/css/edituserStyle.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

	<!--POST & GET-->
<form method="POST" action="userinfo.php?
type=login&userAct=create">

<?php require 'views/navbar.php' ?>

<div class="page-wrapper">

	<div class="maincontainer">

	<div class="forms">
		
	<h1 class="eup"> Edit User Profile </h1>

<!-- ADDRESS INPUT FIELD -->
		<div class="input">
			<p> Address </p>
				<input name = "address" type="text" placeholder="Lot 6, Blk. 7 Phase 3, Charito Heights">
		</div>

<!-- BDAY INPUT FIELD -->
<div class="bday-contact">
    <div class="input">
        <p> Birthday </p>
        <input name = "bday" type="text" placeholder="2/10/2006">
    </div>

<!-- CONTACT NUMBER INPUT FIELD -->
    <div class="input">
        <p> Contact Number </p>
        <input name = "contact" type="text" placeholder="+63 961 987 4020">
    </div>
</div>

<!-- EMAIL TEXT AREA AND EDIT, SAVE BUTTONS -->
<div class="input"> 

			<p> Bio </p>
				<textarea class="message-box" name = "bio" type = "text" placeholder="Write anything."></textarea>
			</div>
							<div class="esButton">
				<button class="blueButton"> Edit </button>
				<button class="blueButton"> Save </button>
			</div>

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