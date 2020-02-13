<?php
include('koneksi.php');
if ($_GET['aksi'] == 'input') {
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $fotobaru = date('Y-m-d') ."_". $judul ."_". $foto;
    $path = "images_struktur/" . $fotobaru;
    if ($judul != null and $keterangan != null and $foto != null) {
        if (move_uploaded_file($tmp, $path)) {
            $sql_input = "INSERT INTO `struktur` (`id`, `title`, `foto`, `keterangan`) VALUES "
                    . "(NULL, '$judul', '$fotobaru', '$keterangan')";
            $simpan_input = mysql_query($sql_input);
            if ($simpan_input) {
                header("location:index.php?page=struktur");
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
    $keterangan = $_POST['keterangan'];
    $id = $_GET['id'];
    if ($foto != null) {
        $fotobaru = date('Y-m-d') . $judul . $foto;
        $path = "images_struktur/" . $fotobaru;
        if ($judul != null and $keterangan != null) {
            if (move_uploaded_file($tmp, $path)) {
                $sql_foto = "SELECT * from struktur WHERE id='$id'";
                $query_foto = mysql_query($sql_foto);
                $ambil_foto = mysql_fetch_array($query_foto);

                if (is_file("images_struktur/" . $ambil_foto['foto'])) {
                    unlink("images_struktur/" . $ambil_foto['foto']);
                }
                $sql_edit = "UPDATE struktur SET title = '$judul',keterangan='$keterangan',foto='$fotobaru' WHERE id = '$id' ";
                $edit = mysql_query($sql_edit);
                if ($edit) {
                    header("location:index.php?page=struktur");
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
        if ($judul != null and $keterangan != null) {
            $sql_edit = "UPDATE struktur SET title = '$judul',keterangan='$keterangan' WHERE id = '$id' ";
            $edit = mysql_query($sql_edit);
            if ($edit) {
                header("location:index.php?page=struktur");
            } else {
                echo "<script>alert('Gagal di edit!');history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Tidak Boleh Ada Yang Kosong!');history.go(-1);</script>";
        }
    }
} else if ($_GET['aksi'] == 'hapus') {

    $sql_foto = "SELECT * from struktur WHERE id='$id'";
    $query_foto = mysql_query($sql_foto);
    $ambil_foto = mysql_fetch_array($query_foto);

    if (is_file("images_struktur/" . $ambil_foto['foto'])) {
        unlink("images_struktur/" . $ambil_foto['foto']);
    }

    $sql_hapus = "DELETE FROM struktur WHERE id = '$_GET[id]'";
    if (mysql_query($sql_hapus)) {
        header("location:index.php?page=struktur");
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
}