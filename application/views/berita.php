

		<div class="post_section">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 post_left">
                    <div class="post_left_section post_left_border">
                        <div class="related_post_sec single_post">
                            <h1>Berita Terbaru</h1>
                            <br/>
                            <br/>
                            <ul>
                            <?php foreach($all as $i){ ?>
                                <li>
                                    <div class="col-md-3">
                                        <a href="<?php echo base_url(); ?>berita/view/<?php echo $i['berita_id']; ?>"><img src="<?php echo base_url(); ?>uploads/berita/<?php echo $i['berita_foto']; ?>" class="img-responsive" alt=""></a>
                                    </div><!--end rel_thumb-->
                                    <div class="col-md-9">
                                        <a href="<?php echo base_url(); ?>berita/view/<?php echo $i['berita_id']; ?>"><h2><?php echo $i['berita_judul']; ?></h2></a>
                                        <div class="meta">
                                            <span class="author">Oleh: <a href="#">Labschool UPI</a></span>
                                            <?php 
                                                $tanggal = new DateTime($i['berita_tanggal']);
                                            ?>
                                            <span class="date">Tanggal: <a href="#"><a href="#"><?php echo $tanggal->format('d-m-Y'); ?></a></span>
                                        </div>
                                        <p class="news-text"><?php echo mb_strimwidth($i['berita_teks'], 0, 360, "...") ?></p>
                                    </div><!--end rel right-->
                                </li>
                            <?php } ?>
                            </ul>
                        </div><!--end single_post-->
                    </div><!--end post left section-->
                </div><!--end post_left-->
            </div>
        </div>
    </div><!--end post section-->
