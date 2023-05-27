<?php include_once '../partials/header.php' ?>

<div class="adminControl adminTeacherControl">
    <div class="links">
        <h3>Admin - Home - Student Profile</h3>
    </div>
    <?php include_once '../partials/blocks.php' ?>

    <div class="profile-container">
        <div class="img-box">
            <img src="../../assest/images/img.jpeg" alt="">
        </div>
        <div class="profile-content">
            <?php
            $sid = explode("=", $_SERVER["QUERY_STRING"]);
            $student_query = "SELECT * FROM `tbl_student` WHERE _id=$sid[1]";
            $student_result = mysqli_query($connection, $student_query);

            if (mysqli_num_rows($student_result) > 0) {

                while ($student = mysqli_fetch_array($student_result)) {
            ?>
                    <p>Name: <span id="profileStudentName"><?php echo $student['name'] ?></span></p>
                    <p>Email: <span id="profileStudentEmail"><?php echo $student['email'] ?></span></p>
                    <p>Phone: <span id="profileStudentPhone"><?php echo $student['phone'] ?></span></p>
                    <p>Password: <span id="profileStudentPassword"><?php echo $student['password'] ?></span></p>
                    </tr>
            <?php
                }
            }

            ?>
        </div>
    </div>
</div>
</div>
</body>

</html>