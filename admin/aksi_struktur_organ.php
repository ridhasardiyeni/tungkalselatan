<?php
if ($_GET['proses'] == 'tambah') {
if(isset($_POST['simpan']))
{
	include ("koneksi.php");
	$judul = $_POST['judul'];
	$file= $_POST['file'];
	
	$query=mysql_query("insert into struktur (judul,file) 
	values ('$judul','$file'')");
	
	if($query)
			echo "<script>alert('data anda telah masuk !!!')</script>";
		else
			echo "<script>alert('masukkan data anda secara lengkap !!!')</script>";
	header('location:index.php?page=struktur_organ');
}
}
else if ($_GET['proses'] == 'update'){
	if(isset($_POST['update']))
{
	include('koneksi.php');
	$ubah=mysql_query("UPDATE struktur_organ SET 
						judul = '$_POST[judul]',
						file = '$_POST[file]'
					WHERE judul ='$_POST[judul]'");
	if($ubah)
		header('location:index.php?page=struktur_organ');
}
}
else if ($_GET['proses'] == 'delete'){
	include('koneksi.php');
	$judul = $_GET['judul'];
	$query=mysql_query("DELETE FROM struktur_organ WHERE judul='$judul'");
	header('location:index.php?page=struktur_organ');
}
?>