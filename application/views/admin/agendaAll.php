  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Agenda
        <small>Semua Agenda</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Agenda</a></li>
        <li class="active">Semua Agenda</li>
      </ol>
    </section>
  <!-- Main content -->
    <section class="content">
      <?php if ($this->uri->segment(3) == "Success"){ ?>
        <div class="alert alert-success" role="alert">
          Agenda berhasil ditambahkan, silahkan cek pada daftar Agenda dibawah ini.
        </div>
      <?php }else if($this->uri->segment(3) == "Update"){ ?>
        <div class="alert alert-success" role="alert">
          Agenda berhasil diedit, silahkan cek pada daftar Agenda dibawah ini.
        </div>
      <?php }else if($this->uri->segment(3) == "Delete"){ ?>
        <div class="alert alert-danger" role="alert">
          Agenda telah dihapus, silahkan cek pada daftar Agenda dibawah ini.
        </div>
      <?php } ?>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Daftar Agenda</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="dt" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Agenda</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;foreach($all as $row){
                 ?>
                <tr >
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['agenda_nama']; ?></td>
                    <td><?php echo $row['agenda_tanggal']; ?></td>
                    <td><?php echo $row['agenda_tempat']; ?></td>
                    <td>
                      <button type="button" class="btn btn-sm bg-orange" onclick="location.href='<?php echo base_url();?>admin/editAgenda/<?php echo $row['agenda_id'] ?>'"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-sm bg-red" onclick="location.href='<?php echo base_url();?>admin/deleteAgenda/<?php echo $row['agenda_id'] ?>'"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Nama Agenda</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
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
