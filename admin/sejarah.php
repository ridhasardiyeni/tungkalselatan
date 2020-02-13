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
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Sejarah Desa Tungkal Selatan</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php
                    include 'koneksi.php';
                    $isi = isset($_GET['isi']) ? $_GET['isi'] : 'list';
                    switch ($isi) {
                        case 'list' :
                            ?>
                            <a href="?page=sejarah&isi=entri"><button type="button" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-plus"></span>
                                    <span class="glyphicon-class">Tambah Data</span></button></a>
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <br/>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>keterangan</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $sql_data = "SELECT * from sejarah";
                                    $ambil_data = mysql_query($sql_data);
                                     $no = 1;
                                    while ($data = mysql_fetch_array($ambil_data)) {
                                       
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?> </td>
                                            <td><?php echo $data['judul']; ?></td>
                                            
                                            <td><?php echo $data['keterangan']; ?></td>
                                            <td><a href="?page=sejarah&isi=edit&id=<?php echo $data['id'] ?>"><button class="btn btn-block btn-info"><span class="glyphicon glyphicon-edit"></span>Edit</button></a></td>
                                            <td><a href="aksi_sejarah.php?aksi=hapus&id=<?php echo $data['id'] ?>" onclick="return confirm('Yakin akan menghapus data ?')"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</button></a> </td>
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
                    <form id="form1" name="form1" method="POST" action="aksi_sejarah.php?aksi=input" class="form-horizontal" role="form" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul">
                                    </div>
                                    
                                   <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" rows="3" name="keterangan" ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="input">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            break;
                        case 'edit' :
                            $sql_edit = "SELECT * from sejarah WHERE id='$_GET[id]'";
                            $ambil_edit = mysql_query($sql_edit);
                            $data_edit = mysql_fetch_array($ambil_edit);
                            ?>
                            <form id="form1" name="form1" method="POST" action="aksi_sejarah.php?aksi=edit&id=<?php echo $_GET['id']; ?>" class="form-horizontal" role="form" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $data_edit['judul']; ?>">
                                    </div>
                                  
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" rows="3" name="keterangan" ><?php echo $data_edit['keterangan']; ?></textarea>
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
