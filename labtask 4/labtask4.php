<?php
$Name = "";
$err_Nname = "";
$uname = "";
$err_uname = "";
$pass = "";
$err_pass = "";
$err_Confirmpassword = "";
$Confirmpassword = "";
$err_Email = "";
$Email = "";
$err_Phone = "";
$Phone = "";
$err_Address="";
$Address = "";
$gender = "";
$err_gender = "";
$bio = "";
$err_bio = "";

error_reporting(E_ALL & E_STRICT);
ini_set('display_errors', '1');
ini_set('log_errors', '0');
ini_set('error_log', './');
if (isset($_POST["submit"])) {
    if (empty($_POST["Name"])) {
        $err_uname = "[Name Required]";
    }
    if (empty($_POST["uname"])) {
        $err_uname = "[Username Required]";
    } elseif (strlen($_POST["uname"]) < 6) {
        $err_uname = "[Username must be 6 charachters long]";
    } elseif (strpos($_POST["uname"], " ")) {
        $err_uname = "[Username should not contain white space]";
    } else {
        $uname = $_POST["uname"];
    }
    if (empty($_POST["pass"])) {
        $err_pass = "[Password Required]";
    } elseif (htmlspecialchars($_POST["pass"])) {
        $err_pass = ["HTML KeyWords Used"];
    } elseif (strlen($_POST["uname"]) < 8) {
        $err_pass = ["[Password must be 8 charachters long"];
    } elseif (!strpos($_POST["pass"], "#")) {
        $err_pass = "[Password should contain special character]";
    } elseif (!is_numeric($_POST["pass"])) {
        $err_pass = "[Password should contain Numeric values]";
    } elseif (!ctype_upper($_POST["pass"])) {
        $err_pass = "[Password should contain UpperCase values]";
    } elseif (!ctype_lower($_POST["pass"])) {
        $err_pass = "[Password should contain LowerCase values]";
    } elseif (strpos($_POST["pass"], " ")) {
        $err_pass = "[Password should not contain white space]";
    } else {
        $pass = $_POST["pass"];
    }
    if (empty($_POST["Email"])) {
        $err_pass = "[must contain @ after .<dot>]";
    }
    if (!isset($_POST["gender"])) {
        $err_gender = "[Please select a gender]";
    } else {
        $gender = $_POST["gender"];
    }

    if (empty($_POST["bio"])) {
        $err_bio = "[Bio Required]";
    } else {
        $bio = $_POST["bio"];
    }
}

?>
<html>

<head></head>

<body>
    <?php
    if (isset($_GET["submit"])) {
        echo htmlspecialchars($_GET["Name"]);
        echo htmlspecialchars($_GET["Username"]);
        echo htmlspecialchars($_GET["Password"]);
        echo htmlspecialchars($_GET["Confirm Password"]);
        echo htmlspecialchars($_GET["Email"]);
        echo htmlspecialchars($_GET["Phone"]);
        echo htmlspecialchars($_GET["Address"]);
        echo htmlspecialchars($_GET["Gender"]);
        echo htmlspecialchars($_GET["Bio"]);
    }

    ?>

    <fieldset align="center">
        <legend align="center"><b>Club Member Registration</b></legend>
        <form action="" method="post">
            <table align="center">
                <tr>

                    <td><span><b>Name</b></span></td>
                    <td>:<input type="text" name="Name" value="<?php echo $Name; ?>">
                        <span><?php echo $err_Name; ?></span>
                    </td>
                  

                </tr>
                <tr>
                    <td><span><b>Username</b></span></td>
                    <td>:<input type="text" name="uname" value="<?php echo $uname; ?>">
                        <span><?php echo $err_uname; ?></span>
                    </td>

                </tr>
                <tr>
                    <td><span><b>Password</b></span></td>
                    <td>:<input type="password" name="pass" value="<?php echo $pass; ?>">
                        <span><?php echo $err_pass; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span><b>Confirm Password</b></span></td>
                    <td>:<input type="password" name="Confirm_password" value="<?php echo $Confirmpass; ?>">
                        <span><?php echo $err_Confirmpass; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span><b>Email</b></span></td>
                    <td>:<input type="text" name="Email" placeholder="email">
                        <span><?php echo $err_Email; ?></span>
                    </td>

                </tr>
                <tr>
                    <td><span><b>Phone</b></span></td>
                    <td>:<input type="text" name="code" placeholder="code" size="3"> - <input type="text" name="Number" placeholder="Number" size="9"></td>
                    <span><?php echo $err_Phone; ?></span>



                </tr>
                <tr>
                    <td><span><b>Address</span></td>
                    <td>: <input type="text" name="Street Address" placeholder="Street Address"> </br> <input type="text" name="city" placeholder="city" size="6"> - <input type="text" name="State" placeholder="State" size="6"> </br> <input type="text" name="postal/Zip Code" placeholder="Postal/Zip Code"></td>
                    <span><?php echo $err_address; ?></span>
                    <span><?php echo $err_Streetaddress; ?></span>
                    <span><?php echo $err_city; ?></span>
                    <span><?php echo $err_state; ?></span>

                </tr>
                <tr>
                    <td><span><b>Birth Date</b></span></td>
                    <td><select name="bdate">
                            <option disabled selected>Date</option>
                            <?php
                            for ($date = 1; $date <= 31; $date++)   echo "<option value = '" . $date . "'>" . $date . "</option>"; ?>
                        </select>

                        <select name="bmonth">
                            <option disabled selected>Month</option>
                            <?php
                            for ($month = 1; $month <= 12; $month++)   echo "<option value = '" . $month . "'>" . $month . "</option>"; ?>
                        </select>


                        <select name="byear">
                            <option disabled selected>Year</option>
                            <?php
                            for ($year = 1985; $year <= 2002; $year++)   echo "<option value = '" . $year . "'>" . $year . "</option>"; ?>
                        </select>

                        <span><?php echo $err_bdate; ?></span>
                    </td>
                    <span><?php echo $err_month; ?></span></td>
                    <span><?php echo $err_year; ?></span></td>

                </tr>
                <tr>
                    <td><span><b>Gender</b></span></td>
                    <td>:<input type="radio" name="gender" value="Male"><span>Male</span>
                        <input type="radio" name="gender" value="Female"><span>Female</span>
                        <span><?php echo "&nbsp " . $err_gender; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span><b>Where did you hear about us</b></span></td>
                    <td><input type="checkbox" name="Where did you hear about us" value="A Friend or Colleague"><span>A Friend or Colleague</span><br>
                        <input type="checkbox" name="Where did you hear about us" value="Google"><span>Google</span><br>
                        <input type="checkbox" name="Where did you hear about us" value="Blog Post"><span>Blog Post</span><br>
                        <input type="checkbox" name="Where did you hear about us" value="News Article"><span>News Article</span>

                        <span><?php echo "&nbsp " . $err_gender; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span><b>Bio</b></span></td>
                    <td>:<textarea name="bio" value="<?php echo $bio; ?>"></textarea>
                        <span><?php echo "&nbsp" . $err_bio; ?></span>
                    </td>
                </tr>
            </table>
            <input type="submit" name="register" value="register">
        </form>
    </fieldset>
</body>

</html>