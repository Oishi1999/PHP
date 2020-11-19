<?php

    $username="";
	$password="";
	$err_username="";
	$err_password="";
	
	$haserror=false;
	 

  if(isset($_POST["login"])){
         if(empty($_POST["username"])){
			 $err_username="username required";
			 $haserror=true;
			 }
			 else if(strlen($_POST["username"]) <6){
				 $err_username="username must be 5 characters";
				  $haserror=true;
				 
			 }
		 else{
				  $username=$_POST["username"];
				  
				  }
		 if(empty($_POST["password"])){
			 $err_password="password required";
			 $haserror=true;
			 
			  }
			   else if(strlen($_POST["password"]) <5){
				 $err_username="username must be 6 characters";
			   $haserror=true;
			   }
		 else{
				  $password=$_POST["password"];
				  }
				  if(!$haserror){
					  
					  echo $username ." ". $password;
					  
				  }
				  else{
					 // echo $err_username . "<br>";
					  //echo $err_password . "<br>";
				  }
   }
		 

?>
<html>

   <head>
      <title>login form</title>
 
   </head>
    <body>  
        
          <h1>login form</h1>
	    
	         <form action= "" method="POST" >
			     <table >
				    <tr>
					  <td>username:</td>
					  <td><input type="text" name="username" value="<?php echo $username;?>" placeholder="write your user name">
					     <span><?php  echo $err_username;?></span>
					  
					  
					  </td>
					
					</tr>
					
					<tr>
					  <td>password:</td>
					  <td> <input  name="password" type="password" value="<?php echo $password;?>" placeholder="write your user password">
					       <span><?php  echo $err_password;?></span>
					  
					  </td>
					
					</tr>
					<tr>
					  
					  <td colspan="2" align="right">
					  <a href="Registration.html" target="_blank">Not Registered yet?</a> &nbsp; &nbsp; &nbsp
					  <input type= "submit" name="login" value="login">
					  </td>
					
					</tr>
					 
					 </table>
					 </form>
			      
		        
		         </body>

</html>
