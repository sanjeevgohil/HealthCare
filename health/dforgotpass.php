<html>
<head>
	<title>S & K healthcare</title>
	<link href="style1.css" rel="stylesheet">	
	<style>
			*
			{
				margin:0px 0px 0px 0px;
				
			}
			.main
			{
				margin:0px 110px 0px 110px;
				
			}
				
	</style>
</head>
<body bgcolor="white" text = "Arial">
	<div class="main">

<?php include("menu.php");?>
<form action="#" method="POST" style=" padding-top:70px;padding-bottom:70px;padding-left:100px;padding-right:100px;">
<table style="width:100%" align="center" border=0 bgcolor=#C0C0C0>
<tr style="width:100%" valign="top">
	<td style="width:100%;color:black;font-size:36px; " colspan="2" align="center">
		<h3>Forget <font color=#000000>User Password </font></h3>
	</td>			
</tr>
<tr style="width:100%">							
		<td  align="right">
		<font color="#000000">Enter Email :</font> 
		</td>
		<td align="left">
		<input type="text" name="email" required>
		</td>
</tr>
<tr style="width:100%">							
		<td  align="right">
		<input type="submit" name="submit" value="Submit" /> 
		</td>
		<td  align="left">
		<input type="Reset" name="reset" value="Cancel" />
		</td>
</tr>					
</table>				
</form>	
<?php include("footer.php");?>
<?php 
	if(isset($_POST['submit']))
	{
		include("dbconfig.php");
		
		$email=$_POST['email'];
	
		$q=mysqli_query($cn,"select * from doctor where email='$email'");
		$r=mysqli_fetch_row($q);

		if($r[11]==$email)
		{	
			$email = "$r[11]";
			$subject = "Forgot Password";
			$body = "Hi, '".$r[1]."' passowrd is : '".$r[3]."'";
			$headers = "From: sanjeevgohil2707@gmail.com";

			if (mail($email, $subject, $body, $headers)) 
			{
    				echo "<script>alert('Email successfully sent')</script>";
			}
			else {
   				 echo "Email sending failed...";
			}
			echo"<script>window.location='dlogin.php'</script>";
			
		}
		else
		{
			echo "<script>alert('please insert right EMAIL ...')</script>";
			echo "<script>window.location='dlogin.php'</script>";
		}
	}
?>
</div>
</body>
</html>