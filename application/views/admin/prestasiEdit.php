
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Prestasi
        <small>Tambah Prestasi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Prestasi</a></li>
        <li class="active">Tambah Prestasi</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-body">
                <?php echo form_open_multipart('Admin/editPrestasi'); ?>
                <div class="form-group">
                  <input type="number" class="form-control" name="prestasi_tahun" placeholder="Tahun" value="<?php echo $field['prestasi_tahun']; ?>" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="prestasi_bulan" placeholder="Bulan" value="<?php echo $field['prestasi_bulan']; ?>" required>
                </div>
                <div class="form-group">
                  <select class="form-control" name="prestasi_sekolah">
                    <option disabled selected>- Sekolah -</option>
                    <option <?php if($field['prestasi_sekolah'] == 'TK Bumi Siliwangi') echo "selected='selected'"; ?> value="TK Bumi Siliwangi">TK Bumi Siliwangi</option>
                    <option <?php if($field['prestasi_sekolah'] == 'TK Kampus Cibiru') echo "selected='selected'"; ?> value="TK Kampus Cibiru">TK Kampus Cibiru</option>
                    <option <?php if($field['prestasi_sekolah'] == 'SD Bumi Siliwangi') echo "selected='selected'"; ?> value="SD Bumi Siliwangi">SD Bumi Siliwangi</option>
                    <option <?php if($field['prestasi_sekolah'] == 'SD Kampus Cibiru') echo "selected='selected'"; ?> value="SD Kampus Cibiru">SD Kampus Cibiru</option>
                    <option <?php if($field['prestasi_sekolah'] == 'SD Kampus Tasikmalaya') echo "selected='selected'"; ?> value="SD Kampus Tasikmalaya">SD Kampus Tasikmalaya</option>
                    <option <?php if($field['prestasi_sekolah'] == 'SD Kampus Serang') echo "selected='selected'"; ?> value="SD Kampus Serang">SD Kampus Serang</option>
                    <option <?php if($field['prestasi_sekolah'] == 'SMP Bumi Siliwangi') echo "selected='selected'"; ?> value="SMP Bumi Siliwangi">SMP Bumi Siliwangi</option>
                    <option <?php if($field['prestasi_sekolah'] == 'SMP Kampus Cibiru') echo "selected='selected'"; ?> value="SMP Kampus Cibiru">SMP Kampus Cibiru</option>
                    <option <?php if($field['prestasi_sekolah'] == 'SMA Bumi Siliwangi') echo "selected='selected'"; ?> value="SMA Bumi Siliwangi">SMA Bumi Siliwangi</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="prestasi_siswa" placeholder="Siswa" value="<?php echo $field['prestasi_siswa']; ?>" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="prestasi_lomba" placeholder="Lomba (Misal: Pekan Olahraga Nasional)" value="<?php echo $field['prestasi_lomba']; ?>" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="prestasi_juara" placeholder="Juara (Misal: Juara 1 Lari 100 Meter)" value="<?php echo $field['prestasi_juara']; ?>" required>
                </div>
                <div class="form-group">
                  <select class="form-control" name="prestasi_tingkat">
                    <option disabled selected>- Tingkat -</option>
                    <option <?php if($field['prestasi_tingkat'] == 'Internasional') echo "selected='selected'"; ?> value="Internasional">Internasional</option>
                    <option <?php if($field['prestasi_tingkat'] == 'Nasional') echo "selected='selected'"; ?> value="Nasional">Nasional</option>
                    <option <?php if($field['prestasi_tingkat'] == 'Provinsi') echo "selected='selected'"; ?> value="Provinsi">Provinsi</option>
                    <option <?php if($field['prestasi_tingkat'] == 'Kabupaten/Kota') echo "selected='selected'"; ?> value="Kabupaten/Kota">Kabupaten/Kota</option>
                    <option <?php if($field['prestasi_tingkat'] == 'Kecamatan') echo "selected='selected'"; ?> value="Kecamatan">Kecamatan</option>
                    <option <?php if($field['prestasi_tingkat'] == 'Desa/Kelurahan') echo "selected='selected'"; ?> value="Desa/Kelurahan">Desa/Kelurahan</option>
                    <option <?php if($field['prestasi_tingkat'] == 'Lainnya') echo "selected='selected'"; ?> value="Lainnya">Lainnya</option>
                  </select>
                </div>
            </div>
            <div class="box-footer clearfix">
              <input type="hidden" name="prestasi_id" value="<?php echo $field['prestasi_id']; ?>">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Simpan <i class="fa fa-arrow-circle-right"></i></button>
            </div>
            </form>
          </div>

        </section>
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
