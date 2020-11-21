<?php

$Fullname="";
$err_Fullname="";
$Username="";
$err_Username="";
$Email="";
$err_Email="";
$Phone="";
$err_Phone="";
$Password="";
$err_Password="";
$NID="";
$err_NID="";
$Birthday="";
$err_Birthday="";
$Gender="";
$err_Gender="";
$Address="";
$err_Address="";






?>






<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="css/style.css">
</head>
    <body>
	  <h1>Profile</h1>
	  <div class="profile">
	     <form action="" method="post">
		     <table>
			 
			 
			        <tr>
						<td>Full Name:</td>
						<td><span style="color:red;"><?php echo $err_Fullname;?></span></td>
					</tr>
					
					
					<tr>
						<td>User Name:</td>
						<td><span style="color:red;"><?php echo $err_Username;?></span></td>
					</tr>
					
					<tr>
						<td>Email:</td>
						<td><span style="color:red;"><?php echo $err_Email;?></span></td>
					</tr>
					
					<tr>
						<td>Phone:</td>
						<td><span style="color:red;"><?php echo $err_Phone;?></span></td>
					</tr>
					
					
					<tr>
						<td>Password:</td>
						<td><span style="color:red;"><?php echo $err_Password;?></span></td>
					</tr>
					
					<tr>
						<td>NID:</td>
						<td><span style="color:red;"><?php echo $err_NID;?></span></td>
					</tr>
					
					<tr>
						<td>Birthday:</td>
						<td><span style="color:red;"><?php echo $err_Birthday;?></span></td>
					</tr>
					
					<tr>
						<td>Gender:</td>
						<td><span style="color:red;"><?php echo $err_Gender;?></span></td>
					</tr>
					
					<tr>
						<td>Address:</td>
						<td><span style="color:red;"><?php echo $err_Address;?></span></td>
					</tr>
					
					<tr>
						<td colspan="2" align="right">
							 <a href="Edit Profile.php"> <input type ="button" name ="" value ="Edit Profile"></a>
							 
							 
						</td>
					</tr>
			 
			 
			 
			 
			 </table>
			  <h5><a href='client1.php'>Go back</a></h5>
		 
		 
		 
		 
		 
		 </form>
		 </div>


    </body>

</html>

