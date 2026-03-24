<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h2>masukan nama kegiatan</h2>
    <form action = "../crud/prosesTambah.php" method = "POST" id = "inputan">
        <div class = "kegiatan">
            <label class = "kegiatan">Kegiatan</label><br>
            <input type = "text" name = "kegiatan" id = "kegiatan" class = "kegiatan" placeholder = "masukan nama kegiatan">
        </div>
        <div class = "detail">
            <label class = "detail">deshkripsi</label><br>
            <input type = "text" name = "detail" id = "detail" class = "detail" placeholder = "masukan detail kegiatan">
        </div>
        <div class = "tanggalPengumpulan">
            <label class = "tanggalPengumpulan">Kegiatan</label><br>
            <input type = "date" name = "tanggalPengumpulan" id = "kegtanggalPengumpulaniatan" class = "tanggalPengumpulan" placeholder = "masukan tanggalPengumpulan kegiatan">
        </div>
        <div class = "status">
            <label class = "kegiatan">Kegiatan</label><br>
            <input type = "radio" name = "status" id = "status" class = "status" value = dikerjakan > Dikerjakan
            <input type = "radio" name = "status" id = "status" class = "status" value = ditunda > Ditunda
        </div>
        <div class = "button">
             <button type = "submit" class = "botton">input</button>
        </div>
    </form>
</body>
</html>