<!DOCTYPE html>
<html lang="en">
<head>
<title>SMAN 1 TAKISUNG : <?= $title ?></title>
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>logo/logo.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>logo/logo.png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/bootstrap4/bootstrap.min.css">
<link href="<?= base_url() ?>template/front-end/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/plugins/OwlCarousel2-2.2.1/animate.css">
<link href="<?= base_url() ?>template/front-end/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/courses.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/courses_responsive.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/blog_single.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/blog_single_responsive.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/about.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/about_responsive.css">


 
    <!-- <link rel="stylesheet" href="<?= base_url() ?>template/style/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/style/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/style/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/style/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/style/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/style/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/style/css/gijgo.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/style/css/style.css"> -->
    <style>
.section__padding {
  padding-top: 70px;

}

@media (max-width: 767px) {
  /* line 210, ../../Arafath/CL/january 2020/243.Education/HTML/scss/theme-default.scss */
  .section__padding {
    padding-top: 60px;
    padding-bottom: 60px;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  /* line 210, ../../Arafath/CL/january 2020/243.Education/HTML/scss/theme-default.scss */
  .section__padding {
    padding-top: 100px;
    padding-bottom: 100px;
  }
}

.recent_event_area .single_event {
  border: 1px solid #e0e0e0;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 30px;
}

@media (max-width: 767px) {
  /* line 2, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
  .recent_event_area .single_event {
    display: block !important;
  }
}

/* line 10, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
.recent_event_area .single_event .date {
  background: #317bd6;
  padding: 45px 70px;
}

@media (min-width: 768px) and (max-width: 991px) {
  /* line 10, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
  .recent_event_area .single_event .date {
    padding: 33px 23px;
  }
}

/* line 16, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
.recent_event_area .single_event .date span {
  font-size: 58px;
  font-family: "Abril Fatface", cursive;
  color: #fff;
  line-height: 1;
  margin-bottom: 7px;
  display: block;
}

/* line 24, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
.recent_event_area .single_event .date p {
  font-size: 18px;
  color: #fff;
  margin-bottom: 0;
  font-weight: 400;
  line-height: 1;
}

/* line 32, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
.recent_event_area .single_event .event_info {
  padding-left: 60px;
}

@media (max-width: 767px) {
  /* line 32, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
  .recent_event_area .single_event .event_info {
    padding: 15px;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  /* line 32, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
  .recent_event_area .single_event .event_info {
    padding: 25px;
  }
}

/* line 40, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
.recent_event_area .single_event .event_info h4 {
  font-size: 30px;
  font-family: "Abril Fatface", cursive;
  color: #234262;
  margin-bottom: 15px;
}

@media (max-width: 767px) {
  /* line 40, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
  .recent_event_area .single_event .event_info h4 {
    font-size: 20px;
    margin-bottom: 20px;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  /* line 40, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
  .recent_event_area .single_event .event_info h4 {
    font-size: 25px;
  }
}

/* line 53, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
.recent_event_area .single_event .event_info p {
  color: #7d84ab;
  font-size: 16px;
}

/* line 56, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
.recent_event_area .single_event .event_info p span {
  margin-right: 44px;
}

@media (max-width: 767px) {
  /* line 56, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
  .recent_event_area .single_event .event_info p span {
    margin-right: 20px;
  }
}

/* line 61, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
.recent_event_area .single_event .event_info p span i {
  margin-right: 4px;
}

/* line 68, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
.recent_event_area .single_event:nth-child(2) .date {
  background: #1fc2d9;
}

/* line 71, ../../Arafath/CL/january 2020/243.Education/HTML/scss/_event.scss */
.recent_event_area .single_event:nth-child(2) .date {
  background: #ebb830;
}

</style>

</head>