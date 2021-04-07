<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-lg-12">
            <div class="card card-warning card-danger">
              <div class="card-header">
                <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Kompetensi Keahlian</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($kelas->result() as $value):
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $value->id_kelas; ?></td>
                            <td><?php echo $value->nama_kelas; ?></td>
                            <td><?php echo $value->kompetensi_keahlian; ?></td>
                            <td>
                                <a href="<?php echo base_url('kelas/edit/').$value->id_kelas ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?php echo base_url('kelas/hapus/').$value->id_kelas ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                    </table> 
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        <div class="card-footer clearfix">
            <a href="<?php echo base_url('kelas/tambah') ?>" class="nav-link btn btn-outline-primary btn-outline-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data</a>
        </div>


        <div class="card-footer clearfix">
            <a href="<?php echo base_url('kelas_laporan') ?>" class="nav-link btn btn-outline-secondary btn-outline-secondary"><i class="fa fa-flag" aria-hidden="true"></i>&nbsp;&nbsp;Laporan</a>
        </div>


      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>