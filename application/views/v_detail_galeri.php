<style>
    .about_item_image {
        border: 2px solid #ccc; /* Change to a 2px solid border with a black color */
        padding: 10px; /* Optional: Add some padding around the image */
    }

    .about_item_image img {
        width: 100%; /* Make the image fill the container width */
        height: 200px; /* Maintain the aspect ratio */
        border-radius: 5px; /* Optional: Add border-radius for rounded corners */
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
                    <h2 class="section_title"><?= $nama_galeri->nama_galeri ?></h2>
                </div>
            </div>
        </div>
        <div class="row about_row">
            
						<!-- About Item -->
				<?php foreach ($galeri as $key => $value) { ?>
				<div class="col-lg-4 about_col about_col_left">
					<div class="about_item">
						<div class="about_item_image">
							<img src="<?= base_url('foto/'.$value->foto) ?>" alt="<?= $value->ket_foto ?>">
						</div>
						<div class="about_item_title text-center"> 
						<a style="color: black;"><?= $value->ket_foto ?></a>
						</div>
						<div class="about_item_text">
							
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
