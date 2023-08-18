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
			<td class ="menu"><b>Profile
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="profile.php" style="text-decoration:none"><font color="#000000"><b>Profile</b></font></a></td>
				</tr>
			</table>	
			</td>
								
			<td class ="menu"><b>Doctor Details
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="doctordetails.php" style="text-decoration:none"><font color="#000000"><b>Doctor Details </b></font></a></td>
				</tr>

			</table>
			</td>
		
			
			<td class ="menu"><b>Hospital 
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="hospital.php" style="text-decoration:none"><font color="#000000"><b>Hospital </b></font></a></td>
				</tr>
				
			</table>	
			</td>

			<td class ="menu"><b>Disease
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="disease.php" style="text-decoration:none"><font color="#000000"><b>Disease </b></font></a></td>
				</tr>
				<tr>
					<td class="submenu"><a href="diseasevideo.php" style="text-decoration:none"><font color="#000000"><b>Video </b></font></a></td>
				</tr>
				
			</table>	
			</td>

			<td class ="menu"><b>FeedBack
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="feedback.php" style="text-decoration:none"><font color="#000000"><b>FeedBack</b></font> </a></td>
				</tr>
			
			</table>
			</td>	
			
			<td class ="menu"><b>FAQ
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="faq.php" style="text-decoration:none"><font color="#000000"><b>FAQ</b></font> </a></td>
				</tr>
			
			</table>
			</td>	

			<td class ="menu"><b>Log Out
			<table  class="smenu">
				<tr>
					<td class="submenu"><a href="logout.php" style="text-decoration:none"><font color="#000000"><b>Log Out</b></font></a></td>
				</tr>
			</table>	
			</td>
				
		</table>
</body>
</html>






