
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
                <?php echo form_open_multipart('Admin/addPrestasi'); ?>
                <div class="form-group">
                  <input type="number" class="form-control" name="prestasi_tahun" placeholder="Tahun" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="prestasi_bulan" placeholder="Bulan" required>
                </div>
                <div class="form-group">
                  <select class="form-control" name="prestasi_sekolah">
                    <option disabled selected>- Sekolah -</option>
                    <option value="TK Bumi Siliwangi">TK Bumi Siliwangi</option>
                    <option value="TK Kampus Cibiru">TK Kampus Cibiru</option>
                    <option value="SD Bumi Siliwangi">SD Bumi Siliwangi</option>
                    <option value="SD Kampus Cibiru">SD Kampus Cibiru</option>
                    <option value="SD Kampus Tasikmalaya">SD Kampus Tasikmalaya</option>
                    <option value="SD Kampus Serang">SD Kampus Serang</option>
                    <option value="SMP Bumi Siliwangi">SMP Bumi Siliwangi</option>
                    <option value="SMP Kampus Cibiru">SMP Kampus Cibiru</option>
                    <option value="SMA Bumi Siliwangi">SMA Bumi Siliwangi</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="prestasi_siswa" placeholder="Siswa" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="prestasi_lomba" placeholder="Lomba (Misal: Pekan Olahraga Nasional)" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="prestasi_juara" placeholder="Juara (Misal: Juara 1 Lari 100 Meter)" required>
                </div>
                <div class="form-group">
                  <select class="form-control" name="prestasi_tingkat">
                    <option disabled selected>- Tingkat -</option>
                    <option value="Internasional">Internasional</option>
                    <option value="Nasional">Nasional</option>
                    <option value="Provinsi">Provinsi</option>
                    <option value="Kabupaten/Kota">Kabupaten/Kota</option>
                    <option value="Kecamatan">Kecamatan</option>
                    <option value="Desa/Kelurahan">Desa/Kelurahan</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Foto : </label>
                  <input type="file" name="file">
                </div>
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Upload<i class="fa fa-arrow-circle-right"></i></button>
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
