<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Ubah Data</title>
	<!-- <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>

  <div class="content-wrapper">
    <section class="content-header">
      <?php echo "<h3>".$judul."</h3>"; ?>

<form method="post" action="<?php echo base_url('crud/update')?>" enctype="multipart/form-data">
<table>
	<input type="hidden" name="idmhs" value="<?php echo $idmhs ?>">
		<tr>
	<td>nim</td>
	<td>:</td>
	<td><input type="text" name="nim" value="<?php echo $nim ?>"></td>
		</tr>

		<tr>
	<td>nama</td>
	<td>:</td>
	<td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
		</tr>

	<tr>
	<td>Jenis Kelamin</td>
	<td>:</td>
	<td>
		<input type="radio" name="jenis_kelamin" id="L" value="Laki-Laki" <?php echo $jenis_kelamin; ?> checked> Laki-Laki
		<input type="radio" name="jenis_kelamin" id="P" value="Perempuan" <?php echo $jenis_kelamin; ?>> Perempuan
		</td>
	</tr>

		<tr>
	<td>Alamat</td>
	<td>:</td> 
	<td><input type="text" name="alamat" value="<?php echo $alamat ?>"></td>
		</tr>
	
		

		<tr>
	<td>nomer HP</td>
	<td>:</td> 
	<td><input type="text" name="telp" value="<?php echo $telp ?>"></td>
		</tr>

		<tr>
			<td>
				<input type="submit" name="simpan" value="Update">
				<a href="<?php echo base_url()."crud/tampil";?>"><input type="button" value="Batal"></a>
			</td>
		</tr>
	</table>
</form>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <section class="content container-fluid">
    </section>
  </div>
