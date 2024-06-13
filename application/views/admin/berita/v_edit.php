<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Edit Berita
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <?php
                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
                }

                echo validation_errors('<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

                echo form_open_multipart('berita/edit/' . $berita->id_berita);
                ?>

                <div class="form-group">
                    <label>Judul Berita</label>
                    <input class="form-control" value="<?= $berita->judul_berita ?>" type="text" name="judul_berita" placeholder="Judul Berita" required>
                </div>

                <div class="form-group">
                    <label>Ganti Isi Berita</label>
                    <textarea name="isi_berita" class="form-control" placeholder="Isi Pengumuman" cols="30" rows="10"><?= $berita->isi_berita ?></textarea>
                </div>

                <div class="form-group">
                    <label>Ganti Gambar Berita (Maksimal Ukuran 2MB)</label>
                    <input type="file" class="form-control" name="gambar_berita">

                    <!-- Menampilkan gambar berita yang sudah ada -->
                    <?php if ($berita->gambar_berita != "") : ?>
                        <div class="mt-2">
                            <img src="<?= base_url('gambar_berita/' . $berita->gambar_berita) ?>" width="150" alt="Gambar Berita">
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <input type="hidden" name="gambar_lama" value="<?= $berita->gambar_berita ?>">
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
