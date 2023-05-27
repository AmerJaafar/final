<?php include_once '../partials/header.php' ?>

<?php
if (isset($_POST['add'])) {
    $sName = $_POST['name'];
    $sEmail = $_POST['email'];
    $sPassword = $_POST['password'];
    $sPhone = $_POST['phone'];

    $query = "INSERT INTO `tbl_student`(`name`, `email`, `password`, `phone`) VALUES ('$sName','$sEmail','$sPassword','$sPhone')";

    if (mysqli_query($connection, $query)) {
        header('Location: adminStudent.php');
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}
?>

<div class="adminControl adminTeacherControl">
    <div class="links">
        <h3>Admin - Home - Add Student</h3>
    </div>

    <?php include_once '../partials/blocks.php' ?>

    <div class="form-container">
        <form action="#" method="post">
            <div class="input-container">
                <label for="name">Name:</label>
                <input type="text" name="name" id="studentName" placeholder="Enter Student Name.." required>
            </div>
            <div class="input-container">
                <label for="Email">Email:</label>
                <input type="Email" name="email" id="studentEmail" placeholder="Enter Student Email.." required>
            </div>
            <div class="input-container">
                <label for="Phone">Phone:</label>
                <input type="tel" name="phone" id="studentPhone" placeholder="Enter Student Phone.." required>
            </div>
            <div class="input-container">
                <label for="Password">Password:</label>
                <input type="text" name="password" id="studentPassword" placeholder="Enter Student Password.." required>
            </div>
            <div class="input-container">
                <label for="image">image:</label>
                <input type="file" name="image" id="studentImage">
            </div>
            <input type="submit" value="Save" name="add" class="add">
        </form>
    </div>



</div>
</div>
</body>

</html>