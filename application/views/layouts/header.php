<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sekolah Laboratorium - UPI</title>

  <!-- PLUGINS CSS STYLE -->
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
  <link href="<?php echo base_url(); ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/selectbox/select_option1.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/flexslider/flexslider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/calender/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/pop-up/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>plugins/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>plugins/owl-carousel/owl.carousel.css" media="screen">

  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/default.css" id="option_color">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="body-wrapper">

  <div class="main_wrapper">

    <header class="header-wrapper">
     

      <div class="header clearfix" style="background-color: #C10E0E;">
        <nav class="navbar navbar-main navbar-default">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="header_inner">

                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo clearfix" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo1.png" alt="" class="img-responsive" /></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav navbar-right">
                      <li class="">
                        <a href="<?php echo base_url(); ?>">Beranda</a>
                      </li>
					            <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil</a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url(); ?>sejarah">Sejarah</a></li>
                          <li><a href="<?php echo base_url(); ?>visimisi">Visi & Misi</a></li>
                          <li><a href="<?php echo base_url(); ?>pengelola">Pengelola Sekolah</a></li>
                          <li><a href="<?php echo base_url(); ?>pimpinan">Pimpinan Sekolah</a></li>
                        </ul>
                      </li>
					            <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jenjang Sekolah</a>
                        <ul class="dropdown-menu">
                          <li class=" dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TK</a>
                              <ul class="dropdown-menu">
                                <li><a href="http://tk.labschool.upi.edu/">TK Bumi Siliwangi</a></li>
                                <li><a href="#">TK Kampus Cibiru</a></li>
                              </ul>
                            </li>
                          <li class=" dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SD</a>
                              <ul class="dropdown-menu">
                                <li><a href="http://sd.labschool.upi.edu/">SD Bumi Siliwangi</a></li>
                                <li><a href="http://sdlabschoolupicibiru.com/">SD Kampus Cibiru</a></li>
                                <li><a href="http://www.sdlab-upitasik.sch.id/">SD Kampus Tasikmalaya</a></li>
                                <li><a href="http://sdlab-upiserang.blogspot.co.id/">SD Kampus Serang</a></li>
                              </ul>
                            </li>
                          <li class=" dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SMP</a>
                            <ul class="dropdown-menu">
                              <li><a href="http://smp.labschool.upi.edu/">SMP Bumi Siliwangi</a></li>
                              <li><a href="http://smplabupicbr.mysch.id/">SMP Kampus Cibiru</a></li>
                            </ul>
                          </li>
                          <li class=" dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SMA</a>
                            <ul class="dropdown-menu">
                              <li><a href="http://www.smalabupi.sch.id/">SMA Bumi Siliwangi</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="">
                          <a href="<?php echo base_url(); ?>riset" >Riset</a>
                        </li>
                      <li class="">
                          <a href="<?php echo base_url(); ?>galeri" >Galeri</a>
                        </li>
                      <li class="">
                          <a href="<?php echo base_url(); ?>kontak" >Kontak</a>
                        </li>
                    </ul>
                  </div><!-- navbar-collapse -->

                </div>
              </div>
            </div>
          </div><!-- /.container -->
        </nav><!-- navbar -->
      </div>
    </header>
