<?php
$cookie_name=$_POST['name'];
$cookie_email=$_POST['email'];
setcookie($cookie_name,$cookie_email,time()+3600);
if(isset($_COOKIE[$cookie_name])){
	echo 'logged in as '.$cookie_email;
}
else{
	echo 'ERROR';
}
?>





<!DOCTYPE html>
<html>
<head>
	<title>
		Contact
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
	<?php include 'header.php' ?>
	<div id="main">
		<div id="contact-form">
			<form action="" method="post">
				<label for="name">Name:</label>
				<input type="text" name="name" class="form-control">
				<label for="email">Email:</label>
				<input type="text" name="email" class="form-control">
				<label for="message">Message:</label>
				<textarea name="message" cols="45" rows="6" class="form-control"></textarea>
				<p class="submit">
					<input type="submit" name="submit" value="Submit">
				</p>
			</form>
		</div>
		
	</div>
	<?php include 'footer.php' ?>
</body>
</html>