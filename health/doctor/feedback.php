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

	<form method="POST" action="feedbackpro.php" style=" padding-top:70px;padding-bottom:70px;padding-left:100px;padding-right:100px;">
	<table style="width:100%" "height=100" align="center" bgcolor="#C0C0C0" border="1" bordercolor="#000000">
	<trstyle ="width:100%" valign="top">
	<td style="width:100%;color:#000000;font-size:36px;" colspan="2" align="center">
	<h1 align="center">FeedBack Form</h1>
		 		<br>
		<table style ="width:auto height:auto"border="0" bordercolor="white">

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Enter Name :</font> </h2></td>
				<td style="width:50%" align="left"><input type="text" name="nm" placeholder="Enter Name Hear" required size=30></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Mobile Number :</font></h2></td>
				<td style="width:50%" align="left"><input type="text" name="mno" placeholder="Enter Mobile Number Hear" required size=30></td>
		</tr><tr></tr><tr></tr>

		<tr style="width:100%">
				<td style="width:50%; height:50px" align="Left"><h2><font color=#000000>Enter Feedback  :</font></h2></td>
				<td style="width:50%" align="left"><input type="text" name="feedback" placeholder="Enter Feedback Hear" required size=30></td>
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