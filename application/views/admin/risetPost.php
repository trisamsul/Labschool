
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Riset
        <small>Unggah Riset</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Riset</a></li>
        <li class="active">Unggah Riset</li>
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
                <?php echo form_open_multipart('Admin/addRiset'); ?>
                <div class="form-group">
                  <input type="text" class="form-control" name="riset_judul" placeholder="Judul Riset" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="riset_bidang" placeholder="Bidang" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="riset_penulis" placeholder="Penulis" required>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="riset_tahun" placeholder="Tahun" required>
                </div>
                <div class="form-group">
                  <label>File dokumen : </label>
                  <input type="file" name="file" placeholder="" required>
                </div>
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Upload
                <i class="fa fa-arrow-circle-right"></i></button>
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
