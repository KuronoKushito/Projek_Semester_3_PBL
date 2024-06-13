<style>
    /* Set a default height for larger screens */
    .home_slider_background {
        height: 850px; /* Set the default height */
    }

    /* Adjust the height for smaller screens using a media query */
    @media (max-width: 768px) {
        .home_slider_background {
            height: 400px; /* Set the height for smaller screens */
        }
    }
</style>
<!-- Home -->

<!-- Home -->

<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<!-- <?php foreach ($berita as $key => $value) { ?>
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?= base_url('gambar_berita/'.$value->gambar_berita) ?>"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita) ?>"><?= $value->judul_berita ?></a></div>
									<div class="home_slider_subtitle"><p><?= substr(strip_tags($value->isi_berita),0,200) ?>...</p></div>
									<div class="home_slider_form_container">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?> -->

				<div class="owl-item">
				<div class="home_slider_background" style="background-image: url(<?= base_url() ?>template/gambar/pic.jpg); background-size: cover; background-position: center; width: 100%;"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
								<div class="home_slider_subtitle" style="color: white;  text-shadow: -2px -2px 2px black;">Selamat Datang Di</div>
								<div class="home_slider_title" style="color: white; text-shadow: -2px -2px 2px black;">SMA NEGERI 1 TAKISUNG</div>
							<div class="col">
					<div class="courses_button trans_200"><a href="<?= base_url('home/profile') ?>">Liat Selengkapnya</a></div>
				</div>
									<div class="home_slider_form_container">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="owl-item">
				<div class="home_slider_background" style="background-image: url(<?= base_url() ?>template/gambar/back.jpg); background-size: cover; background-position: center; width: 100%;"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
								
								<div class="home_slider_subtitle" style="color: white;  text-shadow: -2px -2px 2px black;">Selamat Datang Di</div>
								<div class="home_slider_title" style="color: white; text-shadow: -2px -2px 2px black;">SMA NEGERI 1 TAKISUNG</div>
							<div class="col">
					<div class="courses_button trans_200"><a href="<?= base_url('home/profile') ?>">Liat Selengkapnya</a></div>
					</div>
									<div class="home_slider_form_container">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				

			</div>
		</div>

        <!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

    <!-- Features -->


			<!-- Features -->
	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Akademik</h2>
					</div>
				</div>
			</div>

	<div class="row features_row">
    <!-- Features Item -->
    <div class="col-lg-3 feature_col mx-auto">
        <div class="feature text-center trans_400">
            <div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_1.png" alt=""></div>
            <h3 class="feature_title">Akreditasi B</h3>
            <div class="feature_text"><p>Baik </p></div>
        </div>
    </div>

    <!-- Features Item -->
    <div class="col-lg-3 feature_col mx-auto">
        <div class="feature text-center trans_400">
            <div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_2.png" alt=""></div>
            <h3 class="feature_title">E-Learning</h3>
            <div class="feature_text"><p>Fasilitas E-Learning Yang Memadai</p></div>
        </div>
    </div>

    <!-- Features Item -->
    <div class="col-lg-3 feature_col mx-auto">
        <div class="feature text-center trans_400">
            <div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_4.png" alt=""></div>
            <h3 class="feature_title">Meraih Prestasi</h3>
            <div class="feature_text"><p>Menggapai Prestasi Unggul</p></div>
        </div>
    </div>
</div>


			</div>
		</div>
	</div>



	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Pengumuman Terbaru</h2>
					
					</div>
				</div>
			</div>
			<div class="row courses_row">

				<!-- PENGUMUMAN -->
				<?php foreach ($pengumuman as $key => $value) { ?>
				<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200"><?= date('d', strtotime($value->formatted_date)) ?></div>
									<div class="event_month trans_200"><?= date('F', strtotime($value->formatted_date)) ?></div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="<?= base_url('home/pengumuman') ?>"><?= $value->judul_pengumuman ?></a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-calendar" aria-hidden="true"></i><span><?= date('Y', strtotime($value->formatted_date)) ?></span></div>
									<div class="event_text">
										<p><?= $value->isi_pengumuman ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php } ?>
				</div>
			<div class="row">
				
			</div>
		</div>
	</div>


	<!--BERITA -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Berita Terbaru</h2>
					
					</div>
				</div>
			</div>
			<div class="row courses_row">
				
				<!-- Course -->
				<?php foreach ($berita as $key => $value) { ?>
					<br>
					<br>
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>" width="100%" height="170" ></div>
						<div class="course_body">
							<h3 class="course_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita) ?>"><?= substr(strip_tags($value->judul_berita),0,20) ?>...</a></h3>
							<div class="course_teacher">User : <?= $value->nama_admin ?></div>
							<div class="course_text">
								<p><?= substr(strip_tags($value->isi_berita),0,100) ?></p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<span><?= $value->tgl_berita ?></span>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				<?php } ?>

				 

			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="<?= base_url('home/berita') ?>">Liat Semua Berita</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Counter -->

	

	

	<!-- GURU -->

	<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/team_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Guru Sekolah</h2>
						
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<?php foreach ($guru as $key => $value) { ?>
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="<?= base_url('foto_guru/'.$value->foto_guru) ?>" alt=""></div>
						<div class="team_body">
						<div class="team_subtitle">NIP : <?= $value->nip ?></div>
							<div class="team_title"><a style="color: black;"><?= $value->nama_guru ?> </a></div>
							<div class="team_subtitle"><?= $value->nama_mapel ?></div>
							
						</div>
					</div>
				</div>
				<?php } ?>

				</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="<?= base_url('home/guru') ?>">Liat Semua Guru</a></div>
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