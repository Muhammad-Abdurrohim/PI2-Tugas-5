<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit_kontrakmk($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Kontrak Matakuliah</title>
</head>
<body>
<h1>Edit Kontrak Matakuliah</h1>
<a href="kontrak.php">Kembali</a><br><br>
<form action="proses.php" method="post">
<label>Matakuliah_ID</label><br>
<input type="number" name="mk_id" value="<?php echo $data->mk_id ?>"><br>
<label>Mahasiswa</label><br>
<input type="text" name="mhs_id" value="<?php echo $data->mhs_id ?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>