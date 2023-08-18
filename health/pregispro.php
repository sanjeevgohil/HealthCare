<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		
		$nm = $_POST['nm'];
		$unm = $_POST['unm'];
		$pass = $_POST['pass'];
		$mno = $_POST['mno'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		$photo = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"upload/".$_FILES['photo']['name']);

		$q=mysqli_query($cn,"select * from patient where username='$unm'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{
			$q=mysqli_query($cn,"INSERT INTO `patient` (`id`, `name`, `username`, `password`, `mobile`, `email`, `city`, `photo`) VALUES (NULL, '$nm', '$unm', '$pass', '$mno', '$email', '$city', '$photo');");
		}
		else
		{
			echo"<script>alert('User Already Registered')</script>";
			echo"<script>window.location='pregis.php'</script>";
		}
	}
	echo"<script>window.location='index.php'</script>";
?>