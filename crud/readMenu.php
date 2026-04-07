<?php
include "database/config.php";

$query = mysqli_query($db,"SELECT * FROM kegiatan");
?>
<body>
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
</body>
