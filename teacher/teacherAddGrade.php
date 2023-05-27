<?php
$connection = mysqli_connect("localhost", "root", "", "db.courses");
include_once '../partials/header.php';

$sid = explode("=", $_SERVER["QUERY_STRING"]);
if (isset($_POST['edit'])) {
    $sName = $_POST['name'];
    $sEmail = $_POST['email'];
    $sPassword = $_POST['password'];
    $sPhone = $_POST['phone'];

    $query = "UPDATE tbl_student SET name='$sName', email='$sEmail', password='$sPassword', phone='$sPhone' WHERE _id='$sid[1]'";

    if (mysqli_query($connection, $query)) {
        header('Location: index.php');
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}

?>
<div class="container">

    <div class="adminControl adminTeacherControl">
        <div class="links">
            <h3>Teacher - Home - Add Grade</h3>
        </div>
        <div class="form-container">
            <form action="#" method="post">
                <div class="input-container">

                    <?php
                    $sid = explode("=", $_SERVER["QUERY_STRING"]);
                    if (isset($_POST['edit'])) {
                        $sName = $_POST['name'];
                        $sEmail = $_POST['email'];
                        $sDegree = $_POST['degree'];

                        $query = "UPDATE tbl_student SET name='$sName', email='$sEmail', degree='$sDegree' WHERE _id='$sid[1]'";

                        if (mysqli_query($connection, $query)) {
                            header('Location: adminStudent.php');
                        } else {
                            echo "Error updating record: " . mysqli_error($connection);
                        }
                    }

                    $student_query = "SELECT `name`, `degree` FROM tbl_student WHERE _id='$sid[1]'";
                    $student_result = mysqli_query($connection, $student_query);

                    if (mysqli_num_rows($student_result) > 0) {
                        while ($student = mysqli_fetch_array($student_result)) {
                    ?>
                            <label for="studentNameG">Student:</label>
                            <select name="studentNameG" id="studentNameG">
                                <option value="<?php echo $student['name'] ?>"><?php echo $student['name'] ?></option>
                            </select>
                </div>
                <div class="input-container">
                    <label for="studentGrade">Grade:</label>
                    <input type="text" name="studentGrade" id="studentGrade" placeholder="Enter Student Grade.." name="degree" value="<?php echo $student['degree'] ?>" required>
                </div>


        <?php
                        }
                    }
        ?>

        <input class="add" type="submit" value="Save" name="edit">
            </form>
        </div>



    </div>
</div>
</body>

</html>