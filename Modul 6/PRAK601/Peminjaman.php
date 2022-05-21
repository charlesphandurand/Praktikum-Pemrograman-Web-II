<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: ErrorPage.php");
  exit;
}
require "Koneksi.php";
require "Model.php";

if (!empty($_GET['id_peminjaman'])) {
  $id_peminjaman = $_GET['id_peminjaman'];
  deletedata("peminjaman", $id_peminjaman, "id_peminjaman");
  header('location:Peminjaman.php');
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Daftar Peminjaman</title>
  <style>
    h1,
    table {
      text-align: center;
    }
  </style>
</head>

<body>
  <h1 class="mt-2">Daftar Peminjaman</h1>
  <div class="table-responsive mx-4">
    <table class="table table-striped align-middle">
      <tr>
        <td class="d-block"><a href="index.php"><button type="button" class="btn btn-primary btn-sm">Kembali</button></a>
          <a href="Logout.php" onclick="return confirm('Log Out?')"><button type="submit" name="login" class="btn btn-danger btn-sm">Log Out</button></a>
        </td>
        <td colspan=6><a href="FormPeminjaman.php"><button type="button" class="btn btn-primary float-end btn-sm">Tambah Data Baru</button></a></td>
      </tr>
      <tr>
        <th>ID Peminjaman</th>
        <th>Tanggal Peminjaman</th>
        <th>Tanggal Pengembalian</th>
        <th>ID Member</th>
        <th>ID Buku</th>
        <th colspan="2">Opsi</th>
      </tr>

      <?php
      $result = selectalldata("peminjaman");
      while ($data = mysqli_fetch_array($result)) { ?>
        <tr>
          <td><?php echo $data['id_peminjaman'] ?></td>
          <td><?php echo $data['tgl_pinjam'] ?></td>
          <td><?php echo $data['tgl_kembali'] ?></td>
          <td><?php echo $data['id_member'] ?></td>
          <td><?php echo $data['id_buku'] ?></td>
          <td style="text-align: center;"><a href="FormPeminjaman.php?id_peminjaman=<?php echo $data['id_peminjaman']; ?>"><button class="btn btn-success btn-sm">Edit</button></a></td>
          <td style="text-align: center;"><a href="Peminjaman.php?id_peminjaman=<?php echo $data['id_peminjaman']; ?>" onclick="return confirm('Hapus data?')"><button class="btn btn-danger btn-sm">Hapus</button></a></td>
        </tr>
      <?php } ?>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>