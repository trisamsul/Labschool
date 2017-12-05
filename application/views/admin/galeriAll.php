  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Galeri
        <small>Semua Foto & Video</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Galeri</a></li>
        <li class="active">Semua Galeri</li>
      </ol>
    </section>
  <!-- Main content -->
    <section class="content">
      <?php if ($this->uri->segment(3) == "Success"){ ?>
      <div class="alert alert-success" role="alert">
        Foto atau video Berhasil diposting, silahkan cek pada daftar dibawah ini.
      </div>
      <?php } ?>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Daftar Foto & Video</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="dt" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Kategori</th>
                    <th>File</th>
                    <th>Caption</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;foreach($all as $row){
                 ?>
                <tr >
                    <td><?php echo $i++; ?></td>
                    <?php
                        $cat="";
                        $path="";
                        if($row['galeri_kategori'] == 0){
                            $cat = "Gambar";
                            $path = "images";
                        }else{
                            $cat = "Video";
                            $path = "videos";
                        }
                    ?>
                    <td><?php echo $cat; ?></td>
                    <td><a href="<?php echo base_url(); ?>uploads/galeri/<?php echo $path; ?>/<?php echo $row['galeri_file']; ?>" target="_blank"><?php echo $row['galeri_file']; ?></a></td>
                    <td><?php echo $row['galeri_caption']; ?></td>
                    <td>
                      <button type="button" class="btn btn-sm bg-orange"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-sm bg-red"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Kategori</th>
                    <th>File</th>
                    <th>Caption</th>
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
