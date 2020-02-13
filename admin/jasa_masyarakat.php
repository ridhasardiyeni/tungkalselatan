<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Jasa Masyarakat Tungkal Selatan</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php
                    include 'koneksi.php';
                    $isi = isset($_GET['isi']) ? $_GET['isi'] : 'list';
                    switch ($isi) {
                        case 'list' :
                            ?>
                            <a href="?page=jasa_masyarakat&isi=entri"><button type="button" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-plus"></span>
                                    <span class="glyphicon-class">Tambah Data</span></button></a>
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <br/>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Keterangan</th>
                                        <th>No Telpon</th>
                                        <th>Foto</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $sql_data = "SELECT * from jasa_masyarakat";
                                    $ambil_data = mysql_query($sql_data);
                                     $no = 1;
                                    while ($data = mysql_fetch_array($ambil_data)) {
                                       
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?> </td>
                                            <td><?php echo $data['judul']; ?></td>
                                            <td><?php echo $data['keterangan']; ?></td>
                                            <td><?php echo $data['notelp']; ?></td>
                                            <?php echo "<td><img src='images_jasa_masyarakat/" . $data['foto'] . "' width='140' height='100'></td>"; ?>
                                            <td><a href="?page=jasa_masyarakat&isi=edit&id=<?php echo $data['id'] ?>"><button class="btn btn-block btn-info"><span class="glyphicon glyphicon-edit"></span>Edit</button></a></td>
                                            <td><a href="aksi_jasa_masyarakat.php?aksi=hapus&id=<?php echo $data['id'] ?>" onclick="return confirm('Yakin akan menghapus data ?')"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</button></a> </td>
                                        </tr>
                                        <?php
                                        $no++;
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <?php
                            break;
                        case 'entri' :
                            ?>
                            <form id="form1" name="form1" method="POST" action="aksi_jasa_masyarakat.php?aksi=input" class="form-horizontal" role="form" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul">
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" class="form-control" id="keterangan" placeholder="Keterangan" name="keterangan">
                                    </div>
                                    <div class="form-group">
                                        <label for="notelp">No Telpon</label>
                                        <input type="text" class="form-control" id="notelp" placeholder="Notelp" name="notelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputFile">File foto</label>
                                        <input type='file' class="form-control" name="foto" id ="foto"/>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="input">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            break;
                        case 'edit' :
                            $sql_edit = "SELECT * from jasa_masyarakat WHERE id='$_GET[id]'";
                            $ambil_edit = mysql_query($sql_edit);
                            $data_edit = mysql_fetch_array($ambil_edit);
                            ?>
                            <form id="form1" name="form1" method="POST" action="aksi_jasa_masyarakat.php?aksi=edit&id=<?php echo $_GET['id']; ?>" class="form-horizontal" role="form" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" value="<?php echo $data_edit['judul']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" class="form-control" id="keterangan" placeholder="Keterangan" name="keterangan" value="<?php echo $data_edit['keterangan']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="notelp">No Telpon</label>
                                        <input type="text" class="form-control" id="notelp" placeholder="Notelp" name="notelp" value="<?php echo $data_edit['notelp']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputFile">File foto</label>
                                        <input type="file" id="InputFile" name="foto">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="input">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            break;
                    }
                    ?>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
