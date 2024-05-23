<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>musik</title>
    <style>
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid;
        }

        input[type=text] {
            width: 100%;
            border: 1px solid;
            padding: 5px;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>
    <h1>Tambahkan musik</h1>
    <a href="/musik.php">Kembali ke daftar musik</a>
    <div class="content">

        <form action="musik-store.php" method="post">
            <div>
                <label>Nama musik</label>
                <input type="text" name="nama_musik">
            </div>
            <div>
                <label>Genre</label>
                <input type="text" name="genre">
            </div>
            <div>
                <label>Pencipta</label>
                <input type="text" name="pencipta">
            </div>
            <div>
                <label>Tahun Rilis</label>
                <input type="text" name="tahun_rilis">
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>

</body>

</html>