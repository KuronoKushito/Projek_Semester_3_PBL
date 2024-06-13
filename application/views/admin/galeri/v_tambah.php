<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Tambah Data
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <?php
                if (isset($error)) {
                    echo '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error . '</div>';
                }

                echo validation_errors('<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

                echo form_open_multipart('galeri/tambah');
                ?>

                <div class="form-group">
                    <label>Nama Galleri</label>
                    <input class="form-control" type="text" name="nama_galeri" placeholder="Nama Galeri" required>
                </div>

                <div class="form-group">
                    <label>Sampul (Maksimal Ukuran 2MB)</label>
                    <input type="file" class="form-control" name="sampul" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('galeri') ?>" class="btn btn-success">Kembali</a>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
