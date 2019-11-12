<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Tambah Data</title>
	<!-- <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>
  <div class="content-wrapper">
    <section class="content-header">
      <?php echo "<h3>".$judul."</h3>"; ?>
<?php echo validation_errors(); ?>
<form method="post" action="<?php echo base_url('crud/simpan')?>" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nim :</td>
			<td><input type="text" name="nim"></td>
		</tr>

		<tr>
			<td>Nama :</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>

		<td>Jenis Kelamin :</td>
			<td><input type="radio" name="jenis_kelamin" id="L" value="Laki-Laki" checked> Laki-Laki
				<input type="radio" name="jenis_kelamin" id="P" value="Perempuan"> Perempuan
			</td>
		</tr>

		<tr>
			<td>Almaat :</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		

		<tr>
			<td>Nomer Hp :</td>
			<td><input type="text" name="telp"></td>
		</tr>
		
		<tr>
			<td></td>
			<td>
				<input type="submit" name="simpan" value="Simpan">
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

  


