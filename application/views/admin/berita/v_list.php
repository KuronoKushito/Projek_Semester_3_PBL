<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('berita/tambah'); ?>" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>Tambah</a>
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
                <th>Judul Berita</th>
                <th>Slug Berita</th>
                <th>Tanggal Berita</th>
                <th>Gambar</th>
                <th>Nama Admin</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($berita as $key => $value) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value->judul_berita?></td>
                <td><?= $value->slug_berita ?></td>
                <td><?= $value->tgl_berita ?></td>
                <td><img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>" width="150px"></td>
                <td><?= $value->nama_admin ?></td>
                <td>
                    <a href="<?= base_url('berita/edit/'.$value->id_berita) ?>" class="btn btn-xs btn-primary"><i class="fa fa-pencil "></i></a>
                    <a href="<?= base_url('berita/delete/'.$value->id_berita) ?>" onclick="return confirm('Apakah data Ini Ingin di Hapus..?')" class="btn btn-xs btn-danger"><i class="fa fa-trash "></i></a>
                </td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>

        </div>
    </div>
</div>


