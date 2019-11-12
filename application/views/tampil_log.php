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
        <div class="container">
	<h1>Riwayat Data Mahasiswa</h1>
	<a href="crud/tampil" class="btn btn-primary">Home</a>

	<!-- <a href="crud/tambah" class="btn btn-primary">Tampil data</a> -->
	<table class="table">
		<thead>
	<tr>

		<th>ID</th>
		<th>Nim</th>
		<th>Nomer HP Lama</th>
		<th>Nomer HP Baru</th>
		<th>Tanggal di Ubah</th>
		
		</tr>
	</thead>
		<?php
		foreach ($isi as $k0 => $v0) {
		?>
		<tr>
			<td><?php echo $v0['id_log'] ?></td>
			<td><?php echo $v0['nim'] ?></td>
			<td><?php echo $v0['no_lama'] ?></td>
			<td><?php echo $v0['no_baru'] ?></td>
			<td><?php echo $v0['waktu_perubahan'] ?></td>
		</tr>
		<?php } ?>
</table>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <section class="content container-fluid">
    </section>
  </div>

  


</body>