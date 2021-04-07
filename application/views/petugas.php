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
                            <th>No</th>
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($petugas->result() as $value):
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $value->username; ?></td>
                            <td><?php echo $value->nama_petugas; ?></td>
                            <td>
                                <a href="<?php echo base_url('petugas/edit/').$value->id_petugas ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?php echo base_url('petugas/hapus/').$value->id_petugas ?>" class="btn btn-sm btn-danger">Hapus</a>
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
            <a href="<?php echo base_url('petugas/tambah') ?>" class="nav-link btn btn-outline-primary btn-outline-primary" ><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data</a>
        </div>


        <div class="card-footer clearfix">
            <a href="<?php echo base_url('petugas_laporan') ?>" class="nav-link btn btn-outline-secondary btn-outline-secondary" ><i class="fa fa-flag" aria-hidden="true"></i>&nbsp;&nbsp;Laporan</a>
        </div>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>