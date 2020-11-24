<?php 
    $name="";
    $err_name="";
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
    $email="";
    $err_email="";
    $contact="";
    $err_contact="";
    $gender="";
    $err_gender="";
	$city="";
	$err_city="";

    $has_err=false;
    if(isset($_POST["register"])){
        
        if(empty($_POST["name"])){
            $err_name="Name Required";
            $has_err=true;
        }
        else{
            $name=htmlspecialchars($_POST["name"]);
        }
       
        if(empty($_POST["uname"])){
            $err_uname="Username Required";
            $has_err=true;
        }
        elseif((strlen($_POST["uname"])<6)){
            $err_uname="Username must be 6 characters long";
            $has_err=true;
        }
        elseif(strpos($_POST["uname"]," ")){
            $err_uname="Username can not contain any space!";
            $has_err=true;
        }
        else{
            $uname=htmlspecialchars($_POST["uname"]);
        }
        
        if(empty($_POST["pass"])){
            $err_pass="Password Required";
            $has_err=true;
        }
        elseif(strlen($_POST["pass"])<8){
            $err_pass="Password must be 8 characters long";
            $has_err=true;
        }
        elseif(!strpos($_POST["pass"],"#") || !strpos($_POST["pass"],"?")){
            $err_pass="Password must contain '#' or '?'.";
            $has_err=true;
        }
        elseif(!strpos($_POST["pass"],"1")){
            $err_pass="Password must contain 1 numeric";
            $has_err=true;
        }
        elseif(strtolower($_POST["pass"])==$_POST["pass"] || strtolower($_POST["pass"])==$_POST["pass"]){
            $err_pass="Password must contain 1 Upper and Lowercase letter.";
            $has_err=true;
        }
        else{
            $pass=htmlspecialchars($_POST["pass"]);
        }
       
        if(empty($_POST["cpass"])){
            $err_cpass="Confirm Password Required";
            $has_err=true;
        }
        elseif(!strcmp($_POST["cpass"],strtoupper($_POST["pass"]))){
            $err_cpass="Password and Confirm Password must be same.";
            $has_err=true;
        }
        
        if(empty($_POST["email"])){
            $err_email="Email Required";
            $has_err=true;
        }
        elseif(strpos($_POST["email"],"@") && strpos($_POST["email"],".")){
            if(strpos($_POST["email"],"@") < strpos($_POST["email"],".")){
                $email=htmlspecialchars($_POST["email"]);
            }
            else{
                $err_email="'@' Must be before '.'.";
                $has_err=true;
            }
        }
        else{
            $err_email="Email must contain '@' and '.'.";
            $has_err=true;
        }
        if(empty($_POST["contact"]))
		{
			$err_contact = "Contact no. required";
		}
		else if(!is_numeric($_POST["contact"]))
		{
			$err_contact = "Numeric charecter required";
		}
		else{ $number = htmlspecialchars($_POST["contact"]);
		}
        if(!isset($_POST["gender"])){
			$err_gender="Gender Required.";
			$has_err=true;
        }
        else{
            $gender=htmlspecialchars($_POST["gender"]);
        }
		if(isset($_POST["city"])){
            $dobDay=htmlspecialchars($_POST["city"]);
        }
        else{
            $err_city="Please Select city";
            $has_err=true;
        }
	     
	}
	
?>