<?php

  $uname="";
  $err_uname="";
  $pass="";
  $err_pass=""; 
  $haserror=false;
  
  if(isset($_POST["register"])){
	  if(empty($_POST["uname"])){
		  
		  $err_uname="username required";
		  $haserror=true;
		  
	  }
	  else{
		  $uname=htmlspecialchars($_POST["uname"]);
	  }
	  if(empty($_POST["pass"])){
		  
		  $err_pass="passsword required";
		  $haserror=true;
		  
	  }
	  else{
	  $pass=htmlspecialchars($_POST["pass"]);
	  }
	  if(!$haserror){
		  $users=simplexml_load_file("data.xml");
		  $user =  $users-> addchild("user");
		  $user-> addchild("username",$uname);
		  $user-> addchild("passsword",$pass);
		  $user-> addchild("type","user");
		  
		  echo "<pre>";
		  print_r($users);
		  echo "</pre>";
		  
		  $xml=new DOMDocument("1.0");
		  $xml->preserveWhiteSpace=false;
		  $xml->formatOutput=true;
		  $xml->loadXML($users->asXML());
		  
		  $file= fopen("data.xml","w");
		  fwrite($file,$xml->saveXML());
		  
	  }
	  
	  
  }






?>




 