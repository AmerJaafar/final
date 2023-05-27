<?php include_once '../partials/header.php';

$cid = explode("=", $_SERVER["QUERY_STRING"]);
if (isset($_POST['edit'])) {
    $sName = $_POST['name'];
    $sNumber = $_POST['coursenr'];
    $sCountTeacher = $_POST['countteach'];

    $query = "UPDATE tbl_course SET name='$sName', coursenr='$sNumber', countteach='$sCountTeacher' WHERE _id='$cid[1]'";

    if (mysqli_query($connection, $query)) {
        header('Location: adminCourses.php');
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}
?>

<div class="adminControl adminTeacherControl">
    <div class="links">
        <h3>Admin - Home -Edite Course</h3>
    </div>
    <?php include_once '../partials/blocks.php' ?>

    <div class="form-container">
        <form action="#" method="post">

            <?php
            $course_query = "SELECT * FROM tbl_course WHERE _id=$cid[1]";
            $course_result = mysqli_query($connection, $course_query);

            if (mysqli_num_rows($course_result) > 0) {
                while ($course = mysqli_fetch_array($course_result)) {
            ?>

                    <div class="input-container">
                        <label for="number">number:</label>
                        <input type="text" name="coursenr" id="courseNumber" placeholder="Enter Course Number.." value="<?php echo $course['coursenr'] ?>" required>
                    </div>
                    <div class="input-container">
                        <label for="Name">Name:</label>
                        <input type="text" name="name" id="courseName" placeholder="Enter course Name.." value="<?php echo $course['name'] ?>" required>
                    </div>
                    <div class="input-container">
                        <label for="teacher">Teacher:</label>
                        <span>Current Value: <?php echo $course['countteach']; ?></span>
                        <select name="countteach" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
            <?php
                }
            }
            ?>

            <input type="submit" value="Save" name="edit" class="add">
        </form>
    </div>



</div>
</div>
</body>

</html>