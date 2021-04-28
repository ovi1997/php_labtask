<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
  header("location: dashboard.php");
  exit;
}
include 'Controller/registration_core.php';
?>


<!DOCTYPE html>
<html>

<head>
  <meta>
  <title>BDTutor | Registration </title>
  <meta>
</head>

<body>
  <div>
    <div>
      <a href="index.php"><b>BD</b>Tutors</a>
    </div>
    <div>
      <div>
        <p>Register a new membership</p>
        <p><?php echo $success; ?></p>
        <form action="registration.php" onsubmit="return formValidate();" method="POST">
          <div>
            <label>Name</label>
            <input type="text" name="name" id="name" placeholder="First name">
            <div>
              <span id="err_name"></span>
            </div>
            <div>
              <?php echo $err_name; ?>
            </div>
            <div>
              <label>DOB</label>
              <input type='date' name="dob" id="dob" placeholder="Last name">
              <div>
                <span id="err_dob"></span>
              </div>
              <div>
                <?php echo $err_dob; ?>
              </div>
            </div>
          </div>

          <div>
            <label>Email</label>
            <div>
              <input type="email" name="email" id="email" placeholder="Email">
              <div>
                <span id="err_email"></span>
              </div>
              <div>
                <?php echo $err_email ?>
              </div>
            </div>
          </div>
          <div>
            <label>Address</label>
            <input type="text" name="address" id="address" placeholder="City">
            <div>
              <span id="err_address"></span>
            </div>
            <div>
              <?php echo $err_address; ?>
            </div>
          </div>
          <div>
            <label>Gender: </label>
            <span style="color:red;"><?php echo $err_gender; ?></span>
            <span id="err_gender"> </span>
          </div>
          <div>
            <input type="radio" name="gender" id="gender" value="male">
            <label>Male</label>
          </div>
          <div>
            <input type="radio" name="gender" id="gender" value="female">
            <label>Female</label>
          </div>
          <div>
            <div>
              <label>Phone No</label>
              <input type="number" name="phone_no" id="phone_no" placeholder="Phone No">
              <div>
                <span id="err_phone_no"></span>
              </div>
              <div>
                <?php echo $err_phone_no; ?>
              </div>
              <div>
                <label>Password</label>
                <input type="password" name="password" id="password" placeholder="password">
                <div>
                  <span id="err_pass"></span>
                </div>
                <div>
                  <?php echo $err_pass; ?>
                </div>
              </div>
            </div>
            <input type="hidden" name="action" value="registration">
            <div>
              <label>Confirm Password</label>
              <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
              <div>
                <span id="err_confirm_pass"></span>
              </div>
              <div>
                <?php echo $err_confirm_pass; ?>
              </div>
              <div class="input-group mb-3">
                <div class="dropdown">
                  <select class="form-control" name="user_type">
                    <option selected>Choose User Type</option>
                    <option value="teacher">Teacher</option>
                    <option value="accountant">Accountant</option>
                    <option value="student">Student</option>
                  </select>
                </div>
                <span><?php echo $err_user_type; ?></span>
              </div>
              <!--  <input type="button" value="Add Accountant" onclick="formValidate()"> -->
              <button type="submit">Add user</button>
            </div>
          </div>
        </form>
        <a href="login.php">I already have a membership</a>
      </div>
    </div>
  </div>
</body>
<script language="JavaScript" type="text/javascript">
  function get(id) {
    return document.getElementById(id);
  }

  function formValidate() {
    refresh();
    var hasError = false;
    console.log(name);
    if (get("name").value == "") {
      get("err_name").innerHTML = "*Name required";
      get("err_name").style.color = "red";
      hasError = true;
    }
    if (get("dob").value == "") {
      get("err_dob").innerHTML = "*Date Of Birth required";
      get("err_dob").style.color = "red";
      hasError = true;
    }
    var email = get("email")
    if (email.value == "") {
      get("err_email").innerHTML = "*Email required";
      get("err_email").style.color = "red";
      hasError = true;
    }
    if (get("address").value == "") {
      get("err_address").innerHTML = "*Address required";
      get("err_address").style.color = "red";
      hasError = true;
    }
    /*  var gender = document.getElementByName("gender").innerHTML;
     for (var i = 0; i < gender.length; i++) {
         if (gender[i].checked) {
             hasError;
         } else {
             get("err_gender").innerHTML = "*Gender required";
             get("err_gender").style.color = "red";
             hasError = true;
         }
     } */
    if (get("phone_no").value == "") {
      get("err_phone_no").innerHTML = "*Phone Number required";
      get("err_phone_no").style.color = "red";
      hasError = true;
    }
    var pass = get("password")
    if (pass.value == "") {
      get("err_pass").innerHTML = "*password required";
      get("err_pass").style.color = "red";
      hasError = true;
    }
    if (get("confirm_password").value == "") {
      get("err_confirm_pass").innerHTML = "*Confirm password required";
      get("err_confirm_pass").style.color = "red";

      hasError = true;
    }
    return !hasError;
  }

  function refresh() {
    get("err_name").innerHTML = "";
    get("err_dob").innerHTML = "";
    get("err_email").innerHTML = "";
    get("err_address").innerHTML = "";
    get("err_gender").innerHTML = "";
    get("err_phone_no").innerHTML = "";
    get("err_pass").innerHTML = "";
    get("err_confirm_pass").innerHTML = "";
  }
</script>

</html>