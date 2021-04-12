<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Cetak Kontrak Matakuliah</title>
<style>
h1 {
text-align: center;
}
table,
td,
th {
border: 1px solid #ddd;
text-align: left;
}
table {
border-collapse: collapse;
width: 100%;
}
th,
td {
padding: 15px;
}
</style>
</head>
<body>
<h1>Laporan Kontrak Matakuliah</h1>
<table>
<thead>
<tr>
<th>No.</th>
<th>Matakuliah_ID</th>
<th>mahasiswa</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data_kontrakmk();
if ( !empty($result) ) {
foreach ($result as $data): ?>
<tr>
<td><?=$index++ ?></td>
<td><?=$data->mk_id ?></td>
<td><?=$data->mhs_id ?></td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel kontrak matakuliah.</td>
</tr>
<?php } ?>
</tbody>
</table>
<script>
window.print();
</script>
</body>
</html>