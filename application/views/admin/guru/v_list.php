<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('guru/tambah'); ?>" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>Tambah</a>
        </div>
        <div class="panel-body">
        <div class="table-responsive">
<?php 
        if ($this->session->flashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
            echo $this->session->flashdata('pesan');
            echo '</div>';
        }
        ?>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>No</th>
                <th>Nip</th>
                <th>Nama Guru</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Mapel</th>
                <th>Pendidikan</th>
                <th>Foto</th>
                <th>Nama Admin</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($guru as $key => $value) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value->nip ?></td>
                <td><?= $value->nama_guru ?></td>
                <td><?= $value->tempat_lahir ?></td>
                <td><?= $value->tgl_lahir ?></td>
                <td><?= $value->nama_mapel ?></td>
                <td><?= $value->pendidikan ?></td>
                <td><img src="<?= base_url('foto_guru/'.$value->foto_guru) ?>" width="100px"></td>
                <td><?= $value->nama_admin ?></td>
                <td>
                    <a href="<?= base_url('guru/edit/'.$value->id_guru) ?>" class="btn btn-xs btn-primary"><i class="fa fa-pencil "></i></a>
                    <a href="<?= base_url('guru/delete/'.$value->id_guru) ?>" onclick="return confirm('Apakah data Ini Ingin di Hapus..?')" class="btn btn-xs btn-danger"><i class="fa fa-trash "></i></a>
                </td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>

        </div>
    </div>
</div>
