<?php

$ClientName="";
$err_ClientName="";
$CaseType="";
$err_CaseType="";
$HearingTime="";
$err_HearingTime="";





?>







<html>
  <head>
  <title>Schedule</title>
  <link rel="stylesheet" href="css/style.css">
  </head>
     <h1>Schedule</h1>
	 <div class="Schedule">
	 <form action="" method="post">
	     <table>
		 
		 
		 
		 <tr>
			<td>Client Name:</td>
		       <td><span style="color:red;"><?php echo $err_ClientName;?></span></td>
		</tr>
		
		 <tr>
			<td>Case Type:</td>
		       <td><span style="color:red;"><?php echo $err_CaseType;?></span></td>
		</tr>
				
				
				
		 <tr>
			<td>Hearing Time:</td>
		       <td><span style="color:red;"><?php echo $err_HearingTime;?></span></td>
		</tr>
					
		 
		 
		 
		 </table>
		  <h5><a href='client1.php'>Go back</a></h5>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 </form>






</html>