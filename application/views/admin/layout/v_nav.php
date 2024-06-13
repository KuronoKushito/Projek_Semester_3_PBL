<style>
    .sidebar-logo {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px; /* Optional: Add margin-bottom for spacing */
    }
</style>
 <!-- /.navbar-top-links -->

 <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse ">
                        <ul class="nav" id="side-menu">

                          <!-- Logo above navigation links -->
                       <!-- <div class="sidebar-logo">
                                <img src="logo/logo.png" alt="Your Logo" height="50" />
                            </a>
                        </div> -->
                        <li class="sidebar-search">
                              
                              <!-- /input-group -->
                              
                          </li>
                    
                            <li>
                                <a href="<?= base_url('admin')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="<?= base_url('mapel') ?>"><i class="fa fa-table fa-fw"></i> Mata Pelajaran</a>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="<?= base_url('guru') ?>"><i class="fa fa-users fa-fw"></i> Guru</a>
                            </li>
                            <li>
                                <a href="<?= base_url('pengumuman') ?>"><i class="fa fa-bullhorn fa-fw"></i> Pengumuman</a>
                            </li>
                            <li>
                                <a href="<?= base_url('berita') ?>"><i class="fa fa-newspaper-o fa-fw"></i> Berita</a>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="<?= base_url('galeri') ?>"><i class="fa fa-book fa-fw"></i> Galeri</a>
                                <!-- /.nav-second-level -->
                            </li>
                         
                           
                            

                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?= $title2 ?></h1>
                     