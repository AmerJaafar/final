<?php include_once '../partials/header.php' ?>

<div class="adminControl adminTeacherControl">
    <div class="links">
        <h3>Admin - Home - Teacher</h3>
        <a href="./adminTeacherAdd.php" class="add">add</a>
    </div>
    <?php include_once '../partials/blocks.php' ?>

    <div class="table-container">
        <table>
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
                $teacher_query = "SELECT `_id`, `name`, `phone` FROM `tbl_teacher`";
                $teacher_result = mysqli_query($connection, $teacher_query);

                if (mysqli_num_rows($teacher_result) > 0) {

                    while ($teacher = mysqli_fetch_array($teacher_result)) {
                ?>
                        <tr id="studentRow">
                            <td><?php echo $teacher['name']; ?></td>
                            <td><?php echo $teacher['phone']; ?></td>
                            <td><a href='./adminTeacherEdite.php?_id=<?php echo $teacher['_id']; ?>' class="add">edit</a></td>
                            <td><a href='./adminTeacherProfile.php?_id=<?php echo $teacher['_id']; ?>' class="add">profile</a></td>
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