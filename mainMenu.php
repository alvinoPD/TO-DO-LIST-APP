<?php
include "database/config.php";

$query = mysqli_query($db,"SELECT * FROM kegiatan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel = "stylesheet" href = "src/mainMenu.css">
    <link rel = "stylesheet" href = "src/tombolTambah.css">
    <link rel = "stylesheet" href = "src/nav.css">
</head>
<body>
    <header>

    </header>

    <?php include "part/nav.php";?>
    <main id = "main">
        <?php while($data = mysqli_fetch_assoc($query)){

        ?>
        <div class = "container">
            <h3><?=$data['kegiatan'];?></h3>
            <p><?=$data['detail'];?></p>
            <h5><?=$data['tanggalPengumpulan'];?></h5>
            <h4><?=$data['status'];?></h4>
            <button><a  href = "crud/hapus.php?id=<?=$data['id'];?>">selesai</a></button>
        </div>
        <?php }?>
    </main>
    <?php include "part/tombolTambah.php";?>
    <footer>

    </footer>
</body>
</html>