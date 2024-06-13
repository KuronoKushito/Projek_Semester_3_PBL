<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Tambah Foto
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <?php 
                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                }

                echo validation_errors('<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                }

                if ($this->session->flashdata('error')) {
                    echo '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo $this->session->flashdata('error');
                    echo '</div>';
                }

                echo form_open_multipart('galeri/tambah_foto/'.$galeri->id_galeri);
                ?>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Keterangan Foto</label>
                            <input class="form-control" type="text" name="ket_foto" placeholder="Keterangan Foto" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Foto (Maksimal Ukuran 2MB)</label>
                            <input type="file" class="form-control" name="foto" required>
                        </div>
                        <?php
                        // Tambahkan blok berikut untuk menampilkan pesan kesalahan ukuran file
                        if (isset($error) && strpos($error, 'The file you are attempting to upload exceeds the maximum allowed size') !== false) {
                            echo '<p class="text-danger">Ukuran file melebihi batas maksimum (2 MB)</p>';
                        }
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('galeri') ?>" class="btn btn-success">Kembali</a>
                </div>
                <?php echo form_close(); ?>
                <hr>

                <?php foreach ($foto as $key => $value) { ?>
                    <div class="col-sm-3 text-center">
                        <label><?= $value->ket_foto ?></label>
                        <img src="<?= base_url('foto/'.$value->foto) ?>" width="210px" height="210px">
                        <br>
                        <a href="<?= base_url('galeri/delete_foto/'.$value->id_galeri.'/'.$value->id_foto) ?>" onclick="return confirm('Apakah data Ini Ingin di Hapus..?')" class="btn btn-danger btn-xs btn-block"><i class="fa fa-trash"></i></a>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
