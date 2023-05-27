<?php
$connection = mysqli_connect("localhost", "root", "", "db.courses");
include_once '../partials/header.php';
?>

<div class="container">

    <div class="adminControl">
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
                $course_query = "SELECT `_id`, `name`, `coursenr` FROM `tbl_course`";
                $course_result = mysqli_query($connection, $course_query);

                if (mysqli_num_rows($course_result) > 0) {

                    while ($course = mysqli_fetch_array($course_result)) {
                ?>
                        <a href="./teacherAddGrade.php?id=<?php echo $course['_id'] ?>">
                            <span><?php echo $course['name'] ?></span>
                            <span><?php echo $course['coursenr'] ?></span>
                        </a>
                <?php
                    }
                }
                ?>
    </div>


</div>
</div>

</body>

</html>