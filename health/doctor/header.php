<?php

	session_start();
	if(!isset($_SESSION['username']))
	{
		header('Location:../index.php');
	}
?>
<html>
<head>
	<title>S&K HealthCare</title>
</head>
<body>
	<table bgcolor="#C0C0C0">
	<div>
		<tr>
			<td>
				<img src="../image/logo.png" width="200" height="200">
				</td>
			<td width="1400" align="center">
				<?php include("slider.php"); ?>
			</td>
		</tr>
	</div>
	</table>
</body>
</html>
<?php include("menu.php"); ?> <!--menu bar -->
<?php include("dslide.html"); ?> 
