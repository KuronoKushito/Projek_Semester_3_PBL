<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Tambah Data Berita
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

                echo form_open_multipart('berita/tambah');
                ?>

                <div class="form-group">
                    <label>Judul Berita</label>
                    <input class="form-control" type="text" name="judul_berita" placeholder="Judul Berita" required>
                </div>

                <div class="form-group">
                    <label>Gambar Berita (Maksimal Ukuran 2MB)</label>
                    <input type="file" class="form-control" name="gambar_berita" required>
                </div>

                <div class="form-group">
                    <label>Isi Berita</label>
                    <textarea name="isi_berita" class="form-control" placeholder="Isi Berita" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('berita') ?>" class="btn btn-success">Kembali</a>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<!-- CK EDITOR -->
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('isi_berita');
</script>
