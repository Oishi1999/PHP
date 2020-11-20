<?php include "../php_codes/reg_validation.php" ?>
<html>
 <head></head>
    <body>
	  <form action="" method="post">
	    <table>
		  <tr>
		     <td>username:</td>
			 <td><input type="text" value="<?php echo $uname?>" name="uname"></td>
			  <td><span style="color:red"> *<?php echo $err_uname;?></span></td>
		  </tr>		
		  
		  <tr>
		     <td>passsword:</td>
			 <td><input type="passsword" value="<?php echo $pass?>" name="pass"><td/>
			 <td><span style="color:red"> *<?php echo $err_pass;?></span></td>
		  </tr>	
		  <tr>
              <td colspan="2" align="right">
			  <input type="submit" name="register" value="register"></td>
			  
		  </tr>
		  
		</table> 
	  </form>
 </body>
 </html>