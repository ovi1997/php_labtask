<html>
<head></head>
<body>

<?php
$uname=" ";
$err_uname=" ";
$pass=" ";
$err_pass=" ";
$gender=" ";
$err_gender=" ";
$Hobbies=" ";
$err_Hobbies=" ";
$profession=" ";
$err_profession=" ";
$bio=" ";
$err_bio=" ";

 error_reporting(E_ALL & E_STRICT); ini_set('display_errors', '1');
 ini_set('log_errors', '0'); ini_set('error_log', './');
 if(isset($_POST["submit"]))
 {
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
     elseif(strpos($_POST["pass"]," "))
     {
         $err_pass="[Password should not contain white space]";
     }
     else
     {
         $pass=$_POST["pass"];
     }
     if(!isset($_POST["gender"]))
     {
         $err_gender="[Please select a gender]";
     }
     else
     {
         $gender=$_POST["gender"];
     }
     if(!isset($_POST["Hobbies"]))
     {
         $err_Hobbies="[At least one option must be selected]";
     }
     elseif(count($_POST["Hobbies"])<2)
     {
         $err_Hobbies="[At least 2 options need to be selected]";
     }
     else
     {
        
         $Hobbies=$_POST["Hobbies"];
     }
     if(!isset($_POST["profession"]))
     {
         $err_profession="[This field can not be skipped]";
     }
     else
     {
         $profession=$_POST["profession"];
     }
     if(empty($_POST["bio"]))
     {
         $err_bio="[Bio Required]";
     }
     else
     {
         $bio=$_POST["bio"];
     
     }
  /*if(isset($_POST["submit"]))
    echo "username : " . $_POST["uname"] . "<br>";
    echo "password : " . $_POST["pass"] . "<br>";
    echo "Gender : " . $_POST["gender"] . "<br>";
    echo "Profession : " . $_POST["profession"] . "<br>";
    echo "Submit : ". $_POST["submit"] ."<br>";
    echo "Bio : ".$_POST["bio"] ."<br>";
    $var = $_POST["Hobbies"];
    for($i=0;$i<count($var);$i++){
        echo $var[$i] ."<br>";
    }*/

    ?>
<!--    <table border="1">
         <tr>
              <td colspan="2">group alibaba.com</td>
         </tr>
         <tr>
              <td><b>name</b></td>
              <td><b>id</b></td>
              <td><b>cgpa</b></td>
         </tr>

         <tr>
             <td rowspan="2">ovi</td>
             <td>12</td>
             <td>2.50</td>
         </tr>

         <tr>
             
             <td>13</td>
             <td>3.50</td>
         </tr>

         <tr>
             <td rowspan="2">kotha</td>
             <td>14</td>
             <td>2.90</td>  
         </tr>
         <tr>
             <td>18</td>
             <td>3.45</td>  
         </tr>

    </table>-->

<h1>User Interface</h1>
<form action=" " method="POST">
<table>
    <tr>
        <td><span>username :</span></td>
        <td><input type="text" name="uname"><br></td>
        <span><?php echo $err_uname;?></span></td>
    </tr>
    <tr>
        <td><span>password :</span></td>
        <td><input type="password" name="pass"></td>
        <span><?php echo $err_pass;?></span></td>
    </tr>
    <tr>
        <td><span>Gender :</span></td>
        <td><input type="radio" name="gender" value="male"><span>male</span></td>
        <td><input type="radio" name="gender" value="female"><span>female</span></td>
        <span><?php echo "&nbsp ".$err_gender;?></span></td>
    </tr>
    <tr>
         <td> <span>Hobbies :</span></td>
         <td><input type="checkbox" value="movies" name="Hobbies[]">movies</td>
         <td><input type="checkbox" value="music" name="Hobbies[]">music</td>
         <td><input type="checkbox" value="games" name="Hobbies[]">games</td>
         <td><input type="checkbox" value="garden" name="Hobbies[]">garden</br></td>
         <span><?php echo "&nbsp  ".$err_Hobbies;?></span></td>


    </tr>
    <tr>
         <td><span>profession :</span></td>
         <td>
           :<select name="profession">
           <option>teaching</option>
           <option>cultivating</option>
           <option>farming</option>
           <option>gv work</option>
           <option>shipping</option>
           <option>doctor</option>
           <option>engineer</option>
           <option>architecture</option>
           </select>
           <span><?php echo "&nbsp".$err_profession;?></span>

         </td>
    </tr>
    <tr>
         <td><span>Bio</span></td>
         <td>:<textarea name="bio"></textarea></td>
         <span><?php echo "&nbsp".$err_bio;?></span></td>
    </tr>
    <tr>
         <td><input type="submit" name="submit" value="submit"></td>
    </tr>
</table>
</form>
</body>