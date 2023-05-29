<?php include_once '../partials/header.php';

if (isset($_POST['add'])) {
    $sName = $_POST['name'];
    $sNumber = $_POST['coursenr'];
    $sTeacherId = $_POST['_tid'];
    $sTeacherName = $_POST['teachername'];

    $query = "INSERT INTO `tbl_course`(`name`, `coursenr`, `_tid`, `teachername`) VALUES ('$sName','$sNumber','$sTeacherId','$sTeacherName')";

    if (mysqli_query($connection, $query)) {
        header('Location: adminCourses.php');
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}
?>


<div class="adminControl adminTeacherControl">
    <div class="links">
        <h3>Admin - Home - Add Course</h3>
    </div>
    <?php include_once '../partials/blocks.php' ?>

    <div class="form-container">
        <form action="#" method="post">
            <div class="input-container">
                <label for="number">number:</label>
                <input type="text" name="coursenr" id="courseNumber" placeholder="Enter Course Number.." required>
            </div>
            <div class="input-container">
                <label for="Name">Name:</label>
                <input type="text" name="name" id="courseName" placeholder="Enter course Name.." required>
            </div>
            <div class="input-container">
                <label for="teacher">Teacher:</label>

                <select name="_tid" id="">
                    <?php
                $teacher_query = "SELECT `_id`, `name`, `phone` FROM `tbl_teacher`";
                $teacher_result = mysqli_query($connection, $teacher_query);

                if (mysqli_num_rows($teacher_result) > 0) {

                    while ($teacher = mysqli_fetch_array($teacher_result)) {
                ?>

                    <option value="<?php echo $teacher['_id']; ?>"><?php echo $teacher['name']; ?></option>
                    <?php
                    }
                }
                ?>
                </select>
            </div>


            <input type="submit" value="Save" name="add" class="add">
        </form>
    </div>



</div>
</div>
</body>

</html>