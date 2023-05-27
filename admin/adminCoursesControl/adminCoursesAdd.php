<?php include_once '../partials/header.php';

if (isset($_POST['add'])) {
    $sName = $_POST['name'];
    $sNumber = $_POST['coursenr'];
    $sCountTeacher = $_POST['countTeach'];

    $query = "INSERT INTO `tbl_course`(`name`, `coursenr`, `countTeach`) VALUES ('$sName','$sNumber','$sCountTeacher')";

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
                        <select name="countTeach" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    
                    <input type="submit" value="Save" name="add" class="add">
                </form>
            </div>
           

            
        </div>
    </div>
</body>
</html>