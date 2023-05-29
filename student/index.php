<?php 
include_once '../config/db.php';
include_once '../partials/header.php';

    if ($_SESSION['sloggedin'] != true) {
        header('Location: ../partials/slogin.php');
    }    
 ?>

<div class="container">
    <?php
                $student_query = "SELECT * FROM `tbl_student` WHERE email='$_SESSION[email]'";
                $student_result = mysqli_query($connection, $student_query);

                if (mysqli_num_rows($student_result) > 0) {

                    while ($student = mysqli_fetch_array($student_result)) {
                ?>
    <small>
        <div><strong>Student Name: </strong><?php echo $student['name']; ?></div>
    </small>

    <?php
                    }
                }
                ?>


    <div class="adminControl">
        <div class="links">
            <h3>Student - Home</h3>
            <div class="logout" id="logout">
                <a href="/final/student/logout.php">
                    Logout
                </a>
            </div>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <td>course number</td>
                        <td>course name</td>
                        <td>grade</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $student_query = "SELECT * FROM `tbl_student`, `tbl_course` WHERE email='$_SESSION[email]'";
                $student_result = mysqli_query($connection, $student_query);

                if (mysqli_num_rows($student_result) > 0) {

                    while ($student = mysqli_fetch_array($student_result)) {
                ?>
                    <tr id="studentRow">
                        <td><?php echo $student['coursenr']; ?></td>
                        <td><?php echo $student['name']; ?></td>
                        <td><?php echo $student['degree']; ?></td>
                    </tr>
                    <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
</body>

</html>