<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="styles.css">
	</head>
<body>
	
	

	<div class="container">
      <form action="register_query.php" method="POST">
        <div class="title">Register</div>
        <div class="input-box underline">
          <input type="text" placeholder=" First Name" name="firstname" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
		<input type="text" placeholder="Last Name" name="lastname" required>
          <div class="underline"></div>
        </div>
		<div class="input-box">
		<input type="text" placeholder="User Name" name="username" required>
          <div class="underline"></div>
        </div>
		<div class="input-box">
          <input type="password" placeholder=" Password" name="password" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="register" value="Sign Up">
        </div>
        
      </form>
	  <a href="index.php">Login</a>
        </div>
    </div>

	
</body>
</html>