 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-lg-12">
            <div class="card card-primary card-yellow">
              <div class="card-header">
                <h5 class="m-1"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Pembayaran</th>
                            <th>Id Petugas</th>
                            <th>Nisn</th>
                            <th>Tanggal Bayar</th>
                            <th>Bulan Bayar</th>
                            <th>Tahun Bayar</th>
                            <th>Id SPP</th>
                            <th>Jumlah Bayar</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($pembayaran->result() as $value):
                            $no++;
                        ?> 
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $value->id_pembayaran; ?></td>
                            <td><?php echo $value->id_petugas; ?></td>
                            <td><?php echo $value->nisn; ?></td>
                            <td><?php echo $value->tgl_bayar; ?></td>
                            <td><?php echo $value->bulan_bayar; ?></td>
                            <td><?php echo $value->tahun_bayar; ?></td>
                            <td><?php echo $value->id_spp; ?></td>
                            <td><?php echo $value->jumlah_bayar; ?></td>
                            <td>
                            <a href="<?php echo base_url('pembayaran/edit/').$value->id_pembayaran ?>"class="btn btn-xs btn-info">Edit</a>
                            <a href="<?php echo base_url('pembayaran/hapus/').$value->id_pembayaran ?>"class="btn btn-xs btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                        <tfoot>
                    <tr>
                            <th>No</th>
                            <th>Id Pembayaran</th>
                            <th>Id Petugas</th>
                            <th>Nisn</th>
                            <th>Tanggal Bayar</th>
                            <th>Bulan Bayar</th>
                            <th>Tahun Bayar</th>
                            <th>Id SPP</th>
                            <th>Jumlah Bayar</th>
                            <th>Opsi</th>
                    </tr>
                  </tfoot>
                  </table> 
        </div>
            <!-- /.row -->
              <div class="card-footer clearfix">
                <a href="<?php echo base_url('pembayaran/tambah') ?>" class="btn btn-xs btn-secondary">Tambah Data</a>
              </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>