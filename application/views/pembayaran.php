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

                <form class="form-horizontal" method="post" action="<?php echo base_url('pembayaran/simpan') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">ID Pembayaran</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="nisn" placeholder="ID Pembayaran" required>
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-8">
                                <input type="nis" class="form-control" name="nisn" placeholder="NISN" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal Bayar</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tgl_bayar" placeholder="Tanggal Bayar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Bulan Bayar</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" name="bulan_dibayar" placeholder="Bulan Bayar" required>
                            </div>
                          </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Tahun Bayar</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" name="tahun_dibayar" placeholder="Tahun Bayar" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">ID SPP</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_spp" placeholder="ID SPP" required>
                            </div>
                            </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Masukkan Nominal</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="jumlah_bayar" placeholder="Rupiah" required>
                            </div>
                        </div>
                      
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-bg btn-outline-primary btn-outline-primary">Simpan</button>
                        <button type="reset" class="btn btn-bg btn-outline-danger btn-outline-danger">Reset</button>
                    </div>
                    
        <div class="card-footer clearfix">
            <a href="<?php echo base_url('pembayaran_laporan') ?>" class="nav-link btn btn-outline-secondary btn-outline-secondary" ><i class="fa fa-flag" aria-hidden="true"></i>&nbsp;&nbsp;Laporan</a>
        </div>

                </form>

                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID Pembayaran</th>
                            <th>Nama</th>
                            <th>Tanggal Bayar</th>
                            <th>Bulan Bayar</th>
                            <th>Tahun Bayar</th>
                            <th>ID SPP</th>
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
                            <td><?php echo $value->id_pembayaran; ?></td>
                            <td><?php echo $value->nisn; ?></td>
                            <td><?php echo $value->tgl_bayar; ?></td>
                            <td><?php echo $value->bulan_dibayar; ?></td>
                            <td><?php echo $value->tahun_dibayar; ?></td>
                            <td><?php echo $value->id_spp; ?></td>
                            <td><?php echo $value->jumlah_bayar; ?></td>
                            <td>
                                <a href="<?php echo base_url('pembayaran/hapus/').$value->id_pembayaran ?>" class="btn btn-sm btn-danger">Hapus</a>
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
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

