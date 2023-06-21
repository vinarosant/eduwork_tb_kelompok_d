<?php
include 'koneksi.php';
$halaman = "Data Komentar";
if (isset($_GET['id_komentar'])) {
  $id_komentar = $_GET['id_komentar'];

  mysqli_query($koneksi, "DELETE FROM komentar WHERE id_komentar='$id_komentar'");
  header("location:komentar.php?pesan=hapus");
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
              <h1 class="m-0">Data Komentar</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Data Komentar</a></li>
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
              <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Berita</th>
                    <th>Nama Pengirim</th>
                    <th>Komentar</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  error_reporting(0);
                  $data = mysqli_query($koneksi, "SELECT * FROM `komentar` 
                  LEFT JOIN berita ON `berita`.`id`=`komentar`.`id_berita`");
                  $no = 1;
                  while ($d = mysqli_fetch_array($data)) {
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $d['judul']; ?></td>
                      <td><?= $d['nama_pengirim']; ?></td>
                      <td><?= $d['komentar']; ?></td>
                      <td><?= $d['tgl_komentar']; ?></td>
                      <td>  
                        <a href="" data-toggle="modal" data-target="#deletekomentar<?php echo $no; ?>" class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash-alt"></i> Hapus</a>
                      </td>
                    </tr>

                    <!-- /.modal -->

                    <div class="modal fade" id="deletekomentar<?php echo $no; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Delete Data Komentar</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h4 align="center">Apakah anda yakin ingin menghapus komentar pada judul <strong><?php echo $d['judul']; ?></strong>?</h4>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                            <a href="komentar.php?id_komentar=<?php echo $d['id_komentar']; ?>" class="btn btn-primary">Delete</a>
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
                  <th>Judul Berita</th>
                  <th>Nama Pengirim</th>
                  <th>Komentar</th>
                  <th>Tanggal</th>
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