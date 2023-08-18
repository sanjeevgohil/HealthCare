<html>
<head>
<style>
	.menu
	{
		padding:10px 10px 10px 10px;
		text-align:center;
		background-color:#C0C0C0;

		color:#000000;
		width:15%;
	
	}
	.smenu
	{
		margin:8px 8px 8px -8px;
		display:none;
		position:absolute;
		padding:8px 8px 8px 8px;	
		background-color:#000000;
		color:#000000;
		z-index:1;
	}
	.submenu
	{
		padding:6px 6px 6px 6px;
		text-align:center;
		background-color:white;
		color:black;
		z-index:1;
	}
	.menu:hover .smenu
	{
		display:block;
	}
	button {
   		 background-color: #C0C0C0;
  		 color: white;
  		 padding: 10px 20px;
  		 margin: 8px 0;
   		 border: none;
   		 cursor: pointer;
  		  width: 100%;
		}
	.l
	{
		color:#000000;
		text-decoration:none;
	}


</style>
</head>
<table>
<body>
		<table style="width:100%; background-color:#000000">	
		<tr>
			<td><td class="menu"><b>Home
				<table class="smenu">
					<tr>
    					<td class ="submenu"><a href="index.php" style="text-decoration:none"><font color="#000000"><b>Home</b></font></a></td>
					</tr>
				</table>
					
		<td class ="menu"><b>Doctor
			<table class="smenu">
				<tr>
					<td class="submenu"><a href="doctor.php" style="text-decoration:none"><font color="#000000"><b>Doctor</b></font></a></td>
				</tr>
				
				
			</table>
			</td>
			<td class ="menu"><b>Patient
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="patient.php" style="text-decoration:none"><font color="#000000"><b>Patient</b></font></a></td>
				</tr>
				

			</table>
				</td>

			<td class ="menu"><b>Disease
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="disease.php" style="text-decoration:none"><font color="#000000"><b>Add Disease</b></font> </a></td>
				</tr>

			</table>
			</td>	

			<td class ="menu"><b>Appoinment
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="appointment.php" style="text-decoration:none"><font color="#000000"><b>Appoinment</b></font> </a></td>
				</tr>

			</table>
			</td>
		
			<td class ="menu"><b>Hospital
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="hospital.php" style="text-decoration:none"><font color="#000000"><b>Add Hospital</b></font></a></td>
				</tr>

				
			</table>	
			</td>

			<td class ="menu"><b>City
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="city.php" style="text-decoration:none"><font color="#000000"><b>Add City</b></font></a></td>
				</tr>

				
			</table>	
			</td>

			<td class ="menu"><b>Specialist
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="specialist.php" style="text-decoration:none"><font color="#000000"><b>Add Specialist </b></font></a></td>
				</tr>

				
			</table>	
			</td>

			<td class ="menu"><b>Faq
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="faq.php" style="text-decoration:none"><font color="#000000"><b>FAQ</b></font></a></td>
				</tr>				
			</table>	
			</td>

			<td class ="menu"><b>Blog
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="blog.php" style="text-decoration:none"><font color="#000000"><b>Blog</b></font></a></td>
				</tr>				
			</table>	
			</td>

			<td class ="menu"><b>FeedBack
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="feedback.php" style="text-decoration:none"><font color="#000000"><b>FeedBack</b></font></a></td>
				</tr>
			</table>	
			</td>

			<td class ="menu"><b>LogOut
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="logout.php" style="text-decoration:none"><font color="#000000"><b>LogOut</b></font></a></td>
				</tr>
			</table>	
			</td>
		</table>
</body>
</html>






