<?php
	include("dbconfig.php");
	if(isset($_POST['submit']))
	{
		$id = $_POST['id'];
		$nm = $_POST['nm'];
		$cno = $_POST['cno'];
		$addr = $_POST['addr'];
		$city = $_POST['city'];
	
		$q = mysqli_query($cn,"UPDATE `hospital` SET `name` = '$nm', `contact` = '$cno', `address` = '$addr', `city` = '$city' WHERE `hospital`.`id` = $id;");
		echo "<script>alert('Details updated successfully')</script>";
		echo "<script>document.location='hospital.php'</script>";
	}
	else
	{
		echo "<script>alert('Invalid  Operation')</script>";
		echo "<script>document.location='index.php'</script>";	
	}
?>