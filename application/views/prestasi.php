<div class="mainContent clearfix">
      <div class="container">
        <div class="row clearfix">

          <div class="col-sm-8 col-xs-12">
            <div class="videoNine clearfix">

              <div class="videoArea clearfix">
                <h1>Prestasi</h1>
                <br>
                <?php
                    if($this->uri->segment(4) == "TKBS"){
                        $sekolah = "TK Bumi Siliwangi";
                    }else if($this->uri->segment(4) == "TKKC"){
                        $sekolah = "TK Kampus Cibiru";
                    }else if($this->uri->segment(4) == "SDBS"){
                        $sekolah = "SD Bumi Siliwangi";
                    }else if($this->uri->segment(4) == "SDKC"){
                        $sekolah = "SD Kampus Cibiru";
                    }else if($this->uri->segment(4) == "SDKT"){
                        $sekolah = "SD Kampus Tasikmalaya";
                    }else if($this->uri->segment(4) == "SDKS"){
                        $sekolah = "SD Kampus Serang";
                    }else if($this->uri->segment(4) == "SMPBS"){
                        $sekolah = "SMP Bumi Siliwangi";
                    }else if($this->uri->segment(4) == "SMPKC"){
                        $sekolah = "SMP Kampus Cibiru";
                    }else if($this->uri->segment(4) == "SMABS"){
                        $sekolah = "SMA Bumi Siliwangi";
                    }
                ?>
                <h3><?php echo $sekolah; ?> Tahun <?php echo $this->uri->segment(3); ?></h3>
                <?php $index = 0; ?>
                <div class="row">
                    <?php 
                        foreach($all as $i){ 
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

                            if($index % 3 == 0){
                                echo '</div>';
                                echo '<div class="row">';
                            }
                    ?>
                    <div class="col-md-4">
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
                </div><!-- row -->
              </div><!-- videoArea -->
          </div><!--videoNine-->
          </div><!-- col-sm-8 col-xs-12 -->

          <div class="col-sm-4 col-xs-12">
            
            <div class="list_block related_post_sec">
              <div class="upcoming_events">
                <h3>Sekolah</h3>
                <p>Silahkan pilih jenjang sekolah dibawah ini:</p>
                <select id="category" class="form-control select2" name="kategori" onchange="handleSelect()" style="width: 100%;" required="">
                    <option selected="selected" disabled="disabled"><b>Sekolah</b></option>
                    <option>TK Bumi Siliwangi</option>
                    <option>TK Kampus Cibiru</option>
                    <option>SD Bumi Siliwangi</option>
                    <option>SD Kampus Cibiru</option>
                    <option>SD Kampus Tasikmalaya</option>
                    <option>SD Kampus Serang</option>
                    <option>SMP Bumi Siliwangi</option>
                    <option>SMP Kampus Cibiru</option>
                    <option>SMA Bumi Siliwangi</option>
                </select>
                <!-- <a href="#" class="btn btn-default btn-block commonBtn">Selengkapnya</a> -->
              </div>
            </div><!-- end list_block -->
          </div><!-- col-sm-4 col-xs-12 -->

        </div><!-- row clearfix -->
      </div><!-- container -->
    </div><!-- mainContent -->

    <script>
        function handleSelect() {
            if (document.getElementById("category").selectedIndex == "1") {
                window.location = "<?php echo base_url(); ?>prestasi/tahun/<?php echo $this->uri->segment(3); ?>/TKBS"; // redirect
            } else if (document.getElementById("category").selectedIndex == "2") {
                window.location = "<?php echo base_url(); ?>prestasi/tahun/<?php echo $this->uri->segment(3); ?>/TKKC"; // redirect
            } else if (document.getElementById("category").selectedIndex == "3") {
                window.location = "<?php echo base_url(); ?>prestasi/tahun/<?php echo $this->uri->segment(3); ?>/SDBS"; // redirect
            } else if (document.getElementById("category").selectedIndex == "4") {
                window.location = "<?php echo base_url(); ?>prestasi/tahun/<?php echo $this->uri->segment(3); ?>/SDKC"; // redirect
            } else if (document.getElementById("category").selectedIndex == "5") {
                window.location = "<?php echo base_url(); ?>prestasi/tahun/<?php echo $this->uri->segment(3); ?>/SDKT"; // redirect
            } else if (document.getElementById("category").selectedIndex == "6") {
                window.location = "<?php echo base_url(); ?>prestasi/tahun/<?php echo $this->uri->segment(3); ?>/SDKS"; // redirect
            } else if (document.getElementById("category").selectedIndex == "7") {
                window.location = "<?php echo base_url(); ?>prestasi/tahun/<?php echo $this->uri->segment(3); ?>/SMPBS"; // redirect
            } else if (document.getElementById("category").selectedIndex == "8") {
                window.location = "<?php echo base_url(); ?>prestasi/tahun/<?php echo $this->uri->segment(3); ?>/SMPKC"; // redirect
            } else if (document.getElementById("category").selectedIndex == "9") {
                window.location = "<?php echo base_url(); ?>prestasi/tahun/<?php echo $this->uri->segment(3); ?>/SMABS"; // redirect
            }
        }
    </script>