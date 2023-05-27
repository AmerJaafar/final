<?php include_once '../partials/header.php' ?>

<?php
if (isset($_POST['add'])) {
    $sName = $_POST['name'];
    $sEmail = $_POST['email'];
    $sPassword = $_POST['password'];
    $sPhone = $_POST['phone'];

    $query = "INSERT INTO `tbl_teacher`(`name`, `email`, `password`, `phone`) VALUES ('$sName','$sEmail','$sPassword','$sPhone')";

    if (mysqli_query($connection, $query)) {
        header('Location: adminTeacher.php');
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}
?>

<div class="adminControl adminTeacherControl">
    <div class="links">
        <h3>Admin - Home - Add Teacher</h3>
    </div>
    <?php include_once '../partials/blocks.php' ?>

    <div class="form-container">
        <form action="#" method="post">
            <div class="input-container">
                <label for="name">Name:</label>
                <input type="text" name="name" id="teacherName" placeholder="Enter Teacher Name.." required>
            </div>
            <div class="input-container">
                <label for="Email">Email:</label>
                <input type="Email" name="email" id="teacherEmail" placeholder="Enter Teacher Email.." required>
            </div>
            <div class="input-container">
                <label for="Phone">Phone:</label>
                <input type="tel" name="phone" id="teacherPhone" placeholder="Enter Teacher Phone.." required>
            </div>
            <div class="input-container">
                <label for="Password">Password:</label>
                <input type="text" name="password" id="teacherPassword" placeholder="Enter Teacher Password.." required>
            </div>
            <div class="input-container">
                <label for="image">image:</label>
                <input type="file" name="image" id="teacherimage">
            </div>
            <input type="submit" value="Save" name="add" class="add">
        </form>
    </div>



</div>
</div>
</body>

</html>