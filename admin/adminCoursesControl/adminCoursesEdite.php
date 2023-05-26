<?php include_once '../partials/header.php' ?>
       
        <div class="adminControl adminTeacherControl">
            <div class="links">
                <h3>Admin - Home -Edite Course</h3>
            </div>
            <?php include_once '../partials/blocks.php' ?>

            <div class="form-container">
                <form action="#">
                    <div class="input-container">
                        <label for="number">number:</label>
                        <input type="number" name="number" id="courseNumber" placeholder="Enter Course Number.." required>
                    </div>
                    <div class="input-container">
                        <label for="Name">Name:</label>
                        <input type="text" name="Name" id="courseName" placeholder="Enter course Name.." required>
                    </div>
                    <div class="input-container">
                        <label for="teacher">Teacher:</label>
                        <select name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                    
                    
                    <button type="submit" class="add" >Edite</button>
                </form>
            </div>
           

            
        </div>
    </div>
</body>
</html>