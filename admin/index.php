<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- main css fille -->
    <link rel="stylesheet" href="../styles/style.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>admin home</title>
</head>

<body>
    <header class="header">
        <!-- As a heading -->
        <nav class="navbar container">
            <div class="nav-content">
                <span class="logo">
                    <a href="#">
                        LOGO
                    </a>
                </span>
                <div class="logout" id="logout">
                    <a href="logout.php">
                        Logout
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="adminControl">

            <div class="links">
                <h3> Admin - Home</h3>
            </div>
            <?php include_once 'partials/blocks.php' ?>

            <div class="excellentStudets">
                <h3>Excellent Studets</h3>
                <table>
                    <thead>
                        <td> student name </td>
                    </thead>
                    <tbody>
                        <tr>
                            <td>muhammed ali</td>
                        </tr>
                        <tr>
                            <td>muhammed ali</td>
                        </tr>
                        <tr>
                            <td>muhammed ali</td>
                        </tr>
                        <tr>
                            <td>muhammed ali</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <?php include_once 'partials/footer.php' ?>