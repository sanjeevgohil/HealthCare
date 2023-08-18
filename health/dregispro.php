<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		
		$nm = $_POST['nm'];
		$unm = $_POST['unm'];
		$pass = $_POST['pass'];
		$spe = $_POST['spe'];
		$edu = $_POST['edu'];
		$exp = $_POST['exp'];
		$mno = $_POST['mno'];
		$city = $_POST['city'];
		$photo = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"upload/".$_FILES['photo']['name']);
		$email = $_POST['email'];

		$q=mysqli_query($cn,"select * from doctor where username='$unm'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{	
			$q=mysqli_query($cn,"INSERT INTO `doctor` (`id`, `name`, `username`, `password`, `specialist`, `qualification`, `experience`, `mobile`, `city`,`photo`, `status`,`email`) VALUES (NULL, '$nm', '$unm', '$pass', '$spe', '$edu', '$exp', '$mno', '$city','$photo', 'user','$email');");
		}	
		else
		{
			
			echo"<script>alert('User Already Registered')</script>";
			echo"<script>window.location='dregis.php'</script>";
		}
	}
	echo"<script>window.location='index.php'</script>";
?>