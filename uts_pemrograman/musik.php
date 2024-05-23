<?php
session_start();
require_once "app.php";

$p = getAllData($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musik</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>List Musik</h1>

    <a href="/">Kembali ke home</a>

    <br>

    <a href="/musik-tambah.php">Tambah</a>

    <br>
    <br>

    <?php if (isset($_SESSION['BERHASIL_TAMBAH_MUSIK'])) : ?>
        <p><?= $_SESSION['BERHASIL_TAMBAH_MUSIK'] ?></p>
        <?php session_unset(); ?>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Nama Musik</th>
                <th>Genre</th>
                <th>Pencipta</th>
                <th>Tahun Rilis</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($p as $k => $v) : ?>
                <tr>
                    <td><?= $v['nama_musik'] ?></td>
                    <td><?= $v['genre'] ?></td>
                    <td><?= $v['pencipta'] ?></td>
                    <td><?= $v['tahun_rilis'] ?></td>
                    <td>
                        <a href="<?= "/musik-detail.php?id={$v['id']}" ?>">Detail</a>
                        <a href="<?= "/musik-edit.php?id={$v['id']}" ?>">Edit</a>
                        <a href="<?= "/musik-delete.php?id={$v['id']}" ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<?php
mysqli_close($conn);
?>