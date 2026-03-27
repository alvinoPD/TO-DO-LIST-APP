<?php
include "database/config.php";

$query = mysqli_query($db,"SELECT * FROM kegiatan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>

    </header>

    <main id = "main">
        <?php while($data = mysqli_fetch_assoc($query)){

        ?>
        <div class = "container">
            <h3><?=$data['kegiatan'];?></h3>
            <p><?=$data['detail'];?></p>
            <h5><?=$data['tanggalPengumpulan'];?></h5>
            <h4><?=$data['status'];?></h4>
            <button><a  href = "../crud/hapus.php?id=<?=$data['id'];?>">selesai</a></button>
        </div>
        <?php }?>
    </main>
    <footer>

    </footer>
</body>
</html>