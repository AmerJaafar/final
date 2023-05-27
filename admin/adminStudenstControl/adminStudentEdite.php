<?php include_once '../partials/header.php' ?>

<div class="adminControl adminTeacherControl">
    <div class="links">
        <h3>Admin - Home - Edite Student</h3>
    </div>
    <?php include_once '../partials/blocks.php' ?>

    <?php

$sid = explode("=", $_SERVER["QUERY_STRING"]);
if (isset($_POST['edit'])) {
    $sName = $_POST['name'];
    $sEmail = $_POST['email'];
    $sPassword = $_POST['password'];
    $sPhone = $_POST['phone'];

    $query = "UPDATE tbl_student SET name='$sName', email='$sEmail', password='$sPassword', phone='$sPhone' WHERE _id='$sid[1]'";

    if (mysqli_query($connection, $query)) {
        header('Location: adminStudent.php');
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}
?>

    <div class="form-container">
        <form action="#" method="post">
            <?php
            $sid = explode("=", $_SERVER["QUERY_STRING"]);
            if (isset($_POST['edit'])) {
                $sName = $_POST['name'];
                $sEmail = $_POST['email'];
                $sPassword = $_POST['password'];
                $sPhone = $_POST['phone'];

                $query = "UPDATE tbl_student SET name='$sName', email='$sEmail', password='$sPassword', phone='$sPhone' WHERE _id='$sid[1]'";

                if (mysqli_query($connection, $query)) {
                    header('Location: adminStudent.php');
                } else {
                    echo "Error updating record: " . mysqli_error($connection);
                }
            }

            $student_query = "SELECT `name`, `email`, `password`, `phone` FROM tbl_student WHERE _id=$sid[1]";
            $student_result = mysqli_query($connection, $student_query);

            if (mysqli_num_rows($student_result) > 0) {
                while ($student = mysqli_fetch_array($student_result)) {
            ?>
                    <div class="input-container">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="studentName" placeholder="Enter Student Name.." value="<?php echo $student['name'] ?>" required>
                    </div>
                    <div class="input-container">
                        <label for="Email">Email:</label>
                        <input type="Email" name="email" id="studentEmail" placeholder="Enter Student Email.." value="<?php echo $student['email'] ?>" required>
                    </div>
                    <div class="input-container">
                        <label for="Phone">Phone:</label>
                        <input type="tel" name="phone" id="studentPhone" placeholder="Enter Student Phone.." value="<?php echo $student['phone'] ?>" required>
                    </div>
                    <div class="input-container">
                        <label for="Password">Password:</label>
                        <input type="text" name="password" id="studentPassword" placeholder="Enter Student Password.." value="<?php echo $student['password'] ?>" required>
                    </div>
                    <!-- <div class="input-container">
                        <label for="image">image:</label>
                        <input type="file" name="image" id="studentImage">
                    </div> -->

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