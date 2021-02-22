
<?php


    
    $Name="";
    $err_Nname="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
    $err_Confirmpassword="";
    $Confirmpassword="";
    $err_Email="";
    $Email="";
    $gender="";
	$err_gender="";
	$Hobbies="";
	$bio="";
	$err_bio="";

	 error_reporting(E_ALL & E_STRICT); ini_set('display_errors', '1');
	 ini_set('log_errors', '0'); ini_set('error_log', './');
	 if(isset($_POST["submit"]))
	 { 
         if(empty($_POST["Name"]))
        {
            $err_uname="[Name Required]";
        }
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[Username Required]";
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Username must be 6 charachters long]";
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[Username should not contain white space]";
		 }
		 else
		 {
			 $uname=$_POST["uname"];
		 }
		 if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
		 }
		
         if(empty($_POST["Confirm password"]))
		 {
			 $err_pass="[Confirm Password Required]";
		 }
         if(empty($_POST["Email"]))
		 {
			 $err_pass="[must contain @ after .<dot>]";
		 }
         if(!isset($_POST["gender"]))
		 {
			 $err_gender="[Please select a gender]";
		 }
		 else
		 {
			 $gender=$_POST["gender"];
		 }

		 if(empty($_POST["bio"]))
		 {
			 $err_bio="[Bio Required]";
		 }
		 else
		 {
			 $bio=$_POST["bio"];
		 
         }
        
        
	 }

		?>
<html>
	<head></head>
	<body>
    <?php
if(isset($_GET["submit"]))
{
    echo htmlspecialchars($_GET["Username"]);
}

    ?>
    
    <fieldset>
		<legend><b>Cloud Member Registration</b></legend>
		<form action="" method="post">
			<table>
            <tr>
					<td><span><b>Name</b></span></td>
					<td>:<input type="text" name="Name" value="<?php echo $Name;?>">
					<span><?php echo $err_Name;?></span></td>

				</tr>
				<tr>
					<td><span><b>Username</b></span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>">
					<span><?php echo $err_uname;?></span></td>

				</tr>
				<tr>
					<td><span><b>Password</b></span></td>
					<td>:<input type="password" name="pass" value="<?php echo $pass;?>">
					<span><?php echo $err_pass;?></span></td>
				</tr>
                <tr>
					<td><span><b>Confirm Password</b></span></td>
					<td>:<input type="Confirm password" name="Confirm password" value="<?php echo $Confirmpass;?>">
					<span><?php echo $err_Confirmpass;?></span></td>
				</tr>
                <tr>
					<td><span><b>Email</b></span></td>
					<td>:<input type="text" name="Email" placeholder="email">
					<span><?php echo $err_Email;?></span></td>

				</tr>
                <tr>
					<td><span><b>Phone</b></span></td>
					<td>:<input type="text" name="code" placeholder="code">
                    <td>- <input type="text" name="Number" placeholder="Number">
					<span><?php echo $err_Phone;?></span></td>
                    <span><?php echo $err_code;?></span></td>
					<span><?php echo $err_number;?></span></td>


				</tr>
                <tr>
					<td><span><b>Address</b></span></td>
                    <td>:<input type="text" name= "Street Address" placeholder ="Street Address"></td>
                    <td><input type="text" name= "city" placeholder="city"> - <input type="text" name= "State" placeholder="State"></td>
                    <td>- <input type="text" name="postal/Zip Code" placeholder="Postal/Zip Code">
                    <span><?php echo $err_address ;?></span>
                    <span><?php echo $err_city ;?></span>
                    <span><?php echo $err_State ;?></span>
                    <span><?php echo $err_postalzipcode ;?></span></td>





				</tr>
                <tr>
					<td><span><b>Gender</b></span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span>
						<span><?php echo "&nbsp ".$err_gender;?></span></td>
				</tr>
                <tr>
					<td><span><b>Where did you hear about us</b></span></td>
					<td><input type="checkbox" name="Where did you hear about us" value="A Friend or Colleague"><span>A Friend or Colleague</span><br>
					    <input type="checkbox" name="Where did you hear about us" value="Google"><span>Google</span><br>
                        <input type="checkbox" name="Where did you hear about us" value="Blog Post"><span>Blog Post</span><br>
					    <input type="checkbox" name="Where did you hear about us" value="News Article"><span>News Article</span>

						<span><?php echo "&nbsp ".$err_gender;?></span></td>
				</tr>
				<tr>
	 				<td><span><b>Bio</b></span></td>
					 <td>:<textarea name="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo "&nbsp".$err_bio;?></span></td>
				</tr>
			</table>
			<input type="submit" name="register" value="submit">
		</form>
    </fieldset>
	</body>
</html>
