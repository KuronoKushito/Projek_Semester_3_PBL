<style>
    .about_item_image {
        border: 3px solid #ccc; /* Add a 1px solid border with a light gray color */
        padding: 10px; /* Optional: Add some padding around the image */
    }

    .about_item_image img {
        width: 100%; /* Make the image fill the container width */
        height: 190px; /* Maintain the aspect ratio */
    }
</style>

<!-- home -->
<div class="home"> 
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li> Galeri Foto</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Galeri</h2>
                </div>
            </div>
        </div>
        <div class="row about_row">
            
            <!-- About Item -->
            <?php foreach ($galeri as $key => $value) { ?>
            <div class="col-lg-4 about_col about_col_left">
                <div class="about_item">
                    <div class="about_item_image">
                        <img src="<?= base_url('sampul/'.$value->sampul) ?>" alt="<?= $value->nama_galeri ?>">
                    </div>
                    <div class="about_item_title text-center "><a href="<?= base_url('home/detail_galeri/'.$value->id_galeri) ?>"> <?= $value->nama_galeri ?></a></div>
                    <div class="about_item_text text-center">
                        Jumlah :  <?= $value->jml_foto ?> Foto
                    </div>
                </div>
            </div>
            <?php } ?>

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
