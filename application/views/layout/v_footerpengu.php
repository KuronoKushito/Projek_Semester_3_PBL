<?php
$setting = $this->m_setting->detail();
?>
<!-- Footer -->
<footer class="footer">
		<div class="footer_background" style="background-image:url(<?= base_url() ?>template/front-end/images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">SMAN 1<span> TAKISUNG</span></div>
										</a>
									</div>
								
									<div class="footer_social">
									<ul>
											<li><a href="https://www.facebook.com/people/SMP-Negeri-1-Takisung/100066665891826/?mibextid=JRoKGi"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<!-- <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> -->
											<li><a href="https://www.instagram.com/sman1takisung/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											 	
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
									<ul>
											
											<li>Phone: <?= $setting->no_telepon ?></li>
											<li><?= $setting->alamat ?></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Menu</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="<?= base_url('home') ?>">Home</a></li>
											<li><a href="<?= base_url('home/profile') ?>">Profile</a></li>
											<li><a href="<?= base_url('home/visimisi') ?>">VisiMisi</a></li>
											<li><a href="<?= base_url('home/guru') ?>">Guru</a></li>
											<li><a href="<?= base_url('home/pengumuman') ?>">Pengumuman</a></li>
											<li><a href="<?= base_url('home/berita') ?>">Berita</a></li>
											<li><a href="<?= base_url('home/galeri') ?>">Galeri</a></li>
											<li><a href="<?= base_url('home/tentang') ?>">Tentang</a></li> 
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
							
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
					
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<!-- <li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="<?= base_url() ?>template/front-end/js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url() ?>template/front-end/styles/bootstrap4/popper.js"></script>
<script src="<?= base_url() ?>template/front-end/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?= base_url() ?>template/front-end/plugins/greensock/TweenMax.min.js"></script>
<script src="<?= base_url() ?>template/front-end/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?= base_url() ?>template/front-end/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?= base_url() ?>template/front-end/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?= base_url() ?>template/front-end/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?= base_url() ?>template/front-end/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= base_url() ?>template/front-end/plugins/easing/easing.js"></script>
<script src="<?= base_url() ?>template/front-end/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?= base_url() ?>template/front-end/js/custom.js"></script>
<script src="<?= base_url() ?>template/front-end/plugins/marker_with_label/marker_with_label.js"></script>
<script src="<?= base_url() ?>template/front-end/js/contact.js"></script>
<script src="<?= base_url() ?>template/front-end/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="<?= base_url() ?>template/front-end/js/courses.js"></script>
<script src="<?= base_url() ?>template/front-end/js/blog_single.js"></script>
<script src="<?= base_url() ?>template/front-end/js/about.js"></script>


	<!-- <script src="<?= base_url() ?>template/style/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="<?= base_url() ?>template/style/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?= base_url() ?>template/style/js/popper.min.js"></script>
    <script src="<?= base_url() ?>template/style/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>template/style/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>template/style/js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>template/style/js/ajax-form.js"></script>
    <script src="<?= base_url() ?>template/style/js/waypoints.min.js"></script>
    <script src="<?= base_url() ?>template/style/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>template/style/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url() ?>template/style/js/scrollIt.js"></script>
    <script src="<?= base_url() ?>template/style/js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url() ?>template/style/js/wow.min.js"></script>
    <script src="<?= base_url() ?>template/style/js/nice-select.min.js"></script>
    <script src="<?= base_url() ?>template/style/js/jquery.slicknav.min.js"></script>
    <script src="<?= base_url() ?>template/style/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>template/style/js/plugins.js"></script>
    <script src="<?= base_url() ?>template/style/js/gijgo.min.js"></script> -->

</body>
</html>