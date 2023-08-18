<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		
		$nm = $_POST['nm'];
		$blog = $_POST['blog'];
		$photo = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"../upload/".$_FILES['photo']['name']);

		$q=mysqli_query($cn,"select * from blog where id='$nm'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{
			
			$q=mysqli_query($cn,"INSERT INTO `blog` (`id`, `doctorname`, `info`, `photo`) VALUES (NULL, '$nm', '$blog', '$photo');");
			
		}	
		else
		{
			echo"<script>window.location='blog.php'</script>";
		}
	}
	echo"<script>window.location='index.php'</script>";
?>