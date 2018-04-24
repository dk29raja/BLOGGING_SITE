<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			Create new account
		</title>
	</head>
	<body><center>
		<form action="/create_account.php">
			UserId:<br>
			<input type="text" name="UserId">
	  		<br>
			<br>
	  		First name:<br>
	  		<input type="text" name="firstname">
	  		<br><br>
		  	Last name:<br>
		 	<input type="text" name="lastname">
	  		<br><br>
		  	Email:<br>
		 	<input type="text" name="Email">
	  		<br><br>
			Type:<br>
		 	<input type="radio" name="Type" value="Student" checked> Student<br>
  			<input type="radio" name="Type" value="Faculty"> Faculty<br><br>
		  	Description:<br>
		 	<input type="text" name="Description">
	  		<br><br>
		  	Password:<br>
		 	<input type="text" name="Password">
	  		<br><br>
		  	Repeat Password:<br>
		 	<input type="text" name="Repeat Password">
		<br><br>
  <input type="submit" value="Submit">
</form> 
		</center>
	</body>
</html>