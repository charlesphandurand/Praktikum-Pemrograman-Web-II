<?php
require "Koneksi.php";
require "Model.php";
if (isset($_POST['submit'])) {
	$data = array(
		"id_member" => "'" . $_POST['id_member'] . "'",
		"nama_member" => "'" . $_POST['nama_member'] . "'",
		"nomor_member" => "'" . $_POST['nomor_member'] . "'",
		"alamat" => "'" . $_POST['alamat'] . "'",
		"tgl_mendaftar" => "'" . $_POST['tgl_mendaftar'] . "'",
		"tgl_terakhir_bayar" => "'" . $_POST['tgl_terakhir_bayar'] . "'"
	);
	insert($data, 'member');
	header('location:Member.php');
}

$id = isset($_GET['id_member']) ? $_GET['id_member'] : '';
$data = selectdatabyid("member", $id, "id_member");
if (isset($_POST['edit'])) {
	$data = array(
		"id_member" => "'" . $_POST['id_member'] . "'",
		"nama_member" => "'" . $_POST['nama_member'] . "'",
		"nomor_member" => "'" . $_POST['nomor_member'] . "'",
		"alamat" => "'" . $_POST['alamat'] . "'",
		"tgl_mendaftar" => "'" . $_POST['tgl_mendaftar'] . "'",
		"tgl_terakhir_bayar" => "'" . $_POST['tgl_terakhir_bayar'] . "'"
	);
	update($data, 'member', $id, "id_member");
	header("location:Member.php");
}

if (isset($_POST['kembali'])) {
	// if ($data != null) {
	// 	echo "<script>confirm('Buang perubahan?')</script>";
	// 	if ('<script>confirm("Buang perubahan?")</script> == true') {
	// 		echo "a";
	// 	} else {
	// 		header("location:Member.php");
	// 	}
	// } else {header("location:Member.php");}
	header("location:Member.php");
}

?>

<!doctype html>
<html lang="en">

<head>
	<title>Form Member</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<?php if (isset($_GET['id_member'])) : ?>
		<h1 style="text-align: center;" class="mt-2">Edit Member</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-5 mx-auto">
					<form method="POST">
						<div class="mb-3 mt-3">
							<label class="form-label">ID</label>
							<input type="text" name="id_member" value="<?php echo $data['id_member']; ?>" placeholder="masukkan id_member" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Nama</label>
							<input type="text" name="nama_member" value="<?php echo $data['nama_member']; ?>" placeholder="masukkan nama_member" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Nomor</label>
							<input type="text" name="nomor_member" value="<?php echo $data['nomor_member']; ?>" placeholder="masukkan nomor_member" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Alamat</label>
							<input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" placeholder="masukkan alamat" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Mendaftar</label>
							<input type="datetime-local" step="1" name="tgl_mendaftar" value="<?php echo date('Y-m-d\TH:i:s', strtotime($data['tgl_mendaftar'])); ?>" placeholder="masukkan tgl_mendaftar" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Terakhir Bayar</label>
							<input type="date" name="tgl_terakhir_bayar" value="<?php echo $data['tgl_terakhir_bayar']; ?>" placeholder="masukkan tgl_terakhir_bayar" required class="form-control col-form-label-sm">
						</div>
						<button type="submit" class="btn btn-primary" name="edit" onclick="return confirm('Simpan perubahan?')">Submit</button>
						<button type="submit" value="ignore" formnovalidate class="btn btn-primary" name="kembali">Kembali</button>
					</form>
				</div>
			</div>
		</div>
	<?php
	endif;
	if (!isset($_GET['id_member'])) : ?>
		<h1 style="text-align: center;" class="mt-2">Tambah Member</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-5 mx-auto">
					<form method="POST">
						<div class="mb-3 mt-3">
							<label class="form-label">ID</label>
							<input type="text" name="id_member" placeholder="masukkan id_member" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Nama</label>
							<input type="text" name="nama_member" placeholder="masukkan nama_member" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Nomor</label>
							<input type="text" name="nomor_member" placeholder="masukkan nomor_member" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Alamat</label>
							<input type="text" name="alamat" placeholder="masukkan alamat" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Mendaftar</label>
							<input type="datetime-local" step="1" name="tgl_mendaftar" placeholder="masukkan tgl_mendaftar" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Terakhir Bayar</label>
							<input type="date" name="tgl_terakhir_bayar" placeholder="masukkan tgl_terakhir_bayar" required class="form-control col-form-label-sm">
						</div>
						<button type="submit" class="btn btn-primary" name="submit" onclick="return confirm('Tambah data?')">Submit</button>
						<button type="submit" value="ignore" formnovalidate class="btn btn-primary" name="kembali">Kembali</button>
					</form>
				</div>
			</div>
		</div>
	<?php endif; ?>
</body>

</html>