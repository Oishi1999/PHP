 <?php
     /*$file = fopen("data.txt","r");
	 $i=1;
     while(! feof($file)){
		  $line = fgets($file);
		  $info = explode(" ",$line);
		  echo "usename: $info[0]  ";
		  echo "password: $info[1]  ";
		  echo "type: $info[2]    ";
		  
		  
		 
	 }*/
	 $xml=simplexml_load_file("data.xml");
	$users =  $xml->user;
	$flag=true;
 foreach ($users as $user){
	 echo "usename: $user->usename <br>";
	  echo "password: $user->password <br>";
	   echo "type: $user->type <br>";
	 if($flag){
		 header("location:dashboard.php");
		 
	 }else{
		 echo "invalid";
	 }
	 
	 
 }
 ?>