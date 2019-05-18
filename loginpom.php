<?php 

include('dbcon.php');

	if (isset($_POST['submit'])){
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$query1= "SELECT * FROM member WHERE username='$username' AND password='$password'";
	$result = mysqli_query($mysqli,$query)or die(mysql_error());
	$result1=mysqli_query($mysqli,$query1)or die(mysql_error());
	$num_row = mysqli_num_rows($result);
	$num_row1=mysqli_num_rows($result1);
		$row=mysqli_fetch_array($result);
		$row1=mysqli_fetch_array($result1);
			


		if( $num_row > 0 ) {
			header('location:librarian/dashboard.php');
	$_SESSION['id']=$row['user_id'];
		}
		elseif( $num_row1 > 0 )
		{
			header('location:users/dashboard.php');
	$_SESSION['id']=$row1['member_id'];
		}
		else{ ?>
	<div class="alert alert-danger">Внесовте грешни податоци!!!</div>		
	<?php
	}}
	?>