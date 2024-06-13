<body>

<?php
$setting = $this->m_setting->detail();
?>

<style>
    .custom-link {
        color: #ccc; 
        text-decoration: none; 
        cursor: default; 
    }
</style>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                <img src="logo/logo.png" alt="" height="50" />
                <img src="../logo/logo.png" alt="" height="50" />
                <img src="../../logo/logo.png" alt="" height="50" />
                    <a class="navbar-brand"  > <!-- <?= $title?> --> </a>
                    <a class="custom-link"><?= $setting->nama_sekolah ?></a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                


                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                    
                  
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i><?= $this->session->userdata('nama_admin')?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?= base_url('admin/user') ?>"><i class="fa fa-user fa-fw"></i> User</a>
                            <li><a href="<?= base_url('admin/setting') ?>"><i class="fa fa-gear fa-fw"></i> Setting Web</a>
                            <li><a href="<?= base_url('login/logout') ?>" onclick="return confirm('Apakah kamu ingin keluar?')"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>