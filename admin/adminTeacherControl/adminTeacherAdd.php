<?php include_once '../partials/header.php' ?>

        <div class="adminControl adminTeacherControl">
            <div class="links">
                <h3>Admin - Home -Add Teacher</h3>
            </div>
            <?php include_once '../partials/blocks.php' ?>

            <div class="form-container">
                <form action="#">
                    <div class="input-container">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="teacherName" placeholder="Enter Teacher Name.." required>
                    </div>
                    <div class="input-container">
                        <label for="Email">Email:</label>
                        <input type="Email" name="Email" id="teacherEmail" placeholder="Enter Teacher Email.." required>
                    </div>
                    <div class="input-container">
                        <label for="Phone">Phone:</label>
                        <input type="tel" name="Phone" id="teacherPhone" placeholder="Enter Teacher Phone.." required>
                    </div>
                    <div class="input-container">
                        <label for="Password">Password:</label>
                        <input type="text" name="Password" id="teacherPassword" placeholder="Enter Teacher Password.." required>
                    </div>
                    <div class="input-container">
                        <label for="image">image:</label>
                        <input type="file" name="image" id="teacherimage">
                    </div>
                    <button type="submit" class="add" >Save</button>
                </form>
            </div>
           

            
        </div>
    </div>
</body>
</html>