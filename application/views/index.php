

    <div class="banner carousel slide" id="recommended-item-carousel" data-ride="carousel">
      <div class="slides carousel-inner">
        <div class="item active">
          <a href="http://upi.edu" target="_blank"><img src="<?php echo base_url(); ?>assets/img/home/slider/slider_image_1.jpg" alt="" /></a>
        </div>
        <div class="item">
            <a href="http://upi.edu" target="_blank"><img src="<?php echo base_url(); ?>assets/img/home/slider/slider_image_2.jpg" alt="" /></a>
        </div>
        <div class="item">
            <a href="http://upi.edu" target="_blank"><img src="<?php echo base_url(); ?>assets/img/home/slider/slider_image_3.jpg" alt="" /></a>
        </div>
        <div class="item">
          <a href="http://upi.edu" target="_blank"><img src="<?php echo base_url(); ?>assets/img/home/slider/slider_image_4.jpg" alt="" /></a>
      </div>
      </div>
      <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
        <img src="<?php echo base_url(); ?>assets/img/home/slider/prev.png">
        </a>
      <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
        <img src="<?php echo base_url(); ?>assets/img/home/slider//next.png">
      </a>
    </div><!--end banner-->
    
    <div class="brandSection clearfix">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="owl-carousel partnersLogoSlider">
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <a href="#"><img src="<?php echo base_url(); ?>assets/img/logo-single.png" style="float:left;"/><h5 style="margin-top:15px;">TK Bumi Siliwangi</h5></a>
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <a href="#"><img src="<?php echo base_url(); ?>assets/img/logo-single.png" style="float:left;"/><h5 style="margin-top:15px;">SD Bumi Siliwangi</h5></a>
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <a href="#"><img src="<?php echo base_url(); ?>assets/img/logo-single.png" style="float:left;"/><h5 style="margin-top:15px;">SMP Bumi Siliwangi</h5></a>
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <a href="#"><img src="<?php echo base_url(); ?>assets/img/logo-single.png" style="float:left;"/><h5 style="margin-top:15px;">SMA Bumi Siliwangi</h5></a>
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <a href="#"><img src="<?php echo base_url(); ?>assets/img/logo-single.png" style="float:left;"/><h5 style="margin-top:15px;">TK Kampus Cibiru</h5></a>
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <a href="#"><img src="<?php echo base_url(); ?>assets/img/logo-single.png" style="float:left;"/><h5 style="margin-top:15px;">SD Kampus Cibiru</h5></a>
                </div>
              </div>
              <div class="slide">
                  <div class="partnersLogo clearfix">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/img/logo-single.png" style="float:left;"/><h5 style="margin-top:15px;">SMP Kampus Cibiru</h5></a>
                  </div>
                </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <a href="#"><img src="<?php echo base_url(); ?>assets/img/logo-single.png" style="float:left;"/><h5 style="margin-top:15px;">SD Kampus Tasik</h5></a>
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <a href="#"><img src="<?php echo base_url(); ?>assets/img/logo-single.png" style="float:left;"/><h5 style="margin-top:15px;">SD Kampus Serang</h5></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- Brand-section -->

    <div class="mainContent clearfix">
        <div class="container">
          <div class="row clearfix">
              <div class="related_post_sec single_post">
                  <center>
                    <h3>Berita Terkini</h3>
                    <hr style="width:200px; height: 3px; background-color:#C10E0E; margin-top: -20px;">
                  </center>
                    <?php foreach($berita as $i){ ?>
                    <div class="col-md-3">
                      <div class="thumbnail news-item">
                        <img src="<?php echo base_url(); ?>uploads/berita/<?php echo $i['berita_foto']; ?>" alt="img" class="img-responsive news-img">
                        <div class="caption">
                          <h4 class="news-title"><?php echo $i['berita_judul']; ?></h4>
                          <?php 
                            $tanggal = new DateTime($i['berita_tanggal']);
                          ?>
                          <h5 class="news-date"><?php echo $tanggal->format('d-M-Y'); ?></h5>
                          <p class="news-text"><?php echo mb_strimwidth($i['berita_teks'], 0, 150, "...") ?></p>
                          <br>
                          <a href="<?php echo base_url(); ?>berita/view/<?php echo $i['berita_id']; ?>" class="btn btn-default btn-block commonBtn">Selengkapnya</a>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    
                </div><!--related_post_sec-->
  
          </div>
        </div>
    </div>

    <div class="mainContent clearfix">
      <div class="container">
        <div class="row clearfix">

          <div class="col-sm-8 col-xs-12">
            <div class="videoNine clearfix">

              <div class="videoArea clearfix">
                <h3>Peta Lokasi Kami</h3>
                <div class="row">
                  <iframe src="https://www.google.com/maps/d/embed?mid=1R0Pit4JaMAhGEr1xbnEaF2p9hHE" width="100%" height="400px"></iframe>
                </div><!-- row -->
              </div><!-- videoArea -->
          </div><!--videoNine-->
          </div><!-- col-sm-8 col-xs-12 -->

          <div class="col-sm-4 col-xs-12">
            
            <div class="list_block related_post_sec">
              <div class="upcoming_events">
                <h3>Agenda Kegiatan</h3>
                <ul>
                  <li class="related_post_sec single_post">
                    <span class="date-wrapper">
                      <span class="date"><span>14</span>Juli</span>
                    </span>
                    <div class="rel_right">
                      <h4><a href="#">Orientasi Peserta Didik Baru Tahun Ajaran 2017-2018</a></h4>
                      <div class="meta">
                        <span class="place"><i class="fa fa-map-marker"></i>SMP Lab. Cibiru</span>
                      </div>
                    </div>
                  </li>
				  <li class="related_post_sec single_post">
                    <span class="date-wrapper">
                      <span class="date"><span>11</span>Juni</span>
                    </span>
                    <div class="rel_right">
                      <h4><a href="#">Peringatan HUT SMP Laboratorium Kampus Tasikmalaya</a></h4>
                      <div class="meta">
                        <span class="place"><i class="fa fa-map-marker"></i>SMA Lab. Tasikmalaya</span>
                      </div>
                    </div>
                  </li>
                  <li class="related_post_sec single_post">
                    <span class="date-wrapper">
                      <span class="date"><span>08</span>Juni</span>
                    </span>
                    <div class="rel_right">
                      <h4><a href="#">Upacara Pelepasan "Paturay Tineung" Siswa Kelas XII</a></h4>
                      <div class="meta">
                        <span class="place"><i class="fa fa-map-marker"></i>SMA Lab. Serang</span>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- <a href="#" class="btn btn-default btn-block commonBtn">Selengkapnya</a> -->
              </div>
            </div><!-- end list_block -->
          </div><!-- col-sm-4 col-xs-12 -->

        </div><!-- row clearfix -->
      </div><!-- container -->
    </div><!-- mainContent -->

    <div class="count clearfix wow fadeIn paralax" data-wow-delay="100ms" style="background-image: url(<?php echo base_url(); ?>assets/img/home/carousel.jpg);">
      <div class="container">
        <div class="row">
		  <div class="col-xs-6 col-sm-3">
            <div class="text-center">
              <div class="icon"><i class="fa fa-map-marker"></i></div>
              <div class="counter">
              <span class="timer">4</span>
              </div>
              <div class="seperator-small"></div>
              <p>Lokasi</p>
            </div>
          </div><!-- col-sm-3 -->
		  <div class="col-xs-6 col-sm-3">
            <div class="text-center">
              <div class="icon"><i class="fa fa-book"></i></div>
              <div class="counter">
              <span class="timer">9</span>
              </div>
              <div class="seperator-small"></div>
              <p>Sekolah</p>
            </div>
          </div><!-- col-sm-3 -->

          <div class="col-xs-6 col-sm-3">
            <div class="text-center">
              <div class="icon"><i class="fa fa-male"></i></div>
              <div class="counter">
              <span class="timer">332</span>
              </div>
              <div class="seperator-small"></div>
              <p>Guru</p>
            </div>
          </div><!-- col-sm-3 -->
          <div class="col-xs-6 col-sm-3">
            <div class="text-center">
              <div class="icon"><i class="fa fa-group"></i></div>
              <div class="counter">
              <span class="timer">4,244</span>
              </div>
              <div class="seperator-small"></div>
            <p>Siswa</p>
            </div>
          </div><!-- col-sm-3 -->
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- count -->

    <div class="testimonial-section clearfix">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-8">
            <div class="testimonial">
              <div class="carousal_content">
                <p>Sekolah Laboratorium UPI merupakan sekolah ideal untuk putra-putri terbaik bangsa ini. Fasilitas modern, Tenaga Pengajar terbaik di bidangnya, Kurikulum terbaik.</p>
              </div>
              <div class="carousal_bottom">
                <div class="thumb">
                  <img src="<?php echo base_url(); ?>assets/img/about/SARA-LISBON_Art-Student.jpg" alt="" draggable="false">
                </div>
                <div class="thumb_title">
                  <span class="author_name">Prof. Dr. Aim Abdulkarim, M.Pd.</span>
                  <span class="author_designation">Wakil Rektor <a href="#"> Universitas Pendidikan Indonesia</a></span>
                </div>
              </div>
            </div><!-- testimonial -->
          </div><!-- col-xs-12 -->
          <div class="col-xs-12 col-sm-4">
            <div class="features">
              <h3>Kenapa Memilih Kami?</h3>
              <ul>
                <li><i class="fa fa-check-circle-o"></i>Fasilitas modern</li>
                <li><i class="fa fa-check-circle-o"></i>Tenaga Pengajar terbaik di bidangnya</li>
                <li><i class="fa fa-check-circle-o"></i>Lingkungan ilmiah, edukatif, dan relijius</li>
                <li><i class="fa fa-check-circle-o"></i>Biaya pendidikan murah</li>
                <li><i class="fa fa-check-circle-o"></i>Terakreditasi</li>
              </ul>
            </div>
          </div><!-- col-xs-12 -->
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- testimonial-section -->

