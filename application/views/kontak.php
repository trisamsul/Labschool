
		<div class="custom_content custom">
			<div class="container large">
				<div class="row">
					<div class="col-xs-12 col-sm-8 custom_right">
						<div class="single_content_left">
							<?php if ($this->uri->segment(2) == "Success"){ ?>
								<div class="alert alert-success" role="alert">
									<p style="font-size: 12px;">Terimakasih. Pesan anda telah disampaikan kepada Badan Pengelola Sekolah Labschool.</p>
								</div>
							<?php } ?>
							<h3>Formulir Kontak</h3>
							<p>Jika ada pertanyaan mengenai kami, silahkan isi data dibawah ini.</p>
							<div class="contact_form">
								<?php echo form_open('Home/addPesan'); ?>
									<div class="row">
										<div class="col-xs-12 col-sm-7">
											<div class="form-group">
												<label>Nama <span class="error">*</span></label>
												<input type="text" class="form-control" name="kontak_nama">
											</div>
										</div>
									</div><!--end row-->
									<div class="row">
										<div class="col-xs-12 col-sm-7">
											<div class="form-group">
												<label>Email <span class="error">*</span></label>
												<input type="text" class="form-control" name="kontak_email">
											</div>
										</div>
									</div><!--end row-->
									<div class="row">
										<div class="col-xs-12 col-sm-11">
											<div class="form-group">
												<label>Pesan <span class="error">*</span></label>
												<textarea class="form-control" cols="10" rows="9" name="kontak_pesan"></textarea>
											</div>
										</div>
									</div><!--end row-->
									<input type="submit" value="Kirim Pesan" class="commonBtn">
								</form>
							</div>
						</div><!--end single content left-->
					</div>

					<div class="col-xs-12 col-sm-4 custom_left">
						<div class="sidebar">
							<div class="list_block sidebar_item">
								<h3>KONTAK KAMI</h3>	
								<ul class="contact_info">
									<li><i class="fa fa-home"></i> Jl. Dr. Setiabuhi No. 229. Bandung</li>
									<li><i class="fa fa-envelope"></i> <a href="mailto:info@example.com">bpslabschoolupi@gmail.com</a></li>
									<li><i class="fa fa-phone"></i> 022-2013342</li>
									<li><i class="fa fa-globe"></i> <a href="http://labschool.upi.edu">http://labschool.upi.edu</a></li>
								</ul>
							</div>
							<div class="list_block">
								<h3>JAM KERJA</h3>
								<ul class="contact_info">
									<li><strong>Senin-Jumat:</strong> 08.00 s/d 15.30 WIB</li>
								</ul>
							</div><!--end sidebar item-->
						</div><!--end sidebar-->
					</div>
				</div><!--end row-->
			</div>
		</div><!--end custom content-->
