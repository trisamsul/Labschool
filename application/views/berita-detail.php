
		<div class="post_section clearfix">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 col-sm-8 post_left">
						<div class="post_left_section post_left_border">

							<div class="post">
								<div class="post_thumb">
									<img src="<?php echo base_url(); ?>uploads/berita/<?php echo $news['berita_foto']; ?>" alt="" />
								</div><!--end post thumb-->
								<div class="meta">
                  <span class="author">Oleh: <a href="#">Labschool UPI</a></span>
                  <?php 
                    $tanggal = new DateTime($news['berita_tanggal']);
                  ?>
									<span class="date">Tanggal: <a href="#"><?php echo $tanggal->format('d-M-Y'); ?></a></span>
								</div><!--end meta-->
								<h1><a href="#"><?php echo $news['berita_judul']; ?></a></h1>
								<div class="post_desc">
									<p><?php echo $news['berita_teks']; ?></p>
								</div><!--end post desc-->
								
							</div><!--end post-->

						</div><!--end post left section-->
					</div><!--end post_left-->

					<div class="col-xs-12 col-sm-4 post_right">
						<div class="post_right_inner">

							<div class="related_post_sec">
								<div class="list_block">
									<h3>Berita Lainnya</h3>
									<ul>
                  <?php foreach($all as $i){ ?>
									<li>
										<span class="rel_thumb">
											<img style="width: 100px;float:left;" src="<?php echo base_url(); ?>uploads/berita/<?php echo $i['berita_foto']; ?>" alt="" />
										</span><!--end rel_thumb-->
										<div class="rel_right">
                      <?php 
                        $tanggal = new DateTime($i['berita_tanggal']);
                      ?>
                      <span class="date">Tanggal: <?php echo $tanggal->format('d-M-Y'); ?></span>
											<a href="<?php echo base_url(); ?>berita/view/<?php echo $i['berita_id']; ?>"><h4><?php echo $i['berita_judul']; ?></h4></a>
										</div><!--end rel right-->
                  </li>
                  <?php } ?>
								</ul>
									<a href="<?php echo base_url();?>berita" class="more_post">Selengkapnya</a>
								</div>

							</div><!--end related_post_sec-->

						</div><!--end post right inner-->
					</div><!--end post_right-->

				</div>
			</div>
		</div><!--end post section-->
