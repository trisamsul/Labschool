  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Berita
        <small>Semua Berita</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Berita</a></li>
        <li class="active">Semua Berita</li>
      </ol>
    </section>
  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Daftar Berita</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="dt" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul Berita</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;foreach($all as $row){
                 ?>
                <tr >
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['berita_judul']; ?></td>
                    <td><?php echo $row['berita_tanggal']; ?></td>
                    <td>
                      <button type="button" class="btn btn-sm bg-navy"><i class="fa fa-eye-slash"></i></button>
                      <button type="button" class="btn btn-sm bg-orange"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-sm bg-red"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Judul Berita</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
            </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
