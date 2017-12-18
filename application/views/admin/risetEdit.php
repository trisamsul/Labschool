
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
                <?php echo form_open_multipart('Admin/editRiset'); ?>
                <div class="form-group">
                  <input type="text" class="form-control" name="riset_judul" placeholder="Judul Riset" value="<?php echo $field['riset_judul']; ?>" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="riset_bidang" placeholder="Bidang" value="<?php echo $field['riset_bidang']; ?>" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="riset_penulis" placeholder="Penulis" value="<?php echo $field['riset_penulis']; ?>" required>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="riset_tahun" placeholder="Tahun" value="<?php echo $field['riset_tahun']; ?>" required>
                </div>
            </div>
            <div class="box-footer clearfix">
              <input type="hidden" name="riset_id" value="<?php echo $field['riset_id']; ?>">
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
