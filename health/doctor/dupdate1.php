<?php
	include("header.php");

	include("dbconfig.php");
	$id = $_POST['id'];
	$q = mysqli_query($cn,"select * from doctor where id='$id'");
	$r = mysqli_fetch_row($q);

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

	<form method="POST" action="dupdate2.php" style=" padding-top:70px;padding-bottom:70px;padding-left:100px;padding-right:100px;" enctype="multipart/form-data">
	<table style="width:100%" "height=100" align="center" bgcolor=#C0C0C0 border=1 bordercolor=#000000>
	<trstyle ="width:100%" valign="top">
	<td style="width:100%;color:#000000;font-size:36px;" colspan="2" align="center">
	<h1 align="center"><font color=#000000>Doctor Details Update</font></h1>
		 		<br>
		<table style ="width:auto height:auto"border="0" bordercolor="white">
			
		<tr>
				<td><input type='hidden' name='id' value="<?php echo $id ?>"></td>
		</tr> 

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Name :</font> </h2></td>
				<td> <input type="text" name="nm" value="<?php echo $r[1]; ?>"></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>UserName :</font></h2></td>
				<td> <input type="text" name="unm" value="<?php echo $r[2]; ?>"></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Password :</font></h2></td>
				<td> <input type="text" name="pass" value="<?php echo $r[3]; ?>"></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Specialist :</font></h2></td>
				<td style="width:50%" align="left">
				<select name="spe">
					<?php
						$cn = mysqli_connect("localhost","root","","health");
						$q = mysqli_query($cn,"select * from specialist");
						while ($r1 = mysqli_fetch_array($q))
						{
							echo "<option  value='".$r1[1]."' name='spe'>".$r1[1]."</option>";	
						}
					?>
				</select>	
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Qualification  :</font></h2></td>
				<td> <input type="text" name="edu" value="<?php echo $r[5]; ?>"></td>				
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Experience :</font></h2></td>
				<td> <input type="text" name="exp" value="<?php echo $r[6]; ?>"></td>				
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Mobile Number :</font></h2></td>
				<td> <input type="text" name="mno" value="<?php echo $r[7]; ?>"></td>				
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Enter City  :</font></h2></td>
				<!--<td> <input type="text" name="city" value="<?php echo $r[8]; ?>"></td>-->
				<td style="width:50%" align="left">
				<select name="city">
					<?php
						$cn = mysqli_connect("localhost","root","","health");
						$q = mysqli_query($cn,"select * from city");
						while ($r1 = mysqli_fetch_array($q))
						{
							echo "<option  value='".$r1[1]."' name='city'>".$r1[1]."</option>";	
						}
					?>
				</select>				
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000> Photo :</font></h2></td>
				<td> <input type="file" name="photo" value="<?php echo $r[9]; ?>"></td>				
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

<?php include("footer.php"); ?>






