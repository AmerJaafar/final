<?php include_once '../partials/header.php' ?>

<div class="adminControl">
    <div class="links">
        <h3>Admin - Home - Student</h3>
        <a href="./adminstudentAdd.php" class="add">add</a>
    </div>
    <?php include_once '../partials/blocks.php' ?>

    <div class="table-container">
        <table class="teble" id="a-studentTable">
            <thead>
                <tr>
                    <td>name</td>
                    <td>phone</td>
                    <td>edit</td>
                    <td>profile</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $student_query = "SELECT `_id`, `name`, `phone` FROM `tbl_student`";
                $student_result = mysqli_query($connection, $student_query);

                if (mysqli_num_rows($student_result) > 0) {

                    while ($student = mysqli_fetch_array($student_result)) {
                ?>
                        <tr id="studentRow">
                            <td><?php echo $student['name']; ?></td>
                            <td><?php echo $student['phone']; ?></td>
                            <td><a href='./adminStudentEdite.php?_id=<?php echo $student['_id']; ?>' class="add">edit</a></td>
                            <td><a href='./adminStudentProfile.php?_id=<?php echo $student['_id']; ?>' class="add">profile</a></td>
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