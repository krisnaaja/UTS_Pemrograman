<?php
require_once "app.php";

$id = $_GET['id'];

$d = findmusikByID($conn, $id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musik Detail</title>
</head>

<body>
    <h1>Detail Musik</h1>

    <a href="/musik.php">Kembali ke daftar musik</a>

    <br>
    <br>

    <p>Nama Musik : <?= $d['nama_musik'] ?></p>
    <p>Gendre : <?= $d['genre'] ?></p>
    <p>Pencipta : <?= $d['pencipta'] ?></p>
    <p>Tahun rilis : <?= $d['tahun_rilis'] ?></p>

</body>

</html>

<?php
mysqli_close($conn);
?>