<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		
		$nm = $_POST['nm'];
		$mno = $_POST['mno'];
		$feedback = $_POST['feedback'];

		$q=mysqli_query($cn,"select * from feedback where id='$nm'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{
			
			$q=mysqli_query($cn,"INSERT INTO `feedback` (`id`, `name`, `mobile`, `feedback`) VALUES (NULL, '$nm', '$mno', '$feedback');");
			
		}	
		else
		{
			echo"<script>window.location='feedback.php'</script>";
		}
	}
	echo"<script>window.location='index.php'</script>";
?>