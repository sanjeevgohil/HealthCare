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

	<form method="POST" action="pregispro.php" style=" padding-top:70px;padding-bottom:70px;padding-left:100px;padding-right:100px;" enctype="multipart/form-data">
	<table style="width:100%" "height=100" align="center" bgcolor="#C0C0C0" border="1" bordercolor=#000000>
	<trstyle ="width:100%" valign="top">
	<td style="width:100%;color:#000000;font-size:36px;" colspan="2" align="center">
	<h1 align="center">Patients Registration</h1>
		 		<br>
		<table style ="width:auto height:auto"border="0" bordercolor="white">

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Enter Name :</font> </h2></td>
				<td style="width:50%" align="left"><input type="text" name="nm" placeholder="Enter Name Hear" required size=30></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Enter UserName :</font></h2></td>
				<td style="width:50%" align="left"><input type="text" name="unm" placeholder="Enter Name Hear" required size=30></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Enter Password :</font></h2></td>
				<td style="width:50%" align="left"><input type="password" id="psw" name="pass" placeholder="Enter password" required size=30></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Mobile Number :</font></h2></td>
				<td style="width:50%" align="left"><input type="text" name="mno" placeholder="Enter Mobile Number Hear" required size=30></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Email :</font></h2></td>
				<td style="width:50%" align="left"><input type="text" name="email" placeholder="Enter Email Hear"  required size=30></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Enter City  :</font></h2></td>
				<td style="width:50%" align="left">
				<select name="city">
					<?php
						$cn = mysqli_connect("localhost","root","","health");
						$q = mysqli_query($cn,"select * from city");
						while ($r = mysqli_fetch_array($q))
						{
							echo "<option  value='".$r[1]."' name='city'>".$r[1]."</option>";	
						}
					?>
				</select>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Photo :</font></h2></td>
				<td style="width:50%" align="left"><input type="file" name="photo" ></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td></td>
				<td style="width:50%" align="left"><input type="submit" name="submit" value="Submit">
				<style="width:50%" align="left"><input type="reset" name="reset" value="Reset"></td>
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