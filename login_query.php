<?php
	session_start();
	require_once 'conn.php';

 
	if(ISSET($_POST['login'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM `member` WHERE `username`=? ";
			
			$query = $conn->prepare($sql);
			$query->execute(array($username));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				if(password_verify($password, $fetch['password'])) {
					$_SESSION['user'] = $fetch['mem_id'];
					header("location: home.php");
				} else {
					echo "
					<script>alert('Invalid username or password')</script>
					<script>window.location = 'index.php'</script>
					";
				}	
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'index.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'index.php'</script>
			";
		}
	}
 
?>