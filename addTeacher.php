<?php

session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
include 'partials/header.php';
include 'partials/innerSidebar.php';
include 'Controller/addTeacher_core.php';
?>
<div>
    <div>
        <h1>Add Teacher</h1>
    </div>
    <section>
        <form action="addTeacher.php" onsubmit="return formValidate();" method="POST">
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
                <input type="hidden" name="action" value="addTeacher">
                <div>
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                    <div>
                        <span id="err_confirm_pass"></span>
                    </div>
                    <div>
                        <?php echo $err_confirm_pass; ?>
                    </div>
<!--                     <input type="button" value="Add teacher" onclick="formValidate()">
 -->                    <button type="submit">Add Accountant</button>
                </div>
            </div>
        </form>
    </section>
</div>
<?php
include 'partials/footer.php';
?>