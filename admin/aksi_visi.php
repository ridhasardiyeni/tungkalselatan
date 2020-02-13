<?php
if ($_GET['proses'] == 'tambah') {
if(isset($_POST['simpan']))
{
	include ("koneksi.php");
	$judul = $_POST['judul'];
	$keterangan = $_POST['keterangan'];
	
	$query=mysql_query("insert into visi (judul,keterangan) 
	values ('$judul','$keterangan')");
	
	if($query)
			echo "<script>alert('data anda telah masuk !!!')</script>";
		else
			echo "<script>alert('masukkan data anda secara lengkap !!!')</script>";
	header('location:index.php?page=visi');
}
}
else if ($_GET['proses'] == 'update'){
	if(isset($_POST['update']))
{
	include('koneksi.php');
	$ubah=mysql_query("UPDATE visi SET 
						judul ='$_POST[judul]',
						keterangan= '$_POST[keterangan]'
					WHERE judul  ='$_POST[judul]'");
	if($ubah)
		header('location:index.php?page=visi');
}
}
else if ($_GET['proses'] == 'delete'){
	include('koneksi.php');
	$judul = $_GET['judul'];
	$query=mysql_query("DELETE FROM visi WHERE judul='$judul'");
	header('location:index.php?page=visi');
}
?>