<?php
include('koneksi.php');
if ($_GET['aksi'] == 'input') {
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];
    $notelp = $_POST['notelp'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $fotobaru = date('Y-m-d') ."_". $judul ."_". $foto;
    $path = "images_jasa_masyarakat/" . $fotobaru;
    if ($judul != null and $keterangan != null and $notelp != null and $foto != null) {
        if (move_uploaded_file($tmp, $path)) {
            $sql_input = "INSERT INTO `jasa_masyarakat` (`id`, `judul`, keterangan, notelp, `foto`) VALUES "
                    . "(NULL, '$judul', '$keterangan', '$notelp' , '$fotobaru')";
            $simpan_input = mysql_query($sql_input);
            if ($simpan_input) {
                header("location:index.php?page=jasa_masyarakat");
            } else {
                echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Foto Gagal di upload!');history.go(-1);</script>";
        }
    } else {
        echo "<script>alert('Tidak Boleh Ada yang kosong!');history.go(-1);</script>";
    }
} else if ($_GET['aksi'] == 'edit') {
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $judul = $_POST['judul'];
    $notelp = $_POST['notelp'];
    $keterangan = $_POST['keterangan'];
    $id = $_GET['id'];
    if ($foto != null) {
        $fotobaru = date('Y-m-d') . $judul . $foto;
        $path = "images_jasa_masyarakat/" . $fotobaru;
        if ($judul != null and $notelp != null and $keterangan != null) {
            if (move_uploaded_file($tmp, $path)) {
                $sql_foto = "SELECT * from jasa_masyarakat WHERE id='$id'";
                $query_foto = mysql_query($sql_foto);
                $ambil_foto = mysql_fetch_array($query_foto);

                if (is_file("images_jasa_masyarakat/" . $ambil_foto['foto'])) {
                    unlink("images_jasa_masyarakat/" . $ambil_foto['foto']);
                }
                $sql_edit = "UPDATE jasa_masyarakat SET judul = '$judul',keterangan='$keterangan',foto='$fotobaru',notelp='$notelp' WHERE id = '$id' ";
                $edit = mysql_query($sql_edit);
                if ($edit) {
                    header("location:index.php?page=jasa_masyarakat");
                } else {
                    echo "<script>alert('Gagal di edit!');history.go(-1);</script>";
                }
            } else {
                echo "<script>alert('Foto Gagal di upload!');history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Tidak Boleh Ada Yang Kosong!');history.go(-1);</script>";
        }
    } else {
        if ($judul != null and $notelp != null and $keterangan != null) {
            $sql_edit = "UPDATE jasa_masyarakat SET judul = '$judul',keterangan='$keterangan',notelp='$notelp' WHERE id = '$id' ";
                $edit = mysql_query($sql_edit);
            if ($edit) {
                header("location:index.php?page=jasa_masyarakat");
            } else {
                echo "<script>alert('Gagal di edit!');history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Tidak Boleh Ada Yang Kosong!');history.go(-1);</script>";
        }
    }
} else if ($_GET['aksi'] == 'hapus') {

    $sql_foto = "SELECT * from jasa_masyarakat WHERE id='$id'";
    $query_foto = mysql_query($sql_foto);
    $ambil_foto = mysql_fetch_array($query_foto);

    if (is_file("images_jasa_masyarakat/" . $ambil_foto['foto'])) {
        unlink("images_jasa_masyarakat/" . $ambil_foto['foto']);
    }

    $sql_hapus = "DELETE FROM jasa_masyarakat WHERE id = '$_GET[id]'";
    if (mysql_query($sql_hapus)) {
        header("location:index.php?page=jasa_masyarakat");
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
}