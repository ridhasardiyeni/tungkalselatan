<head>
	<script src="tinymce/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
</head>
<?php
	include('koneksi.php');
	$aksi= isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
	switch($aksi)
	{
		case 'entry' :
		
?>
<form action = "aksi_visi.php?proses=tambah" method="POST">
<h3><center><b>ENTRY DATA</b></center></h3>
<div class="form-group">
		<label>Judul </label>
		<label>: </label>
		<input type="text" name="judul" class="form-control">
</div>
<div class="form-group">
		<label>Keterangan </label>
		<label>: </label>
		<textarea name="keterangan" class="form-control"></textarea>
</div>
<div class="form-group">
		<label></label>
		<label></label>
		<input type="Submit" name="simpan" value="SIMPAN" class="btn btn-success">
</div>
</form>
<?php
break;
case 'list' :
?>
<?php
include('koneksi.php');
?>
<a href="?page=visi&aksi=entry"class= "btn btn-primary"><i class="fa fa-plus-circle" method="POST" role="form"></i>Tambah Data</a>
<table width="100%" class="table table-striped table-hover" id="dataTables-example">
<thead>
	<tr div style="background-color:#DEFAA9">
		<th> No </th>
		<th> Judul</th>
		<th> Keterangan </th>
		<th> Aksi</th>
	</tr>
</thead>
<tbody>
	<?php
		
		$query=mysql_query("SELECT * FROM visi");
		$i=1;
		while($data=mysql_fetch_array($query))
		{
			echo "<tr>
					<td>$i</td>
					<td>$data[judul]</td>
					<td>$data[keterangan]</td>
					<td>
					<a href=aksi_visi.php?proses=delete&judul=$data[judul] onclick=\"return confirm
					('Yakin akan menghapus data user?')\"class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span>
					</a>
					|
					<a href=?page=visi&aksi=edit&judul=$data[judul]
					class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-edit\"></span>
					</a>
					</td>
				</tr>";
			$i+=1;
		}
	?>
</tbody>
</table>
<?php
break;
case 'edit' :
?>
<?php
	include('koneksi.php');
	$ambil=mysql_query("SELECT * FROM visi WHERE judul='$_GET[judul]'");
	$data=mysql_fetch_array($ambil);
?>
<h3><center><b>UPDATE DATA</b></center></h3>
<form action = "aksi_visi.php?proses=update" method="POST">
<div class="form-group">
		<label></label>
		<label></label>
		<input type="hidden" name="judul" class="form-control"
		 value="<?php echo $data['judul']?>">
</div>
<div class="form-group">
		<label>Judul</label>
		<label> : </label>
		<input type="text" name="judul" class="form-control"
		 value="<?php echo $data['judul']?>">
</div>
<div class="form-group">
		<label>Keterangan </label>
		<label> : </label>
		<textarea name="keterangan" class="form-control"
		 value="<?php echo $data['level']?>"></textarea>
</div>
<div class="form-group">
		<label></label>
		<label></label>
		<input type="Submit" name="update" value="Update" class="btn btn-warning">
</div>
</form>
<?php
break;
	}
?>