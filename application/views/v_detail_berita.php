<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li>Detail Berita</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>



    <!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->
				<div class="col-lg-8">
					<div class="blog_content">
						<div class="blog_title"><?= $berita->judul_berita ?></div>
						<div class="blog_meta">
							<ul>
								<li>Post on <a href="#"><?= $berita->judul_berita ?></a></li>
								<li>By <a href="#"><?= $berita->nama_admin ?></a></li>
							</ul>
						</div>
						<div class="blog_image"><img src="<?= base_url('gambar_berita/'.$berita->gambar_berita) ?>" alt=""></div>
						<p><?= $berita->isi_berita ?></p>
						<div class="blog_images">
							<div class="row">
								<div class="col-lg-6 blog_images_col"><div class="blog_image_small"><img src="images/blog_images_1.jpg" alt=""></div></div>
								<div class="col-lg-6 blog_images_col"><div class="blog_image_small"><img src="images/blog_images_2.jpg" alt=""></div></div>
							</div>
						</div>
						
					</div>
					
					<!-- Comments -->
					<div class="comments_container">
						
					</div>
				</div>

				<!-- Blog Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

					

						<!-- Latest News -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Berita Terkini Lainnya</div>
							<div class="sidebar_latest">

									<!-- Latest Course -->
									<?php foreach ($latest_berita as $key => $value) { ?>
								
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita) ?>"><?= $value->judul_berita ?></a></div>
										<div class="latest_price"><?= $value->tgl_berita ?></div>
									</div>
								</div>
								<?php } ?>

							</div>
						</div>

						
						

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