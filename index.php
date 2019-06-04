<!DOCTYPE html>
<html lang="en">
<head>
  <title>singin and signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<br>
<br>
<?php 
							if(isset($_GET['run'])&& $_GET['run']=="success")
							{
								echo "<mark>Your registration successfully done</mark>";
							} 
							?>

<div class="Registro">
	<p class="texto">Registration</p>
	<br>
<form method="post" action="signup_sub.php">

<span class="fontawesome-user"></span><input type="text" required placeholder="Name" autocomplete="off"> 
<span class="fontawesome-envelope-alt"></span><input type="text" id="email" required placeholder="Email" autocomplete="off">
<span class="fontawesome-lock"></span><input type="password" name="password" id="password" required placeholder="Password" autocomplete="off"> 
<label for="pwd">Upload your image</label>
<span class="fontawesome-user"></span>
<input type="file" name="img" >
<br>
<br>
<input type="submit" value="Register" title="Registeration"></form></div>
							 
<div class="signup">
	<p class="texto">SignIn</p>
	<br>
<form method="post" action="signin_sub.php">

<span class="fontawesome-envelope-alt"></span><input type="text" id="email" required placeholder="Email" autocomplete="off">
<span class="fontawesome-lock"></span><input type="password" name="password" id="password" required placeholder="Password" autocomplete="off"> 
<br>
<br>
<input type="submit" value="SignIn" title="SignIn"></form></div>
						<?php
						if(isset($_GET['run'])  && $_GET['run']=="failed")
						{
							echo "Your email or password is not correct";
						}
	
						?>
</body>
</html>
