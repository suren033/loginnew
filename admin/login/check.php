<?php
	session_start();
	if( !empty( $_POST['username']) && !empty( $_POST['password']) )  {

		include('loginDb.php');
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = $db->query(" SELECT `id` FROM `users` WHERE `username`='$username' AND `password`='$password' ");

		$rows = mysqli_num_rows($query);
		
		if($rows == 1) {

			$_SESSION['login'] = true;
			header('location: ../hello.php');

		} else {
			header('location: login.php');
		}	

	} else {
		header('location: login.php');
	}
?>

