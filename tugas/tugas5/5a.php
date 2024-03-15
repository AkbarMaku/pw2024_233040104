<?php
$mahasiswa = [
    [
        "nama" => "Akbar Maku",
        "nrp" => "233040104",
        "email" => "akbarmaku@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "akbar.jpg"
    ],
    [
        "nama" => "Sella",
        "nrp" => "233040105",
        "email" => "selaa@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sella.jpg"
    ],
    [
        "nama" => "Selly",
        "nrp" => "233040106",
        "email" => "sellyy@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "selly.jpg"
    ],
    [
        "nama" => "Rudi",
        "nrp" => "233040204",
        "email" => "rudi@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "rudi.jpg"
    ],
    [
        "nama" => "Alex",
        "nrp" => "233040205",
        "email" => "alexx@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "alex.jpg"
    ],
    [
        "nama" => "Imel",
        "nrp" => "233040094",
        "email" => "imellda@gmail.com",
        "jurusan" => "Akuntansi",
        "gambar" => "imel.jpg"
    ],
    [
        "nama" => "Amel",
        "nrp" => "233040095",
        "email" => "amelss@gmail.com",
        "jurusan" => "Akuntansi",
        "gambar" => "amel.jpg"
    ],
    [
        "nama" => "Beatrix",
        "nrp" => "233040044",
        "email" => "betrixniboss@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "beatrix.jpg"
    ],
    [
        "nama" => "Cindy",
        "nrp" => "233040045",
        "email" => "sunrise@gmail.com",
        "jurusan" => "Akuntansi",
        "gambar" => "cindy.jpg"
    ],
    [
        "nama" => "Zahra",
        "nrp" => "233040004",
        "email" => "zhraa@gmail.com",
        "jurusan" => "Kedokteran",
        "gambar" => "zahra.jpg"
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
    
        <h1>Daftar Mahasiswa</h1>

        <?php foreach( $mahasiswa as $mhs ) : ?>
            <ul>
                <li>
                    <img src="img/<?= $mhs["gambar"]; ?>">
                </li>
                <li>Nama : <?= $mhs["nama"]; ?></li>
                <li>NRP : <?= $mhs["nrp"]; ?></li>
                <li>Email : <?= $mhs["email"]; ?></li>
                <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            </ul>
        <?php endforeach; ?>

</body>
</html>