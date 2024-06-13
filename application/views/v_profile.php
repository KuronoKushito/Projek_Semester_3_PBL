<!-- home -->
<div class="home"> 
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li> Profile Sekolah </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="contact_info_container">
			<div class="container">
				<div class="row">

            <div class="col-sm-4 text-center">
            <img src="<?= base_url('foto_kepsek/'.$sekolah->foto_kepsek) ?>"  width="150px" height="200px">
            <br>
            <h4><?= $sekolah->kepala_sekolah ?></h4>
            <h4>NIP : <?= $sekolah->nip ?></h4>
            </div>

            <div class="col-sm-8" >
            <div class="form-group">
            <div class="form_title">Nama Sekolah</div>
            <input type="text" class="comment_input" value="<?= $sekolah->nama_sekolah ?>" type="text" name="nama_sekolah" readonly>
            </div>

            <div class="form-group">
            <div class="form_title">Alamat</div>
            <input type="text" class="comment_input" value="<?= $sekolah->alamat ?>" type="text" name="alamat" readonly>
            </div>

            <div class="form-group">
            <div class="form_title">No Telpon Sekolah</div>
            <input type="text" class="comment_input" value="<?= $sekolah->no_telepon ?>" type="text" name="no_telepon" readonly>
            </div>


            </div>

                <div class="col-sm-12">
                    <br>
                    <br>
                <div class="form-group">
                <div class="form_title">Sejarah Sekolah</div>
                <p><?= $sekolah->sejarah ?></p>
                </div>

                </div>
            </div>
         </div>
    </div>



<!-- Newsletter -->

<div class="newsletter">
	<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/newsletter.jpg" data-speed="0.8"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-center">

					<!-- Newsletter Content -->
					<div class="newsletter_content text-lg-left text-center">
						<div class="newsletter_title">TERIMA KASIH TELAH BERKUNJUNG KE HALAMAN WEBSITE KAMI</div>
						<div class="newsletter_subtitle text-center">Ikuti Terus Website SMAN 1 Takisung Untuk Info Lainnya</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>