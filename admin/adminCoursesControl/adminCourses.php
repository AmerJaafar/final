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
                        <tr id="teacherRow">
                            <td>SDEV 2016</td>
                            <td>web programming</td>
                            <td><a href="./adminCoursesEdite.html" class="add">edit</a></td>
                            
                        </tr>
                        <tr id="teacherRow">
                            <td>SDEV 2016</td>
                            <td>web programming</td>
                            <td><a href="./adminCoursesEdite.html" class="add">edit</a></td>
                            
                        </tr>
                        <tr id="teacherRow">
                            <td>SDEV 2016</td>
                            <td>web programming</td>
                            <td><a href="./adminCoursesEdite.html" class="add">edit</a></td>
                            
                        </tr>
                        <tr id="teacherRow">
                            <td>SDEV 2016</td>
                            <td>web programming</td>
                            <td><a href="./adminCoursesEdite.html" class="add">edit</a></td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>

            
        </div>
    </div>
</body>
</html>