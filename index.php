<?php include_once "partials/header.php"; ?>
 
    <div class=" web-container">
        <div class="conatiner-permission">
            <label for="isAdmin">Are you?</label>
            <div class="select-permission center">
                <div id="admin" onclick="getLoginPopup('admin')">admin</div>
                <div id="teacher" onclick="getLoginPopup('teacher')">teacher</div>
                <div id="student" onclick="getLoginPopup('student')">student</div>
            </div>
        </div>

        <?php include_once "partials/popup.php" ?> 
        <?php include_once "partials/footer.php" ?> 

    </div>
