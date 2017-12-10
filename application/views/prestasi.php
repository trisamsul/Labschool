    <div class="mainContent clearfix">
        <div class="container">
          <div class="row clearfix">
                <div class="custom_title">
                    <center>
                        <h1>Prestasi</h1>
                        <h3>Tahun <?php echo $this->uri->segment(3); ?></h3>
                        <br>
                    </center>
                </div><!--end custom_title-->
              <div class="related_post_sec single_post">
                    <?php $index = 0; ?>
                    <div class="row">
                    <?php foreach($all as $i){ ?>
                        <?php  
                            if($i['prestasi_tingkat'] == "Internasional"){
                                $star = 5;
                            }elseif ($i['prestasi_tingkat'] == "Nasional") {
                                $star = 4;
                            }elseif ($i['prestasi_tingkat'] == "Provinsi") {
                                $star = 3;
                            }elseif ($i['prestasi_tingkat'] == "Kabupaten/Kota") {
                                $star = 2;
                            }else{
                                $star = 1;
                            }

                            if($index % 4 == 0){
                                echo '</div>';
                                echo '<div class="row">';
                            }
                        ?>
                    <div class="col-md-3">
                      <div class="thumbnail news-item">
                        <img src="<?php echo base_url(); ?>uploads/prestasi/<?php echo $i['prestasi_foto']; ?>" alt="img" class="img-responsive news-img">
                        <div class="caption">
                        <?php for($n=0; $n<$star; $n++){ ?>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            <?php } ?>
                          <h4 class="news-title"style="margin-top: 5px;"><?php echo $i['prestasi_lomba']; ?></h4>
                          <p><small class="author">Tingkat: <i style="color: red;"><?php echo $i['prestasi_tingkat']; ?></i> | Bulan: <i style="color: red;"><?php echo $i['prestasi_bulan']; ?></i> </small></p>
                          <p style="margin-top: 5px;">- <i><?php echo $i['prestasi_juara']; ?></i></p>
                          <p style="margin-top: 5px;"><?php echo $i['prestasi_siswa']; ?></p>
                          <p style="margin-top: 5px;"><b><?php echo $i['prestasi_sekolah']; ?></b></p>
                        </div>
                      </div>
                    </div>
                    <?php 
                        $index++;
                        } 
                    ?>
                    </div>
                </div><!--related_post_sec-->
  
          </div>
        </div>
    </div>