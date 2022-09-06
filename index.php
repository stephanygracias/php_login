<?php session_start();
if(ISSET($_SESSION['user'])){
  header('location:home.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="styles.css">
</head>

    
  <body>
  <?php if(isset($_SESSION['message'])): ?>
				<div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg">
                <?php echo $_SESSION['message']['text'] ?></div>
			
            <script>
				(function() {
					// removing the message 3 seconds after the page load
					setTimeout(function(){
						document.querySelector('.msg').remove();
					},1000)
				})();
			</script>

			<?php 
				endif;
				// clearing the message
				unset($_SESSION['message']);
			?>

    <div class="container">
      <form action="login_query.php" method="POST">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" placeholder=" User Name" name="username" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder=" Password" name="password" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="login" value="Log in">
        </div>
        <a href="registration.php">Sign Up</a>
      </form>
    
        </div>
    </div>

</body>
</html>