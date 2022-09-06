<?php 
    require_once 'conn.php';
 
    if(ISSET($_POST['login'])){
        if($_POST['username'] != "" || $_POST['password'] != ""){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM `user` WHERE `username`=? AND `password`=? ";
            $query = $conn->prepare($sql);
            $query->execute(array($username,$password));
            $row = $query->rowCount();
            $fetch = $query->fetch();
            if($row > 0) {
                echo"<center><h5 class='text-success'>Login successfully</h5></center>";
            } else{
                echo"<center><h5 class='text-danger'>Invalid username or password</h5></center>";
            }
        }
    }
?>