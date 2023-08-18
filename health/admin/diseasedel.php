<?php
	if(isset($_POST['delete']))
	{
		include("dbconfig.php");
		$id = $_POST['id'];
		$q = mysqli_query($cn,"delete from disease where id='$id'");
		echo "<script>window.location='disease.php';</script>";
	}
	else
	{	
		echo "<script>alert('Illegal Operation...');</script>";
		echo "<script>window.location='disease.php';</script>"	;		
	}
?>