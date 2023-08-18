<?php include("header.php"); ?>

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

	<form method="POST" action="hospitalpro.php" style=" padding-top:70px;padding-bottom:70px;padding-left:100px;padding-right:100px;">
	<table style="width:100%" "height=100" align="center" bgcolor="#C0C0C0" border="1" bordercolor="#000000">  
	<trstyle ="width:100%" valign="top">
	<td style="width:100%;color:#000000;font-size:36px;" colspan="2" align="center">
	<h1 align="center"><font color=#000000>Hospital List</font></h1>
		 		<br>
		<table style ="width:auto height:auto"border="0" bordercolor="white">

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Enter Hospital Name :</font> </h2></td>
				<td style="width:50%" align="left"><input type="text" name="nm" placeholder="Hospital Name" required size=30></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Enter Mobile Number :</font> </h2></td>
				<td style="width:50%" align="left"><input type="text" name="mno" placeholder="Mobile Number" required size=30></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Enter Hospital Address :</font> </h2></td>
				<td style="width:50%" align="left"><input type="text" name="addr" placeholder="Hospital Address" required size=30></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Enter City  :</font></h2></td>
				<td style="width:50%" align="left">
				<select name="city">
					<?php
						include("dbconfig.php");
						$q = mysqli_query($cn,"select * from city");
						while ($r = mysqli_fetch_array($q))
						{
							echo "<option  value='".$r[1]."' name='city'>".$r[1]."</option>";	
						}
					?>
				</select>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td></td>
				<td style="width:50%" align="left"><input type="submit" name="submit" value="Submit">
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
	include("dbconfig.php");
	$q = mysqli_query($cn,"select * from hospital");
	echo "<table border=1 align='center' bordercolor='#FFFFFF' bgcolor='#C0C0C0'>";
	echo "<tr><td><b>ID</td><td><b>Hospital Name</td><td><b>Contact Number</td><td><b>Hospital Address</td><td><b>City</td><td><b>Update🔃</td><td><b>Delete🥛</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td><form method='POST' action='hospitalupd1.php'><input type='hidden' name='id' value='".$r[0]."'><input type='submit' name='update' value='Update🔃'></form></td><td><form method='POST' action='hospitaldel.php'><input type='hidden' name='id' value='".$r[0]."'><input type='submit' name='delete' value='Delete🥛'></form></td>";
	}
	echo "</table>";	

	include("footer.php");
?>

