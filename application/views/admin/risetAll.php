  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Riset
        <small>Semua Riset</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Riset</a></li>
        <li class="active">Semua Riset</li>
      </ol>
    </section>
  <!-- Main content -->
    <section class="content">
      <?php if ($this->uri->segment(3) == "Success"){ ?>
        <div class="alert alert-success" role="alert">
          Riset berhasil diposting, silahkan cek pada daftar riset dibawah ini.
        </div>
      <?php }else if($this->uri->segment(3) == "Update"){ ?>
        <div class="alert alert-success" role="alert">
          Riset berhasil diedit, silahkan cek pada daftar riset dibawah ini.
        </div>
      <?php }else if($this->uri->segment(3) == "Delete"){ ?>
        <div class="alert alert-danger" role="alert">
          Riset telah dihapus, silahkan cek pada daftar riset dibawah ini.
        </div>
      <?php } ?>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Daftar Riset</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="dt" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Penulis</th>
                    <th>Judul Riset</th>
                    <th>Bidang</th>
                    <th>Tahun</th>
                    <th>File</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;foreach($all as $row){
                 ?>
                <tr >
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['riset_penulis']; ?></td>
                    <td><?php echo $row['riset_judul']; ?></td>
                    <td><?php echo $row['riset_bidang']; ?></td>
                    <td><?php echo $row['riset_tahun']; ?></td>
                    <td><a href="<?php echo base_url(); ?>uploads/riset/files/<?php echo $row['riset_file']; ?>" target="_blank"><?php echo $row['riset_file']; ?></a></td>
                    <td>
                      <button type="button" class="btn btn-sm bg-orange" onclick="location.href='<?php echo base_url();?>admin/editRiset/<?php echo $row['riset_id'] ?>'"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-sm bg-red" onclick="location.href='<?php echo base_url();?>admin/deleteRiset/<?php echo $row['riset_id'] ?>'"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Penulis</th>
                    <th>Judul Riset</th>
                    <th>Bidang</th>
                    <th>Tahun</th>
                    <th>File</th>
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
