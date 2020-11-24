<?php
  $Casename="";
  $err_casename="";
  $lawyername="";
  $err_lawyername="";
  $Case_Status="";
  $err_CaseStatus="";


?>




<html>
  <head>
 <title>Client</title>
  <link rel="stylesheet" href="css/style.css">
  </head>
     <body>
	 <div class="client">
	 <img src="img/justicelogo.png" alt="">
	 </div>
	 <div class="fclient">
	      <h3>case1</h3>
		      <form action="" method="post">
			      <table>
				  
				      <tr>
						<td>Case Name:</td>
						<td><span style="color:red;"><?php echo $err_casename;?></span></td>
						</tr>
						
						
						
						<tr>
						<td>lawyer Name:</td>
						<td><span style="color:red;"><?php echo $err_lawyername;?></span></td>
						</tr>
						
						
						<tr>
						<td>Case Status:</td>
						<td><span style="color:red;"><?php echo $err_CaseStatus;?></span></td>
						</tr>
					
					
					
					
					<tr>
						<td colspan="2" align="right">
							 <a href="schedule.php"> <input type ="button" name ="" value ="schedule"></a>
							 <a href="view profile.php"> <input type ="button" name ="" value ="view profile"></a>
							  <a href="payment.php"> <input type ="button" name ="" value ="payment"></a>
							   <a href="Add lawyer.php"> <input type ="button" name ="" value ="Add lawyer"></a>
							 
							 
						</td>
					</tr>
					
					
					
					
					
					
					
					
					
				  </table>
				  
			   </form>
			   </div>
			  
 	 </body>




</html>