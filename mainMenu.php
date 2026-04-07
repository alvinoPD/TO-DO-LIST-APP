<?php
include "database/config.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel = "stylesheet" href = "src/mainMenu.css">
    <link rel = "stylesheet" href = "src/tombolTambah.css">
    <link rel = "stylesheet" href = "src/sidebar.css">
</head>
<body>
    <!-- <header>
        <nav id = "nav">
            <h3>logo</h3>
        </nav>
    </header> -->
       
    <div class = "main-flex">
        <?php include "part/sidebar.php";?>
    <main id = "main">
        <?php include "crud/readMenu.php";
            
        ?>
    </main>
    </div>
    <?php include "part/tombolTambah.php";?>
    <footer>

    </footer>
</body>
</html>