
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Agenda
        <small>Edit Agenda</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Agenda</a></li>
        <li class="active">Edit Agenda</li>
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
                <?php echo form_open_multipart('Admin/editAgenda'); ?>
                <div class="form-group">
                  <input type="text" class="form-control" name="agenda_nama" placeholder="Nama Agenda" value="<?php echo $field['agenda_nama']; ?>" required>
                </div>
                <!-- Date -->
                <div class="form-group">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <?php
                      $tanggal = new DateTime($field['agenda_tanggal']);
                    ?>
                    <input type="text" class="form-control pull-right" id="datepicker" placeholder="Tanggal" name="agenda_tanggal" value="<?php echo $tanggal->format('m/d/Y'); ?>" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <div class="form-group">
                  <input type="text" class="form-control" name="agenda_tempat" placeholder="Tempat" value="<?php echo $field['agenda_tempat']; ?>" required>
                </div>
            </div>
            <div class="box-footer clearfix">
              <input type="hidden" name="agenda_id" value="<?php echo $field['agenda_id']; ?>">
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
