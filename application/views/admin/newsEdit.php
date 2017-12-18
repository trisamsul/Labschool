
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Berita
        <small>Edit Berita</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Berita</a></li>
        <li class="active">Edit Berita</li>
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
                <?php echo form_open_multipart('Admin/editNews'); ?>
                <div class="form-group">
                  <input type="text" class="form-control" name="berita_judul" placeholder="Judul Berita" value="<?php echo $field['berita_judul'];?>" required>
                </div>                        
                <div class="form-group">
                  <textarea class="textarea" placeholder="Teks Berita" name="berita_teks" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $field['berita_teks']; ?></textarea>
                </div>
            </div>
            <div class="box-footer clearfix">
              <input type="hidden" name="berita_id" value="<?php echo $field['berita_id']; ?>">
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
