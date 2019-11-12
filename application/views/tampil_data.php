<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>UTS</title>
</head>
<body>
	 <div class="content-wrapper">
    <section class="content-header">
      <h1>
			Data Tables
			<small>advanced tables</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Tables</a></li>
			<li class="active">Data tables</li>
		</ol>
        <div class="row">

	<!-- <a href="crud/tambah" class="btn btn-primary">Tambah Data</a> -->
	<!-- <a href="crud/tampil2" class="btn btn-primary">Riwayat Log</a> -->
	<table class="table">
		<thead>
	<tr>
		<th>ID</th>
		<th>Nim</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>Nomer HP</th>
		<th>Edit</th>
		<th>Hapus</th>
		</tr>
	</thead>
		<?php
		foreach ($isi as $k0 => $v0) {
		?>
		<tr>
			<td><?php echo $v0['idmhs'] ?></td>
			<td><?php echo $v0['nim'] ?></td>
			<td><?php echo $v0['nama'] ?></td>
			<td><?php echo $v0['jenis_kelamin'] ?></td>
			<td><?php echo $v0['alamat'] ?></td>
			<td><?php echo $v0['telp'] ?></td>
			<td><a href='<?php echo "crud/ubah/".$v0["idmhs"] ?>'>ubah<a/></td>
			<td><a href='<?php echo "crud/hapus/".$v0["idmhs"] ?>'>hapus<a/></td>
		</tr>
		<?php } ?>
</table>
    </section>
    <section class="content container-fluid">
    </section>
  </div>


</body>

