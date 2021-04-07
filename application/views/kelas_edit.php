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
            <div class="card card-primary card-danger">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>

                <?php foreach ($kelas->result() as $value): ?>

                  <form class="form-horizontal" method="post" action="<?php echo base_url('kelas/edit') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">ID Kelas</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $value->id_kelas; ?>" required>
                            </div>

                            <input type="hidden" class from-control name="id_kelas" value="<?php echo $value->id_kelas; ?>">

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_kelas" value="<?php echo $value->nama_kelas; ?>" placeholder="Nama Kelas" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kompetensi_keahlian" value="<?php echo $value->kompetensi_keahlian; ?>" placeholder="Kompetensi Keahlian" required>
                            </div>
                        </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-bg btn-outline-primary btn-outline-primary">Simpan</button>
                        <button type="reset" class="btn btn-bg btn-outline-danger btn-outline-danger">Reset</button>
                    </div>
                </form>
              <?php endforeach; ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>