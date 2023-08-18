<?php
	include("header.php");
?>
<html>
<head>
	<title>s&k healthcare</title>

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

	<form method="POST" action="dloginpro.php" style=" padding-top:70px;padding-bottom:70px;padding-left:100px;padding-right:100px;">
	<table style="width:100%" "height=100" align="center" bgcolor="#C0C0C0" border="1" bordercolor="#000000">
	<trstyle ="width:100%" valign="top">
	<td style="width:100%;color:#000000;font-size:36px;" colspan="2" align="center">
	<h1 align="center">Doctor Login</h1>
		 		<br>
		<table style ="width:auto height:auto"border="0" bordercolor="#000000">


		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>User  Name:<font></h2></td>
				<td style="width:50%" align="left"><input type="text" name="unm" placeholder="Enter Name Hear" required size=36></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Enter Password :</font></h2></td>
				<td style="width:50%" align="left"><input type="password" id="psw" name="pass" placeholder="Enter password" required size=36></td>
		</tr><tr></tr><tr></tr>


		<tr style="width:100%">
				<td></td>
				<td style="width:50%" align="left"><input type="submit" name="submit" value="Login">
				<style="width:50%" align="left"><a href="dforgotpass.php"><input type="button" name="Forgot password" value="Forgot Password"></a>
				<style="width:50%" align="left"><a href="dregis.php">Create New Account</a></td>
		</tr><tr></tr><tr></tr>

		</table>
		</td>
		</tr>
		</table>
		</form>
			</td>
			</table>

</div>
</table>	
</body>
</html>


<?php
	include("footer.php");
?>