<?php
include_once '../config/db.php';
include_once '../partials/header.php';

if ($_SESSION['tloggedin'] != true) {
    header('Location: ../partials/tlogin.php');
}    

?>

<div class="container">

    <div class="adminControl">
        <?php
                $teacher_query = "SELECT * FROM `tbl_teacher` WHERE _id=$_SESSION[_id]";
                $teacher_result = mysqli_query($connection, $teacher_query);

                if (mysqli_num_rows($teacher_result) > 0) {
                    $teacher = mysqli_fetch_array($teacher_result)
                ?>
        <small>
            <div><strong>Teacher Name: </strong><?php echo $teacher['name']; ?></div>
        </small>

        <?php
                    }
                ?>

        <div class="links">
            <h3>Teacher - Home</h3>
            <div class="logout" id="logout">
                <a href="/final/teacher/logout.php">
                    Logout
                </a>
            </div>
        </div>
        <div class=" teacherAcses">
            <div class="teacherCourse">
                <?php
                $course_query = "SELECT * FROM `tbl_course` WHERE tbl_course._tid=$_SESSION[_id]";
                $course_result = mysqli_query($connection, $course_query);

                if (mysqli_num_rows($course_result) > 0) {

                    while ($course = mysqli_fetch_array($course_result)) {
                ?>
                <div>
                    <a href="./teacherAddGrade.php?id=<?php echo $course['_id'] ?>">
                        <span><?php echo $course['name'] ?></span>
                        <span><?php echo $course['coursenr'] ?></span>
                    </a>
                </div>
                <?php
                    }
                }
                ?>

            </div>


        </div>
    </div>

    </body>

    </html>