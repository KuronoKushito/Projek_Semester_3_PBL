 <!-- Header Content -->
 <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="<?= base_url('home') ?>">
                                        <div class="logo_text"><span><?= $setting->nama_sekolah ?></span> </div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li><a href="<?= base_url('home') ?>">Home</a></li>
                                        
                                        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sekolah
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!--<a class="dropdown-item" href="#">Sejarah Sekolah</a>
            <a class="dropdown-item" href="#">Kepala Sekolah</a> -->
            <a class="dropdown-item" href="<?= base_url('home/profile') ?>">Profile</a>
            <a class="dropdown-item" href="<?= base_url('home/visimisi') ?>">Visi Misi</a>
            <a class="dropdown-item" href="<?= base_url('home/guru') ?>">Guru Sekolah</a>
            <!--<div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>-->
            </div>
          </li>
                                       
                                        <li><a href="<?= base_url('home/pengumuman') ?>">Pengumuman</a></li>
                                        <li><a href="<?= base_url('home/berita') ?>">Berita</a></li>
                                        <li><a href="<?= base_url('home/galeri') ?>">Galeri</a></li>
                                        <li><a href="<?= base_url('home/tentang') ?>">Tentang</a></li>
                                    </ul>
                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </nav>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Header Search Panel -->
            <div class="header_search_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#" class="header_search_form">
                                    <input type="search" class="search_input" placeholder="Search" required="required">
                                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>			
        </header>

        <!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="<?= base_url('home') ?>">Home</a></li>
                <li class="menu_mm"><a href="<?= base_url('home/profile') ?>">Profile Sekolah</a></li>
                <li class="menu_mm"><a href="<?= base_url('home/visimisi') ?>">Visi Misi</a></li>
				<li class="menu_mm"><a href="<?= base_url('home/guru') ?>">Guru Sekolah</a></li>
				<li class="menu_mm"><a href="<?= base_url('home/pengumuman') ?>">Pengumuman</a></li>
				<li class="menu_mm"><a href="<?= base_url('home/berita') ?>">Berita</a></li>
				<li class="menu_mm"><a href="<?= base_url('home/galeri') ?>">Galeri</a></li>
                <li class="menu_mm"><a href="<?= base_url('home/tentang') ?>">Tentang</a></li>
			</ul>
		</nav>
	</div>

    <style>
        /* Gaya utama */
.menu {
  display: none;
}

/* Gaya untuk layar yang lebih kecil (misalnya, layar ponsel) */
@media only screen and (max-width: 768px) {
  .header_content {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
  }

  .main_nav_contaner {
    margin-top: 20px; /* Jarak antara logo dan menu pada layar kecil */
  }

  .main_nav {
    display: none; /* Sembunyikan menu utama di layar kecil */
  }

  .hamburger.menu_mm {
    display: block; /* Tampilkan ikon hamburger di layar kecil */
  }

  /* Gaya untuk menu sidebar di layar kecil */
  .menu {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: start;
    text-align: right;
  }

  .menu_nav {
    margin-top: 20px; /* Jarak antara tutup dan menu pada layar kecil */
  }

  .menu_mm {
    display: block; /* Tampilkan menu di layar kecil */
  }
}
    </style>
    