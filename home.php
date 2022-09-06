<!DOCTYPE html>
<?php
	require 'conn.php';
	session_start();
 
	if(!ISSET($_SESSION['user'])){
		header('location:index.php');
	}
?>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="styles.css">
	</head>
<body>
  
		<div class="container">
			<div class="title">Welcome!</div>
            <div class="input-box underline">
            <div class="underline"></div>
			<?php
				$id = $_SESSION['user'];
				$sql = $conn->prepare("SELECT * FROM `member` WHERE `mem_id`='$id'");
				$sql->execute();
				$fetch = $sql->fetch();
			?>
			<h4><?php echo $fetch['firstname']." ". $fetch['lastname']?></h4>
			<br>
            <a href = "logout.php">Logout</a>
		</div>
	</div>


</body>
</html>