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
                <tr id="studentRow">
                    <td>ahmed ali</td>
                    <td>059123456</td>
                    <td><a href="./adminStudentEdite.html" class="add">edit</a></td>
                    <td><a href="./adminStudentProfile.html" class="add">profile</a></td>
                </tr>
                <tr id="studentRow">
                    <td>ahmed ali</td>
                    <td>059123456</td>
                    <td><a href="./adminStudentEdite.html" class="add">edit</a></td>
                    <td><a href="./adminStudentProfile.html" class="add">profile</a></td>
                </tr>
                <tr id="studentRow">
                    <td>ahmed ali</td>
                    <td>059123456</td>
                    <td><a href="./adminStudentEdite.html" class="add">edit</a></td>
                    <td><a href="./adminStudentProfile.html" class="add">profile</a></td>
                </tr>
                <tr id="studentRow">
                    <td>ahmed ali</td>
                    <td>059123456</td>
                    <td><a href="./adminStudentEdite.html" class="add">edit</a></td>
                    <td><a href="./adminStudentProfile.html" class="add">profile</a></td>
                </tr>
            </tbody>
        </table>
    </div>


</div>
</div>
</body>

</html>