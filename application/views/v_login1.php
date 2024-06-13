<!DOCTYPE html>
<html lang="en">
<head>
	<title> SMAN 1 TAKISUNG</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="logo/logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/login/Login_v12/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/login/Login_v12/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/login/Login_v12/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/login/Login_v12/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/login/Login_v12/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/login/Login_v12/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/login/Login_v12/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/login/Login_v12/css/main.css">
<!--===============================================================================================-->

<style>
    .login100-form-avatar {
  width: 100px; /* Sesuaikan lebar sesuai keinginan Anda */
  height: 135px; /* Sesuaikan tinggi sesuai keinginan Anda */
  overflow: hidden; /* Agar gambar tidak keluar dari kotak */
  border-radius: 10px; /* Menentukan sudut bulatan (border-radius) untuk kotak */
  margin: auto; /* Pusatkan kotak avatar di tengah */
}

.login100-form-avatar img {
  width: 100%; /* Agar gambar mengisi seluruh kotak avatar */
  height: 100%; /* Sesuaikan tinggi secara otomatis */
  object-fit: cover; /* Agar gambar diatur sedemikian rupa sehingga mencakup seluruh kotak */
  display: block; /* Agar gambar tidak terlalu dekat dengan border-radius */
}
</style>
</head>
<body>
<!-- Formulir login yang baru -->
<!-- Formulir login yang baru -->
<div class="limiter">
    <div class="container-login100" style="background-image: url('logo/back.jpg');">
        <div class="wrap-login100 p-t-190 p-b-30">
            <form class="login100-form validate-form" action="<?= base_url('login'); ?>" method="post">
                <div class="login100-form-avatar">
                    <img src="logo/logo.png" alt="AVATAR">
                </div>

                <span class="login100-form-title p-t-20 p-b-45">
                    SMAN 1 TAKISUNG
                </span>

                <?php
                    if ($this->session->flashdata('pesan')) {
                        echo '<div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                        echo $this->session->flashdata('pesan');
                        echo '</div>';
                    }
                ?>

                <div class="wrap-input100 validate-input m-b-10" data-validate="Username Diperlukan">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10" data-validate="Password Diperlukan">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn p-t-10">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>

                <!-- Tambahkan tautan kembali ke halaman awal -->
                <div class="text-center w-full p-t-10">
                    <a href="<?= base_url(); ?>" class="text-white">Kembali ke Website</a>
                </div>
            
                

                <div class="text-center w-full p-t-25 p-b-230"></div>
                <div class="text-center w-full"></div>
            </form>
        </div>
    </div>
</div>


	
	

	
<!--===============================================================================================-->	
	<script src="<?= base_url() ?>template/login/Login_v12/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>template/login/Login_v12/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>template/login/Login_v12/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>template/login/Login_v12/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>template/login/Login_v12/js/main.js"></script>

</body>
</html>