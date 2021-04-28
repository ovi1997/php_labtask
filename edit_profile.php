<?php
session_start();
include 'partials/header.php';
include 'partials/innerSidebar.php';

include 'Controller/editProfile_core.php';
include_once "models/config.php";

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$connection) {
    echo mysqli_error($connection);
    throw new Exception("Database cannot Connect");
}
$query = "SELECT * FROM users WHERE email='{$_SESSION["email"]}'";
$result = mysqli_query($connection, $query);
?>
<div>
    <div>
        <h1>Update Profile</h1>
    </div>
    <section>
        <form action="edit_profile.php" method="POST" enctype="multipart/form-data">
            <?php foreach ($result as $user) { ?>
                <div>
                    <div>
                        <label>Name</label>
                        <input type="text" value="<?php echo $user['name']; ?>" name="name" placeholder="First name">
                        <?php echo $err_name; ?>
                    </div>
                    <div>
                        <label>DOB</label>
                        <input type="date" value="<?php echo $user['dob']; ?>" name="dob" placeholder="Last name">
                        <div>

                        </div>
                        <?php echo $err_dob; ?>
                    </div>
                    <div>
                        <label>Your Image</label>
                        <input type="file" name="image" value="">
                        <?php echo $err_dob; ?>
                    </div>
                </div>
                <div>
                    <div>
                        <label>Address</label>
                        <input type="text" value="<?php echo $user['address']; ?>" name="address" placeholder="City">
                        <?php echo $err_address; ?>
                    </div>
                    <div>
                        <label>Gender: </label>
                        <span><?php echo $err_gender; ?></span>
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
                        <input type="number" value="<?php echo $user['phone_no']; ?>" name="phone_no" placeholder="Phone No">
                        <?php echo $err_phone_no; ?>
                    </div>

                    <div>
                        <label>Institution Name</label>
                        <input type="text" value="<?php echo $user['institutionName']; ?>" name="institutionName" placeholder="Institution Name">
                        <?php echo $err_institutionName; ?>
                    </div>
                    <div>
                        <label>Designation</label>
                        <input type="text" value="<?php echo $user['designation']; ?>" name="designation" placeholder="Designation">
                        <div>

                        </div>
                        <?php echo $err_designation; ?>
                    </div>
                    <div>
                        <label>Institution Address</label>
                        <input type="text" value="<?php echo $user['institutionAddress']; ?>" name="institutionAddress" placeholder="Institution Address">
                        <div>
                        </div>
                        <?php echo $err_institutionAddress; ?>
                    </div>

                    <input type="hidden" name="action" value="addManager">
                </div>
                <button type="submit">Update</button>
            <?php } ?>
        </form>
    </section>
</div>
<?php
include 'partials/footer.php';
?>