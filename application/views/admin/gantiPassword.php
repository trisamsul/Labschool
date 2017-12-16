
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Akun
        <small>Ganti Password</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Akun</a></li>
        <li class="active">Ganti Password</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php if ($this->uri->segment(3) == "failed"){ ?>
        <div class="alert alert-danger" role="alert">
          Password Lama yang anda masukan salah.
        </div>
      <?php } ?>
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="box box-info">
        <div class="box-body">
          <?php echo form_open('Admin/updatePass'); ?>
            <input type="password" name="old" value="" placeholder="Password lama" class="form-control"><br>
            <input type="password" name="new" value="" placeholder="Password baru" class="form-control"><br>
            <input type="submit" name="" value="Submit" class="form-control btn btn-primary">
          </form>
        </div>   
      </div>
    </section>
    <!-- /.content -->
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
