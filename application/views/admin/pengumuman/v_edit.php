<div class="col-lg-12">
<div class="panel panel-primary">
<div class="panel-heading">
    Edit Data Pengumuman
</div>
<div class="panel-body">
<div class="table-responsive">
            <?php 
            echo form_open_multipart('pengumuman/edit/'.$pengumuman->id_pengumuman);//kenapa multipart karna menginster gambar atau foto atau banyak file gk bisa form open
            ?>
    <div class="form-group">
                    <label>Judul Pengumuman</label>
                    <input class="form-control" value="<?= $pengumuman->judul_pengumuman ?>" name="judul_pengumuman" placeholder="Judul Pengumuman" required>
                </div>

                <div class="form-group">
                    <label>Isi Pengumuman</label>
                    <textarea name="isi_pengumuman" class="form-control" placeholder="Isi Pengumuman" cols="30" rows="10" required><?= $pengumuman->isi_pengumuman ?></textarea>
                </div>
        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('pengumuman') ?>" class="btn btn-success">Kembali</a>
                </div>
                

<?php echo form_close(); ?>
</div>
</div>
</div>

<script src="https://cdn.ckeditor.com/4.22.1/basic/ckeditor.js"></script>

<script>
        CKEDITOR.replace( 'isi_pengumuman' );
</script>