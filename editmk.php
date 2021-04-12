<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit_matakuliah($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Matakuliah</title>
</head>
<body>
<h1>Edit Matakuliah</h1>
<a href="matakuliah.php">Kembali</a><br><br>
<form action="proses.php" method="post">
<label>Id</label><br>
<input type="text" name="id" value="<?php echo $data->id ?>"><br>
<label>Nama MK</label><br>
<input type="text" name="nama_mk" value="<?php echo $data->nama_mk ?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>