<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Edit Data Guru
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <?php
                echo validation_errors('<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
                }

                echo form_open_multipart('guru/edit/' . $guru->id_guru);
                ?>
                <div class="form-group">
                    <label>NIP</label>
                    <input class="form-control" value="<?= $guru->nip ?>" type="text" name="nip" placeholder="NIP" required>
                </div>

                <div class="form-group">
                    <label>Nama Guru</label>
                    <input class="form-control" value="<?= $guru->nama_guru ?>" type="text" name="nama_guru" placeholder="Nama Guru" required>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input class="form-control" value="<?= $guru->tempat_lahir ?>" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input class="form-control" value="<?= $guru->tgl_lahir ?>" type="text" name="tgl_lahir" id="tanggal" placeholder="Tanggal Lahir" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <select name="id_mapel" class="form-control" required>
                            <option value="<?= $guru->id_mapel ?>"><?= $guru->nama_mapel ?></option>
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
                            <option value="<?= $guru->pendidikan ?>"><?= $guru->pendidikan ?></option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label></label>
                    <img src="<?= base_url('foto_guru/' . $guru->foto_guru) ?>" width="150px">
                    <input type="hidden" name="foto_guru_lama" value="<?= $guru->foto_guru ?>">
                </div>

                <div class="form-group">
                    <label>Ganti Foto</label>
                    <input type="file" class="form-control" name="foto_guru">
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
