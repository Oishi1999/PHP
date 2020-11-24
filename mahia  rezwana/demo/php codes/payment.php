<?php
$Due="";
$err_Due="";
$PaidAmount="";
$err_PaidAmount="";





?>
<html>
<head>
    <title>Payment Details</title>
	  <link rel="stylesheet" href="css/style.css">
  </head>
     <body>
        <h1>payment</h1>
		 <div class="payment">
		
		<form action="" method="post">
		  <table>
		
		
		 <tr>
			<td>Due:</td>
			  <td><span style="color:red;"><?php echo $err_Due;?></span></td>
		 </tr>
				
				
		<tr>
			<td>Paid:Amount:</td>
			  <td><span style="color:red;"><?php echo $err_PaidAmount;?></span></td>
		</tr>
				
				
			
						
       
  
  </table>
  <h5><a href='client1.php'>Go back</a></h5>
  
  </form>
  </div>

 

</body>
</html>