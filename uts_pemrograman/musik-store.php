<?php
require_once "app.php";
session_start();

$n = musikbaru($conn, $_POST);

mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['BERHASIL_TAMBAH_MUSIK'] = "Gagal Menambah Musik";
} else {
    $_SESSION['BERHASIL_TAMBAH_MUSIK'] = "Berhasil menambah data nama_musik: {$_POST['nama_musik']}, genre: {$_POST['genre']}, pencipta: {$_POST['pencipta']}, tahun rilis: {$_POST['tahun_rilis']}";
}

header("Location: /musik.php");
die();