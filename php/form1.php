<?php

    $clientname="";
	$client_Email="";
	$err_clientname="";
	$err_clientEmail="";
	$client_phone="";
	$err_clientPhone="";
	$client_Address="";
	$err_clientAddress="";
	$client_NID="";
	$err_clientNID="";
	
	
	$haserror=false;
	 

  if(isset($_POST["login"])){
         if(empty($_POST["clientname"])){
			 $err_username="clientname required";
			 $haserror=true;
			 }
			 else if(strlen($_POST["clientname"]) <6){
				 $err_username="clientname must be 5 characters";
				  $haserror=true;
				 
			 }
		 else{
				  $clientname=$_POST["clientname"];
				  
				  }
		 if(empty($_POST["client Email"])){
			 $err_clientEmail="password required";
			 $haserror=true;
			 
			  }
			   else if(strlen($_POST["client Email"]) <5){
				 $err_clientEmai="password must be 6 characters";
			   $haserror=true;
			   }
		 else{
				  $client_Email=$_POST["client Email"];
				  }
				  if(!$haserror){
					  
					  echo $clientname ." ". $client_Email;
					  
				  }
				  
				  
				  
		 if(empty($_POST["client phone"])){
			 $err_clientPhone="clientname required";
			 $haserror=true;
			 }
			 else if(strlen($_POST["client phone"]) <6){
				 $err_clientPhone="clientname must be 5 characters";
				  $haserror=true;
				 
			 }
		 else{
				  $clientPhone=$_POST["client phone"];
				  
				  }
				  if(!$haserror){
					  
					  echo $clientname ." ". $client_Email ." " . $client_Phone ;
					  
				  }
				  
				  
				  
				   if(empty($_POST["client Address"])){
			 $err_clientAddress="clientname required";
			 $haserror=true;
			 }
			 else if(strlen($_POST["client Address"]) <6){
				 $err_clientAddress="clientname must be 5 characters";
				  $haserror=true;
				 
			 }
		 else{
				  $clientAdresse=$_POST["client Address"];
				  
				  }
				  if(!$haserror){
					  
					  echo $clientname ." ". $client_Email ." " . $client_Phone  . " ". $client_Address;
					  
				  }
				  
				  
				   if(empty($_POST["client NID"])){
			 $err_clientNID="clientname required";
			 $haserror=true;
			 }
			 else if(strlen($_POST["client NID"]) <6){
				 $err_clientNID="clientname must be 5 characters";
				  $haserror=true;
				 
			 }
		 else{
				  $clientNID=$_POST["client NID"];
				  
				  }
				  if(!$haserror){
					  
					  echo $clientname ." ". $client_Email ." " . $client_Phone  . " ". $client_Address . " " . client_NID;
					  
				  }
				  
				  
				  
				  
				  
				  else{
					 // echo $err_username . "<br>";
					  //echo $err_password . "<br>";
				  }
   }
		 

?>
<html>

   <head>
      <title>client1</title>
 
   </head>
    <body>  
        
          <h1>client1</h1>
	    
	         <form action= "" method="POST" >
			     <table >
				    <tr>
					  <td>clientname:</td>
					  <td> 
					     <span><?php  echo $err_clientname;?></span>
					  
					  
					  </td>
					
					</tr>
					
					<tr>
					  <td>client Email:</td>
					  <td> <input  name="client Email" type="client Email" value="<?php echo $client_Email;?>" placeholder="client Email">
					       <span><?php  echo $err_clientEmail;?></span>
					  
					  </td>
					
					</tr>
					
					
					<tr>
					  <td>client phone:</td>
					  <td> <input   type="client phone"  value="<?php echo $client_phone;?>" 
					       <span><?php  echo $err_clientPhone;?></span>
					  
					  </td>
					
					</tr>
					
					
					<tr>
					  <td>client Address:</td>
					  <td> <input  name="client Address" type="client Address" value="<?php echo $client_Address;?>" placeholder="client Address">
					       <span><?php  echo $err_clientAddress;?></span>
					  
					  </td>
					
					</tr>
					
						<tr>
					  <td>client NID:</td>
					  <td> <input  name="client NID" type="client NID" value="<?php echo $client_NID;?>" placeholder="client NID">
					       <span><?php  echo $err_clientNID;?></span>
					  
					  </td>
					
					</tr>
					
					<td>Case Details:</td>
					        <td>
					  
					         <textarea name="Case Details"></textarea>
						
						    </td>
					
					</tr>
					
					
					
					<tr>
					  
					  <td colspan="2" align="right">
					  <input type="button" name="Close" value="Close" style="background-color:red">
					  <input type="button" name="Edit" value="Edit" style="background-color:green">
					  </td>
					
					</tr>
					 
					 </table>
					 </form>
			      
		        
		         </body>

</html>
