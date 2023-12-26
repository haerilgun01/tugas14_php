<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Editproduk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
                <a class="btn mt-2" style="background-color:#17a2b8; color:#ffffff" href="IndexJenis.php"><i class="fa fa-arrow-left nav-icon mr-2"></i>Back</a>
              </div>
              <div class="card-header">
                <h3 class="card-title">Edit Data Jenis</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
        
                <form class="container form mt-3" action="JenisControllers/ControllerJenis.php" method="POST">
                        <div class="form-group row">
                            <label for="nama" class="col-3 col-form-label">Jenis Produk</label> 
                            <div class="col-8">
                            <input id="nama" name="nama" value="<?= $data_edit->nama; ?>" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-3 col-8">
                            <button name="submit" type="submit" value="ubah" class="btn btn-primary">Update</button>
                            <input type="hidden" name="idx" value="<?= $id ?>" />
                        </div>
                        </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- 834 - 1746 -->