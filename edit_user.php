<?php
session_start();
include 'partials/header.php';
include 'partials/innerSidebar.php';
include 'Controller/editUser_core.php';
include_once "models/config.php";

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$connection) {
    echo mysqli_error($connection);
    throw new Exception("Database cannot Connect");
}

$id = isset($_GET['id']) ? $_GET['id'] : '';

$query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($connection, $query);


?>
<div>

    <div>
        <h1>Update User</h1>
    </div>
</div>

<section>
    <form action="edit_user.php" onsubmit="return formValidate();" method="POST">
        <?php foreach ($result as $user) { ?>
            <div>
                <label>Name</label>
                <input type="text" name="name" id="name" value="<?php echo $user['name']; ?>" placeholder="First name">
                <div>
                    <span id="err_name"></span>
                </div>
                <div>
                    <?php echo $err_name; ?>
                </div>
                <div>
                    <label>DOB</label>
                    <input type='date' name="dob" id="dob" value="<?php echo $user['dob']; ?>" placeholder="Last name">
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
                    <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" placeholder="Email">
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
                <input type="text" name="address" id="address" value="<?php echo $user['address']; ?>" placeholder="City">
                <div>
                    <span id="err_address"></span>
                </div>
                <div>
                    <?php echo $err_address; ?>
                </div>
            </div>
            <?php if ($user['gender'] == 'male') { ?>
                <div>
                    <input checked type="radio" name="gender" value="male">
                    <label for="inlineRadio1">Male</label>
                </div>
                <div>
                    <input type="radio" name="gender" value="female">
                    <label>Female</label>
                </div>
            <?php } ?>
            <?php if ($user['gender'] == 'female') { ?>
                <div>
                    <input type="radio" name="gender" value="male">
                    <label>Male</label>
                </div>
                <div>
                    <input checked type="radio" name="gender" value="female">
                    <label>Female</label>
                </div>
            <?php } ?>
            <div>
                <label>Phone No</label>
                <input type="number" name="phone_no" id="phone_no" value="<?php echo $user['phone_no']; ?>" placeholder="Phone No">
                <div>
                    <span id="err_phone_no"></span>
                </div>
                <div>
                    <?php echo $err_phone_no; ?>
                </div>
                <div>
                    <input type="hidden" name="action" value="addUser">
                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                    <!--  <input type="button" value="Add Accountant" onclick="formValidate()"> -->
                    <button type="submit">Edit User</button>
                </div>
            </div>
        <?php } ?>
    </form>
</section>
<?php
include 'partials/footer.php';
?>