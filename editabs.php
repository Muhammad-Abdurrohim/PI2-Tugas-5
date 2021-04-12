<?php
$id = $_GET['nim'];
include 'modelabs.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Nilai Mahasiswa</title>
</head>
<body>
<h1>Edit Nilai Mahasiswa</h1>
<a href="indexabs.php">Kembali</a><br><br>
<form action="prosesabs.php" method="post">
<label>NIM</label><br>
<input type="text" name="nim" value="<?php echo $data->nim ?>"><br>
<label>Nama</label><br>
<input type="text" name="nama" value="<?php echo $data->nama ?>"><br>
<label>Matakuliah_ID</label><br>
<input type="text" name="mk_id" value="<?php echo $data->mk_id ?>"><br>
<label>Waktu_Absen</label><br>
<input type="number" name="wkt_absen" value="<?php echo $data->wkt_absen ?>">
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>