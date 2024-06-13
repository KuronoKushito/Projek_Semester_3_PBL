<?php

echo form_open_multipart('admin/edit_user');

if ($this->session->flashdata('pesan')) {
    echo '<div class="col-sm-8 alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    echo $this->session->flashdata('pesan');
    echo '</div>';
}

?>


<div class="col-sm-8">
    <?php echo form_open('admin/edit_user'); ?>
    
    <div class="form-group">
    <label>Nama Admin</label>
    <input type="text" class="form-control" value="<?php echo $this->session->userdata('nama_admin'); ?>" name="nama_admin">
</div>

<div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" value="<?php echo $this->session->userdata('username'); ?>" name="username">
    <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
</div>


<div class="form-group">
    <label>Password(Minimal 8 Karakter)</label>
    <input type="password" class="form-control" value="" name="password">
    <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>

    <!-- Checkbox untuk menandakan pengguna tidak ingin mengubah password -->
    <div class="form-check">
    
        <label class="form-check-label slanted-label" for="keepPassword">Kosongkan Jika Tidak Ingin Merubah Password</label>
    </div>
</div>


    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    
    <?php echo form_close(); ?>
</div>

<style>
    /* CSS untuk merubah teks menjadi garis miring */
    .slanted-label {
        display: inline-block;
        transform: skew(-15deg); /* Sesuaikan sudut kemiringan sesuai keinginan */
    }
</style>