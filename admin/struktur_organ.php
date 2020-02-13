
<legend>STRUKTUR ORGANISASI</legend>
<a href="?page=struktur_organ&aksi=entry" class='btn btn-primary'><span class='glyphicon glyphicon-plus'></span>Entry Data</a>
<a href="?page=struktur_organ&aksi=list" class= "btn btn-danger"><span class='glyphicon glyphicon-th-list'></span>List Data</a>
<?php
	include ('koneksi.php');
	$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
	switch($aksi)
	{
		case 'entry' : 
?>
<form action = "aksi_struktur_organ.php?proses=tambah" method="POST" enctype="multipart/form-data">
<legend>ENTRY BERITA</legend>
<div class="form-group">
		<label>Judul </label>
		<input type="text" name="judul">
</div>
<div class="form-group">
		<label>File</label>
		<input type="file" name="file">
</div>
<div class="form-group">
		<label></label>
		<label></label>
		<input type="Submit" name="simpan" value="SIMPAN" class ="btn btn-warning">	
</div>
</form>
<?php
break;
case 'list' : 
?>
<legend>LIST DATA</legend>
<div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTables-example">
                                            <thead>
		<th bgcolor="#00CC99"> <center>No</center> </th>
		<th bgcolor="#00CC99"><center> File</center></th>
		<th bgcolor="#00CC99"><center> Aksi </center></th>
	</tr>
	<?php
		$query=mysql_query("SELECT * FROM struktur");
		$i=1;
		while($data=mysql_fetch_array($query))
		{
			echo "<tr>
					<td align=center>$i</td>
					<td>$data[judul]</td>
					<td>$data[file]</td>
					<td align=center>
					<a href=aksi_struktur_organ.php?proses=delete&judul=$data[judul] onclick=\"return confirm
					('Yakin akan menghapus data ?')\"class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span>
					Delete</a>
	
					<a href=?page=struktur_organ&aksi=edit&judul=$data[judul]
					class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-trash\"></span>Edit</a>
					</td>
				</tr>";
			$i+=1;
		}
	?>
	</tr>
	</thead>
</table>
<?php
break;
case 'edit' :
?>
<?php
	include('koneksi.php');
	$ambil=mysql_query("SELECT * FROM struktur WHERE judul='$_GET[judul]'");
	$data=mysql_fetch_array($ambil);
?>
<legend>UPDATE DATA</legend>
<form action = "aksi_struktur_organ.php?proses=update" method="POST">
<div class="form-group">
		<label></label>
		<label></label>
		<label><input type="hidden" name="judul" class="form-control"
		value="<?php echo $data['judul']?>"></label>
</div>
<div class="form-group">
		<label>Judul </label>
		<label> : </label>
		<label><select name="judul" class="form-control">
			<?php
				include('koneksi.php');
				$ambilkat=mysql_query("SELECT * FROM struktur");
				while($datakat=mysql_fetch_array($ambilkat))
				{
					echo "<option value=$datakat[judul]>$datakat[judul]</option>";
				}
			?>
		</select></label>
</div>
<div class="form-group">
		<label>File </label>
		<label> : </label>
		<input type="file" name="file"> <br>
		
</div>
<div class="form-group">
		<label></label>
		<label></label>
		<input type="Submit" name="update" value="Update" class ="btn btn-success">
</div>
</form>
<?php
break;
	}
?>