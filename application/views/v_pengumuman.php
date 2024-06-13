

<!-- home -->
<div class="home"> 
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li> Pengumuman </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="recent_event_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">PENGUMUMAN SEKOLAH</h3>
                        
                    </div>
                </div>
            </div>
            <?php foreach ($pengu as $key => $value) { ?>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                     <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                        <span><?= date('d', strtotime($value->formatted_date)) ?></span>
                            <!-- DI bawah ini formatted_date bukan dari database tapi deklarasi pada M_Home pengu yaitu tgl_pengumuman -->
                            <p><?= date('F Y', strtotime($value->formatted_date)) ?></p>
                </div>
                        <div class="event_info">
                            <a >
                                <h4><?= $value->judul_pengumuman ?></h4>
                             </a>
                            <p><?= $value->isi_pengumuman ?></p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
            </div>
        </div>
          <?php } ?>
    </div>    
    <!-- recent_news_area_end  -->

    <div class="row pagination_row">
    <div class="col">
        <?php 
            if (isset($paginasi)) {
                echo $paginasi;
            }
        ?>			
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

