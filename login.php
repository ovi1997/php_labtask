<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: dashboard.php");
    exit;
}
include 'Controller/login_core.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BDTutors | Log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div>
        <div align="center">
            <a href="index.php">
                <h1><b>BD</b>Tutors</h1>
            </a>
        </div>
        <div>
            <div>
                <form width="50px" action="login.php" onsubmit="return validate();" method="POST">
                    <div class="container">
                        <label for="email"><b>Email</b></label>
                        <input type="email" placeholder="Enter Email" id="email" name="email">
                        <div>
                              <span id="err_email"></span>
                        </div>
                        <div>
                              <?php echo $err_email; ?>
                        </div>
                    </div>
                    <div class="container">
                        <label for="pass"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" id="pass" name="pass">
                        <span id="err_pass"></span>
                        <div>
                                <?php echo $err_pass; ?>
                        </div>
                    </div>
                    <div class="container">
                        <input type="hidden" name="action" value="login">
                        <button type="submit">Login</button>
                    </div>

                </form>
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" class="cancelbtn"><a href="registration.php">Register a new membership</a></button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function get(id) {
        return document.getElementById(id);
    }

    function validate() {
        refresh();
        var hasError = false;
        console.log(email);
        if (email.value == "") {
            get("err_email").innerHTML = "*Email required";
            get("err_email").style.color = "red";
            hasError = true;
        }
        if (get("pass").value == "") {
            get("err_pass").innerHTML = "*password required";
            get("err_pass").style.color = "red";

            hasError = true;
        }
        return !hasError;
    }

    function refresh() {
        get("err_email").innerHTML = "";
        get("err_pass").innerHTML = "";

    }
</script>
</html>