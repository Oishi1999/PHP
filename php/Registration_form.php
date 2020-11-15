<?php
$gender="";
$err_gender="";
$hobbies="";
$err_hobbies="";
$profession="";
$err_profession="";
$name="";
$err_name="";

$has_error=false;


if(isset ($_post["register"])){
	if(empty($_Post[name])){
		$err_name="name required";
		$has_error=true;
	}
	else{
		$name= $_Post["name"];
	}
}
{
	if(!isset($_Post["gender"])){
		$err_gender="gender required";
		$has_error=true;
		 }
	else{
		$gender= $_Post["gender"];
	}
     if(!isset($_Post["hobbies"])){
		 $err_hobbies="AT least select 1 hobby";
		 $has_error=true;
		 
		 
	 }
	 else{
		 $hobbies=$_Post("hobbies");
	 }
}










?>




<html>
    <head>
	   <title>Registration</title>
	   
	</head>   
            <body>
			 
			    <form  action="" method="post">
				<fieldset>
				<legend>Registration form</legend>
			  
			      <table border="1">
				    <tr>
					  <td>Name:</td>
					  <td><input type="text" placeholder="write your name"></td>
					
					</tr>
					<tr>
					  <td>UserName:</td>
					  <td><input type="text" placeholder="write your user name"></td>
					
					</tr>
					<tr>
					  <td>Email:</td>
					  <td><input type="text" placeholder="write your email"></td>
					
					</tr>
					<tr>
					  <td>Password:</td>
					  <td><input type="passwordt" placeholder="write your password"></td>
					
					</tr>
					<tr>
					
					   <td>Gender:</td>
					        <td>
					  
					         <input type="radio" name="Gender" value="Male"> Male
						      <input type="radio" name="Gender" value="Female"> Female
						
						    </td>
					
					</tr>
					
			  
			    </form>
				<tr>
					
					   <td>Hobbies:</td>
					        <td>
					  
					         <input type="checkbox" name="Hobbies[]" value="swimming"> swimming <br>
						     <input type="checkbox" name="Hobbies[]" value="reading"> reading<br>
							 <input type="checkbox" name="Hobbies[]" value="programming"> programming<br>
							 <input type="checkbox" name="Hobbies[]" value="movies"> movies<br>
						
						    </td>
					
					</tr>
					<tr>
					
					   <td>Profession:</td>
					        <td>
					  
					         <select name="profession">
							    <option disabled="disabled" selected="selected">choose</option>
							    <option value="1">Teacher</option>
								<option value="2">Doctor</option>
								<option value="3">Enginnere</option>
								<option value="4">Govt Officer</option>
								<option value="5">Banking</option>
							 
							 </select>
						
						    </td>
					
					</tr>
					
					<tr>
					
					   <td>Bio:</td>
					        <td>
					  
					         <textarea name="bio"></textarea>
						
						    </td>
					
					</tr>
					<tr>
					
					   <td colspan="3" align="center">
					   <input type= "submit" name="register" value="register">
					   </td>
					        
					
					</tr>
					</table>
		 
		 </fieldset>
		 </form>
		    </body>
  
   




</html>