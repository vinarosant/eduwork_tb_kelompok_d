<?php
include 'koneksi.php';
$halaman = "Data Penulis";
if (isset($_POST['SimpanPenulis'])) {
  $id_penulis = $_POST['id_penulis'];
  $nama = $_POST['nama'];
  $penulis_username = $_POST['penulis_username'];
  $password = password_hash($_POST['penulis_password'], PASSWORD_DEFAULT);
  mysqli_query($koneksi, "INSERT INTO penulis VALUES('$id_penulis','$nama','$penulis_username','$password')");
  header("location:penulis.php?pesan=input");
}
if (isset($_POST['EditPenulis'])) {
  $id_penulis = $_POST['id_penulis'];
  $cek = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM penulis WHERE id_penulis='$id_penulis'"));
  $nama = $_POST['nama'];
  $penulis_username = $_POST['penulis_username'];
  $newpass = $_POST['newpassword'];
  if(!empty($newpass)){
    $password = password_hash($newpass, PASSWORD_DEFAULT);
  }else{
    $password = $cek['penulis_password'];
  }

  mysqli_query($koneksi, "UPDATE penulis SET nama='$nama', penulis_username='$penulis_username', penulis_password='$password' WHERE id_penulis='$id_penulis'");
  header("location:penulis.php?pesan=edit");
}
if (isset($_GET['id_penulis'])) {
  $id_penulis = $_GET['id_penulis'];

  mysqli_query($koneksi, "DELETE FROM penulis WHERE id_penulis='$id_penulis'");
  header("location:penulis.php?pesan=hapus");
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include "navbar.php"; ?>
    <?php include "sidebar.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Data Penulis</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Data Penulis</a></li>
                <li class="breadcrumb-item active"><?= $halaman; ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
              <?php
              if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "input") {
                  echo "
              <marquee>
            <div class='alert alert-warning alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-info'></i> Data Berhasil Ditambahkan</h4>
            </div>
            </marquee>
              ";
                } else if ($_GET['pesan'] == "edit") {
                  echo "
              <marquee>
            <div class='alert alert-warning alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-info'></i> Data Berhasil Diedit</h4>
            </div>
            </marquee>
              ";
                } else if ($_GET['pesan'] == "hapus") {
                  echo "
              <marquee>
            <div class='alert alert-warning alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-info'></i> Data Berhasil Dihapus</h4>
            </div>
            </marquee>
              ";
                }
              }
              ?>
              <div class="row no-print">
                <div class="col-12">
                  <a href="#" class="btn btn-success float-right" data-toggle="modal" data-target="#inputpenulis"><i class="far fa-plus-square"></i> Tambah Data</a>
                </div>
              </div>
              <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Penulis</th>
                    <th>Username</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $data = mysqli_query($koneksi, "SELECT * FROM `penulis`");
                  $no = 1;
                  while ($d = mysqli_fetch_array($data)) {
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $d['nama']; ?></td>
                      <td><?= $d['penulis_username']; ?></td>
                      <td>
                        <a href="" data-toggle="modal" data-target="#editpenulis<?php echo $no; ?>" class="btn btn-primary btn-sm"><i class="nav-icon fas fa-edit"></i> Edit</a>
                        <a href="" data-toggle="modal" data-target="#deletepenulis<?php echo $no; ?>" class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash-alt"></i> Hapus</a>
                      </td>
                    </tr>

                    <div class="modal fade" id="editpenulis<?php echo $no; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Data Penulis</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="#">
                              <?php
                              $id_penulis = $d['id_penulis'];
                              $query = "SELECT * FROM penulis WHERE id_penulis='$id_penulis'";
                              $result = mysqli_query($koneksi, $query);
                              while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="ID Penulis">ID</label>
                                    <input type="text" class="form-control" id="id_penulis" value="<?= $row['id_penulis']; ?>" name="id_penulis" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label for="nama">Nama Penulis</label>
                                    <input type="text" class="form-control" id="nama" value="<?= $row['nama']; ?>" name="nama" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="Username">Username Penulis</label>
                                    <input type="text" class="form-control" id="penulis_username" value="<?= $row['penulis_username']; ?>" name="penulis_username" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="password">Password Penulis</label>
                                    <input type="password" class="form-control" name="newpassword" required>
                                    <small>Abaikan jika tidak merubah password</small>
                                  </div>
                                  <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="EditPenulis">Simpan</button>
                                  </div>
                                </div>
                                <!-- /.card-body -->
                              <?php } ?>
                            </form>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                    <div class="modal fade" id="deletepenulis<?php echo $no; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Delete Data Penulis</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h4 align="center">Apakah anda yakin ingin menghapus data penulis <strong><?php echo $d['nama']; ?></strong>?</h4>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                            <a href="penulis.php?id_penulis=<?php echo $d['id_penulis']; ?>" class="btn btn-primary">Delete</a>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                  <?php } ?>
                </tbody>
                <tfoot>
                  <th>No</th>
                  <th>Nama Penulis</th>
                  <th>Username</th>
                  <th>Action</th>
                </tfoot>
              </table>
            </section>
            <!-- /.Left col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <div class="modal fade" id="inputpenulis">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Data Penulis</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="#">
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama Penulis</label>
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                  <label for="">Username Penulis</label>
                  <input type="text" name="penulis_username" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="">Password Penulis</label>
                  <input type="password" name="penulis_password" class="form-control" required>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="SimpanPenulis">Simpan</button>
                </div>

              </div>
              <!-- /.card-body -->
            </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- /.content-wrapper -->
    <?php include "footer.php"; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": []
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>