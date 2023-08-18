<?php
	include("dbconfig.php");
	if(isset($_POST['submit']))
	{
		$id = $_POST['id'];
		$nm = $_POST['nm'];
		$sign = $_POST['sign'];

		$q = mysqli_query($cn,"UPDATE disease SET name = '$nm', sign = '$sign' WHERE id = '$id'");
		echo "<script>alert('Details updated successfully')</script>";
		echo "<script>document.location='disease.php'</script>";
	}
	else
	{
		echo "<script>alert('Invalid  Operation')</script>";
		echo "<script>document.location='index.php'</script>";	
	}
?>