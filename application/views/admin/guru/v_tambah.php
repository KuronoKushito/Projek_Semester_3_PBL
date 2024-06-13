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

                echo form_open_multipart('guru/tambah'); // menggunakan form_open_multipart untuk upload file
                ?>

                <div class="form-group">
                    <label>NIP</label>
                    <input class="form-control" type="text" name="nip" placeholder="NIP" required>
                    <?php echo form_error('nip', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label>Nama Guru</label>
                    <input class="form-control" type="text" name="nama_guru" placeholder="Nama Guru" required>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tgl_lahir" id="tanggal" placeholder="Tanggal Lahir" style="border: none;" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <select name="id_mapel" class="form-control" required>
                            <option value="">--Pilih Mata Pelajaran--</option>
                            <?php foreach ($mapel as $key => $value) { ?>
                                <option value="<?= $value->id_mapel ?>"><?= $value->nama_mapel ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <select name="pendidikan" class="form-control" required>
                            <option value="">--Pilih Pendidikan--</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Foto Guru (Maksimal Ukuran 2MB)</label>
                    <input type="file" class="form-control" name="foto_guru" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('guru') ?>" class="btn btn-success">Kembali</a>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
