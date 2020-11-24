<?php
    $reg_pp="";
    $err_reg_pp="";
    $reg_fullname="";
    $err_reg_fullname="";
    $reg_username="";
    $err_reg_username="";
    $reg_email="";
    $err_reg_email="";
    $reg_phone="";
    $err_reg_phone="";
    $reg_pass="";
    $err_reg_pass="";
    $reg_cpass="";
    $err_reg_cpass="";
    $reg_pass="";
    $err_reg_pass="";
	
    
	
    $reg_nid="";
    $err_reg_nid="";
    $reg_dob="";
    $err_reg_dob="";
    $reg_gender="";
    $err_reg_gender="";
    $reg_city="";
    $err_reg_city="";
    $reg_state="";
    $err_reg_state="";
    $reg_zip="";
    $err_reg_zip="";
    $hasError=false;
    if(isset($_POST["reg_button"])){
        //PROFILE PIC VALIDATION
        if(!isset($_POST["reg_pp"])){
            $err_reg_pp="Select a Profile Picture";
            $hasError=true;
        }
        else{
            $reg_pp=htmlspecialchars($_POST["reg_pp"]);
        }
        //FULLNAME VALIDATION
        if(empty($_POST["reg_fullname"])){
            $err_reg_fullname="Full Name Required";
            $hasError=true;
        }
        else{
            $reg_fullname=htmlspecialchars($_POST["reg_fullname"]);
        }
        //USERNAME VALIDATION
        if(empty($_POST["reg_username"])){
            $err_reg_username="User Name Required";
            $hasError=true;
        }
        elseif(strpos($_POST["reg_username"]," ")!=false && strlen($_POST["reg_username"])<8){
            $err_reg_username="Username Cannot Contain Spaces and Must Be >8 Characters";
            $hasError=true;
        }
        else{
            $reg_username=htmlspecialchars($_POST["reg_username"]);
        }
        //EMAIL VALIDATION
        if(empty($_POST["reg_email"])){
            $err_email="Email Required";
            $hasError=true;
        }
        elseif(strpos($_POST["reg_email"],"@") && strpos($_POST["reg_email"],".")){
            if(strpos($_POST["reg_email"],"@") < strpos($_POST["reg_email"],".")){
                $reg_email=htmlspecialchars($_POST["reg_email"]);
            }
            else{
                $err_reg_email="'@' Must be before '.'.";
                $hasError=true;
            }
        }
        else{
            $err_reg_email="Email must contain '@' and '.'.";
            $hasError=true;
        }
        //PHONE VALIDATION
        if(empty($_POST["reg_phone"])){
            $err_reg_phone="Phone Number Required";
            $hasError=true;
        }
        elseif(strlen($_POST["reg_phone"])!=11){
            $err_reg_phone="Phone Number Must be 11 Digits";
            $hasError=true;
        }
        else{
            $reg_phone=$_POST["reg_phone"];
        }
        //PASSWORD VALIDATION
        if(empty($_POST["reg_pass"])){
            $err_reg_pass="Password Required";
            $hasError=true;
        }
        elseif(strlen($_POST["reg_pass"])<8){
            $err_reg_pass="Password must be 8 characters long.";
            $hasError=true;
        }
        elseif(!strpos($_POST['reg_pass'], "1") && !strpos($_POST['reg_pass'], "2") && !strpos($_POST['reg_pass'], "3") && !strpos($_POST['reg_pass'], "4")
            && !strpos($_POST['reg_pass'], "5") && !strpos($_POST['reg_pass'], "6") && !strpos($_POST['reg_pass'], "7") && !strpos($_POST['reg_pass'], "8")
            && !strpos($_POST['reg_pass'], "9") && !strpos($_POST['reg_pass'], "0")) {
            $err_reg_pass="Password must have 1 numeric";
            $hasError=true;
        }
        elseif(strcmp(strtoupper($_POST["reg_pass"]),$_POST["reg_pass"])==0 && strcmp(strtolower($_POST["reg_pass"]),$_POST["reg_pass"])==0){
            $err_reg_pass="Password must contain 1 Upper and Lowercase letter.";
            $hasError=true;
        }
        elseif(strpos($_POST["reg_pass"],"#")==false && strpos($_POST["reg_pass"],"?")==false){
            $err_reg_pass="Password must contain '#' or '?'.";
            $hasError=true;
        }
        
        else{
            $reg_pass=htmlspecialchars($_POST["reg_pass"]);
        }
        //NID VALIDATION
        if(empty($_POST["reg_nid"])){
            $err_reg_nid="NID Required";
            $hasError=true;
        }
        else{
            $reg_nid=htmlspecialchars($_POST["reg_nid"]);
        }
        //DATE OF BIRTH VALIDATION
        if(!isset($_POST["reg_dob"])){
            $err_reg_dob="Birthday Required";
            $hasError=true;
        }
        else{
            $reg_dob=$_POST["reg_dob"];
        }
        //GENDER VALIDATION
        if(isset($_POST["reg_gender"])){
            $reg_gender=$_POST["reg_gender"];
        }
        else{
            $err_reg_gender="Gender Required";
            $hasError=true;
        }
        //ADDRESS VALIDATION
        if(empty($_POST["city"])){
            $err_reg_city="City Required";
            $hasError=true;
        }
        else{
            $reg_city=htmlspecialchars($_POST["city"]);
        }
        if(empty($_POST["state"])){
            $err_reg_state="state Required";
            $hasError=true;
        }
        else{
            $reg_state=htmlspecialchars($_POST["state"]);
        }
        if(empty($_POST["zip"])){
            $err_reg_zip="Zip/Postal Code Required";
            $hasError=true;
        }
        else{
            $reg_state=htmlspecialchars($_POST["zip"]);
        }
        if(!$hasError){
            $users = simplexml_load_file("../../xmldata/users.xml");

            $user = $users->addChild("user");
            $user->addChild("profilepic",$reg_pp);
            $user->addChild("fullname",$reg_fullname);
		      	$user->addChild("username",$reg_username);
            $user->addChild("email",$reg_email);
            $user->addChild("phone",$reg_phone);
            $user->addChild("pass",$reg_pass);
            $user->addChild("nid",$reg_nid);
            $user->addChild("birthday",$reg_dob);
            $user->addChild("gender",$reg_gender);
            $user->addChild("city",$reg_city);
            $user->addChild("state",$reg_state);
            $user->addChild("zip",$reg_zip);
            $user->addChild("type","complainant");

			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());

			$file = fopen("../../xmldata/users.xml","w");
			fwrite($file,$xml->saveXML());
        }
      }


?>

<<html>
    <head>
        <title>Edit Profile</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
	    
		<div class="Editprofile">
        <center>
            <form  action="" method="POST">
                <table>
                    <tr >
                        <td align="right" id="registration-box-style">
                            <center><h4 style="color:Green;">Edit Profile</h4></center>
                            <label for="profile">Profile Picture: </label><input type="file" name="reg_pp" accept="image/*"><span style="color:red;">*<?php echo $err_reg_pp;?></span><br><br>
                            <label for="fullname">Full Name: </label><input type="text" name="reg_fullname" placeholder="Full Name" value="<?php echo $reg_fullname; ?>"><span style="color:red;">*<?php echo $err_reg_fullname;?></span><br><br>
                            <label for="username">User Name: </label><input type="text" name="reg_username" placeholder="User Name" value="<?php echo $reg_username; ?>"><span style="color:red;">*<?php echo $err_reg_username;?></span><br><br>
                            <label for="email">Email: </label><input type="text" name="reg_email" placeholder="Email" value="<?php echo $reg_email; ?>"><span style="color:red;">*<?php echo $err_reg_email;?></span><br><br>
                            <label for="phone">Phone: </label><input type="number" name="reg_phone" placeholder="Phone Number" value="<?php echo $reg_phone; ?>"><span style="color:red;">*<?php echo $err_reg_phone;?></span><br><br>
                            <label for="password">Password: </label><input type="password" name="reg_pass" placeholder="Password"><span style="color:red;">*<?php echo $err_reg_pass;?></span><br><br>
                            
                            <label for="nid">NID: </label><input type="number" name="reg_nid" placeholder="NID" value="<?php echo $reg_nid; ?>"><span style="color:red;">*<?php echo $err_reg_nid;?></span><br><br>
                            <label for="birthday">Birthday: </label><input type="date" name="reg_dob"><span style="color:red;">*<?php echo $err_reg_dob;?></span><br><br>
                            <label for="gender">Gender: </label><input type="radio" name="reg_gender" value="Male"> Male
                            <input type="radio" name="gender" value="Female"> Female<span style="color:red;">*<?php echo $err_reg_gender;?></span><br><br>
                            <label for ="address">City: </label><input type="text" name="city" placeholder="City"><span style="color:red;">*<?php echo $err_reg_city;?></span><br><br>
                            <label for ="address">State:<input type="text" name="state" placeholder="State"><span style="color:red;">*<?php echo $err_reg_state;?></span><br><br>
                            <label for ="address">Zip/Postal:<input type="text" name="zip" placeholder="postal/Zip-Code"><span style="color:red;">*<?php echo $err_reg_zip;?></span><br><br>
                             <a href="client1.php"> <input type ="button" name ="" value ="Save"></a>
                        </td>

                    </tr>
                </table>
            </form>
			</div>
        </center>
    </body>
</html>