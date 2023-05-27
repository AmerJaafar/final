<?php include_once '../partials/header.php' ?>
      
        <div class="adminControl">
            <div class="links">
                <h3>Admin - Home - Courses</h3>
                <a href="./adminCoursesAdd.php" class="add">add</a>
            </div>

            <?php include_once '../partials/blocks.php' ?>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <td>number</td>
                            <td>name</td>
                            <td>edit</td>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                    <?php
                $course_query = "SELECT * FROM `tbl_course`";
                $course_result = mysqli_query($connection, $course_query);

                if (mysqli_num_rows($course_result) > 0) {
                    while ($course = mysqli_fetch_array($course_result)) {
                ?>
                        <tr id="teacherRow">
                            <td><?php echo $course['coursenr']; ?></td>
                            <td><?php echo $course['name']; ?></td>
                            <td><a href='./adminCoursesEdite.php?_id=<?php echo $course['_id']; ?>' class="add">edit</a></td>
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