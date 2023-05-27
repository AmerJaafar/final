<?php include_once '../partials/header.php' ?>

        <div class="adminControl adminTeacherControl">
            <div class="links">
                <h3>Admin - Home - Teacher Profile</h3>
            </div>
            <?php include_once '../partials/blocks.php' ?>

            <div class="profile-container">
                <div class="img-box">
                    <img src="../../assest/images/img.jpeg" alt="">
                </div>
                <div class="profile-content">
                <?php
            $tid = explode("=", $_SERVER["QUERY_STRING"]);
            $teacher_query = "SELECT * FROM `tbl_teacher` WHERE _id=$tid[1]";
            $teacher_result = mysqli_query($connection, $teacher_query);

            if (mysqli_num_rows($teacher_result) > 0) {

                while ($teacher = mysqli_fetch_array($teacher_result)) {
            ?>
                    <p>Name: <span id="profileTeacherName"><?php echo $teacher['name'] ?></span></p>
                    <p>Email: <span id="profileTeacherEmail"><?php echo $teacher['email'] ?></span></p>
                    <p>Phone: <span id="profileTeacherPhone"><?php echo $teacher['phone'] ?></span></p>
                    <p>Password: <span id="profileTeacherPassword"><?php echo $teacher['password'] ?></span></p>
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