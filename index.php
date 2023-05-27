<?php include_once "partials/header.php"; ?>
<?php include_once "config/db.php" ?>

<div class=" web-container">
    <div class="conatiner-permission">
        <label for="isAdmin">Are you?</label>
        <div class="select-permission center">
            <a href="#admin">
                <div id="admin" onclick="getLoginPopup(this.id)">
                    admin
                </div>
            </a>

            <a href="#teacher">
                <div id="teacher" onclick="getLoginPopup(this.id)">
                    teacher
                </div>
            </a>

            <a href="#student">
                <div id="student" onclick="getLoginPopup(this.id)">
                    student
                </div>
            </a>
        </div>
    </div>

    <?php include_once "partials/popup.php" ?>
    <?php include_once "partials/footer.php" ?>

</div>