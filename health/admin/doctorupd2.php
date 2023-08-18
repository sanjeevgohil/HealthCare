<?php
	include("dbconfig.php");
	if(isset($_POST['submit']))
	{
		$id = $_POST['id'];
		$nm = $_POST['nm'];
		$unm = $_POST['unm'];
		$pass = $_POST['pass'];
		$spe = $_POST['spe'];
		$edu = $_POST['edu'];	
		$exp = $_POST['exp'];
		$mno = $_POST['mno'];
		$city = $_POST['city'];
		$photo = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"../upload/".$_FILES['photo']['name']);
	
		$q = mysqli_query($cn,"UPDATE `doctor` SET `name` = '$nm', `username` = '$unm', `password` = '$pass', `specialist` = '$spe', `qualification` = '$edu', `experience` = '$exp', `mobile` = '$mno', `city` = '$city', `photo` = '$photo' WHERE `doctor`.`id` = $id;");

		echo "<script>alert('Details updated successfully')</script>";
		echo "<script>document.location='doctor.php'</script>";
	}
	else
	{	
		echo "<script>alert('Invalid  Operation')</script>";
		echo "<script>document.location='index.php'</script>";	
	}
?>