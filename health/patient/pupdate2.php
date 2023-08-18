<?php
	include("dbconfig.php");
	if(isset($_POST['submit']))
	{
		$id = $_POST['id'];
		$nm = $_POST['nm'];
		$unm = $_POST['unm'];
		$pass = $_POST['pass'];
		$mno = $_POST['mno'];
		$email = $_POST['email'];	
		$city = $_POST['city'];
		$photo = $_FILES['photo']['name'];

		move_uploaded_file($_FILES['photo']['tmp_name'],"../upload/".$_FILES['photo']['name']);

		$q = mysqli_query($cn,"UPDATE `patient` SET `name` = '$nm', `username` = '$unm', `password` = '$pass', `mobile` = '$mno', `email` = '$email', `city` = '$city', `photo` = '$photo' WHERE `patient`.`id` = $id;");

		echo "<script>alert('Details updated successfully')</script>";
		echo "<script>document.location='profile.php'</script>";
	}
	else
	{	
		echo "<script>alert('Invalid  Operation')</script>";
		echo "<script>document.location='index.php'</script>";	
	}
?>