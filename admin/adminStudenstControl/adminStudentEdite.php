<?php include_once '../partials/header.php' ?>

        <div class="adminControl adminTeacherControl">
            <div class="links">
                <h3>Admin - Home - Edite Student</h3>
            </div>
            <?php include_once '../partials/blocks.php' ?>

            <div class="form-container">
                <form action="#">
                    <div class="input-container">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="studentName" placeholder="Enter Student Name.." required>
                    </div>
                    <div class="input-container">
                        <label for="Email">Email:</label>
                        <input type="Email" name="Email" id="studentEmail" placeholder="Enter Student Email.." required>
                    </div>
                    <div class="input-container">
                        <label for="Phone">Phone:</label>
                        <input type="tel" name="Phone" id="studentPhone" placeholder="Enter Student Phone.." required>
                    </div>
                    <div class="input-container">
                        <label for="Password">Password:</label>
                        <input type="text" name="Password" id="studentPassword" placeholder="Enter Student Password.." required>
                    </div>
                    <div class="input-container">
                        <label for="image">image:</label>
                        <input type="file" name="image" id="studentImage">
                    </div>
                    <button type="submit" class="add" >Edite</button>
                </form>
            </div>
           

            
        </div>
    </div>
</body>
</html>