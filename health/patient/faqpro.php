<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		
		$nm = $_POST['nm'];
		$que = $_POST['que'];

		$q=mysqli_query($cn,"select * from faq where id=id");
		$r=mysqli_num_rows($q);
		if($r==0)
		{
			
			$q=mysqli_query($cn,"INSERT INTO `faq` (`id`, `name`, `question`) VALUES (NULL, '$nm', '$que');");
			
		}	
		else
		{
			echo"<script>window.location='faq.php'</script>";
		}
	}
	echo"<script>window.location='index.php'</script>";
?>