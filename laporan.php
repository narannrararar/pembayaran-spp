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

    <style>
      @media print {
        .sidebar, .card card-warning card-outline {
          display: none;
        }
      }

    </style>
    
  <!-- Main content -->
  <div class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-lg-12">
              <div class="card-header">
                <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Nama Kelas</th>
                            <th>TGL Bayar</th>
                            <th>BLN Bayar</th>
                            <th>THN Bayar</th>
                            <th>ID SPP</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($laporan->result() as $value):
                            $no++;
                        ?>
                        <tr>
                            
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->nis; ?></td>
                            <td><?php echo $value->nama_kelas; ?></td>
                            <td><?php echo $value->tgl_bayar; ?></td>
                            <td><?php echo $value->bulan_dibayar; ?></td>
                            <td><?php echo $value->tahun_dibayar; ?></td>
                            <td><?php echo $value->id_spp; ?></td>
                            <td><?php echo $value->jumlah_bayar; ?></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                    </table> 
          <!-- /.col-md-6 -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>