  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Prestasi
        <small>Semua Prestasi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Prestasi</a></li>
        <li class="active">Semua Prestasi</li>
      </ol>
    </section>
  <!-- Main content -->
    <section class="content">
      <?php if ($this->uri->segment(3) == "Success"){ ?>
        <div class="alert alert-success" role="alert">
          Prestasi berhasil diposting, silahkan cek pada daftar Prestasi dibawah ini.
        </div>
      <?php }else if($this->uri->segment(3) == "Update"){ ?>
        <div class="alert alert-success" role="alert">
          Prestasi berhasil diedit, silahkan cek pada daftar Prestasi dibawah ini.
        </div>
      <?php }else if($this->uri->segment(3) == "Delete"){ ?>
        <div class="alert alert-danger" role="alert">
          Prestasitelah dihapus, silahkan cek pada daftar Prestasi dibawah ini.
        </div>
      <?php } ?>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Daftar Prestasi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="dt" class="table table-bordered table-hover table-responsive">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Tahun</th>
                    <th>Bulan</th>
                    <th>Sekolah</th>
                    <th>Siswa</th>
                    <th>Lomba</th>
                    <th>Juara</th>
                    <th>Tingkat</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;foreach($all as $row){
                 ?>
                <tr >
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['prestasi_tahun']; ?></td>
                    <td><?php echo $row['prestasi_bulan']; ?></td>
                    <td><?php echo $row['prestasi_sekolah']; ?></td>
                    <td><?php echo $row['prestasi_siswa']; ?></td>
                    <td><?php echo $row['prestasi_lomba']; ?></td>
                    <td><?php echo $row['prestasi_juara']; ?></td>
                    <td><?php echo $row['prestasi_tingkat']; ?></td>
                    <td><a href="<?php echo base_url(); ?>uploads/prestasi/<?php echo $row['prestasi_foto']; ?>" target="_blank"><?php echo $row['prestasi_foto']; ?></a></td>
                    <td>
                      <button type="button" class="btn btn-sm bg-orange" onclick="location.href='<?php echo base_url();?>admin/editPrestasi/<?php echo $row['prestasi_id'] ?>'"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-sm bg-red" onclick="location.href='<?php echo base_url();?>admin/deletePrestasi/<?php echo $row['prestasi_id'] ?>'"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Tahun</th>
                    <th>Bulan</th>
                    <th>Sekolah</th>
                    <th>Siswa</th>
                    <th>Lomba</th>
                    <th>Juara</th>
                    <th>Tingkat</th>
                    <th>Foto</th>
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
