<?php include_once "partials/header.php"; ?>
<?php include_once "config/db.php" ?>

<div class=" web-container">
    <div class="conatiner-permission">
        <label for="isAdmin">Are you?</label>
        <div class="select-permission center">
            <a href="./partials/alogin.php">
                <div id="admin">
                    admin
                </div>
            </a>

            <a href="./partials/tlogin.php">
                <div id="teacher">
                    teacher
                </div>
            </a>

            <a href="./partials/slogin.php">
                <div id="student">
                    student
                </div>
            </a>
        </div>
    </div>


    <?php include_once "partials/footer.php" ?>

</div>