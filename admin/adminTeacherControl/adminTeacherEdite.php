<?php include_once '../partials/header.php';

$tid = explode("=", $_SERVER["QUERY_STRING"]);
if (isset($_POST['edit'])) {
    $sName = $_POST['name'];
    $sEmail = $_POST['email'];
    $sPassword = $_POST['password'];
    $sPhone = $_POST['phone'];

    $query = "UPDATE tbl_teacher SET name='$sName', email='$sEmail', password='$sPassword', phone='$sPhone' WHERE _id='$tid[1]'";

    if (mysqli_query($connection, $query)) {
        header('Location: adminTeacher.php');
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}
?>
<div class="adminControl adminTeacherControl">
    <div class="links">
        <h3>Admin - Home - Edit Teacher</h3>
    </div>
    <?php include_once '../partials/blocks.php' ?>

    <div class="form-container">
    <form action="#" method="post">
            <?php
            $teacher_query = "SELECT `name`, `email`, `password`, `phone` FROM tbl_teacher WHERE _id=$tid[1]";
            $teacher_result = mysqli_query($connection, $teacher_query);

            if (mysqli_num_rows($teacher_result) > 0) {
                while ($teacher = mysqli_fetch_array($teacher_result)) {
            ?>
                    <div class="input-container">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="teacherName" placeholder="Enter Teacher Name.." value="<?php echo $teacher['name'] ?>" required>
                    </div>
                    <div class="input-container">
                        <label for="Email">Email:</label>
                        <input type="Email" name="email" id="teacherEmail" placeholder="Enter Teacher Email.." value="<?php echo $teacher['email'] ?>" required>
                    </div>
                    <div class="input-container">
                        <label for="Phone">Phone:</label>
                        <input type="tel" name="phone" id="teacherPhone" placeholder="Enter Teacher Phone.." value="<?php echo $teacher['phone'] ?>" required>
                    </div>
                    <div class="input-container">
                        <label for="Password">Password:</label>
                        <input type="text" name="password" id="teacherPassword" placeholder="Enter Teacher Password.." value="<?php echo $teacher['password'] ?>" required>
                    </div>
                    <div class="input-container">
                        <label for="image">image:</label>
                        <input type="file" name="image" id="teacherImage">
                    </div>

            <?php
                }
            }
            ?>
            <input class="add" type="submit" value="Edit" name="edit">
        </form>
    </div>



</div>
</div>
</body>

</html>