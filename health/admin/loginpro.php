<?php
	session_start();
	
	$unm = $_POST['unm'];
	$pass = $_POST['pass'];

	include("dbconfig.php");
	$q = mysqli_query($cn,"select * from patient where username='$unm' and password='$pass';");
	$r=mysqli_fetch_row($q);


	if($r[2]==$unm && $r[3]==$pass &&$r[8] =='admin')
	{
		$_SESSION['adminname'] = $_POST['unm'];
		echo "<script>window.location='../admin/home.php'</script>";
	}
	else 
	{
		echo "<script>alert('Enter Correct Username and Password');</script>";
		echo "<script>window.location='../dlogin.php'</script>";	
	}
?>
	
	

