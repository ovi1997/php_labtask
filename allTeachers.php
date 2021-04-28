<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
include 'partials/header.php';
include 'partials/innerSidebar.php';
include_once "models/config.php";

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$connection) {
    echo mysqli_error($connection);
    throw new Exception("Database cannot Connect");
}
$query = "SELECT * FROM users WHERE user_type='teacher'";
$result = mysqli_query($connection, $query);
?>

<div>
    <h1>All Teachers</h1>
</div>

<section>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Gender</th>
                <th>User Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($class = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $class['name']; ?> </td>
                    <td><?php echo $class['email']; ?> </td>
                    <td><?php echo $class['dob']; ?> </td>
                    <td><?php echo $class['address']; ?> </td>
                    <td><?php echo $class['gender']; ?> </td>
                    <td><?php echo $class['user_type']; ?> </td>

                    <td>
                        <a href="edit_user.php?id=<?= $class['id'] ?>"><button type="submit">Edit</button></a>
                        <form method="post" onclick="return confirm('Are you sure?')" action="deleteTeacher.php?id=<?= $class['id'] ?>">
                            <button type="submit">Remove</button>
                        </form>
                    </td>

                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>


<?php
include 'partials/footer.php';
?>