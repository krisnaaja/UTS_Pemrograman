<?php
require_once "app.php";
$id = $_GET['id'];

if (isset($_POST["submit"])) {
  $nama_musik = $_POST['nama_musik'];
  $genre = $_POST['genre'];
  $pencipta = $_POST['pencipta'];
  $tahun_rilis = $_POST['tahun_rilis'];

  $sql = "UPDATE musik SET nama_musik ='$nama_musik', genre ='$genre', pencipta ='$pencipta', tahun_rilis ='$tahun_rilis' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Refresh: 0.5; url= /musik.php");
    exit;
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Daftar Musik</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="back">
  <?php
  $sql = "SELECT * FROM musik WHERE id = $id LIMIT 1";
  $result = mysqli_query($conn, $sql);
  $v = mysqli_fetch_assoc($result);
  ?>
  <div class="content">
    <div class="back-arrow">
      <a href="/musik.php"><i class="bi bi-arrow-left-circle"></i></a>
    </div>
    <form method="post">
      <div class="judul">
        <h1>Edit Daftar musik</h1>
        <p>Silahkan edit daftar Musik</p>
      </div>
      <div>
        <input type="hidden" name="id" value="<?php echo $v["id"]; ?>">
      </div>
      <div>
        <label>Nama musik</label>
        <input type="text" name="nama_musik" value="<?php echo $v["nama_musik"]; ?>">
      </div>
      <div>
        <label>Genre</label>
        <input type="text" name="genre" value="<?php echo $v["genre"]; ?>">
      </div>
      <div>
        <label>Pencipta</label>
        <input type="text" name="pencipta" value="<?php echo $v["pencipta"]; ?>">
      </div>
      <div>
        <label>Tahun Rilis</label>
        <input type="text" name="tahun_rilis" value="<?php echo $v["tahun_rilis"]; ?>">
      </div>
      <div>
        <input type="submit" name="submit" value="submit">
      </div>
    </form>
  </div>
</body>

</html>