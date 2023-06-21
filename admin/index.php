<?php
include "koneksi.php";
$halaman = "Data Berita";

session_start();
if(empty($_SESSION['username'])){
  header("location:../index.php");
}

if (isset($_POST['SimpanBerita'])) {
  $judul = $_POST['judul'];
  $tgl_publish = $_POST['tgl_publish'];
  $isi = $_POST['isi'];
  $id_kategori = $_POST['id_kategori'];
  $id_penulis = $_POST['id_penulis'];
  $id_like = $_POST['id_like'];
  $rand = rand();
  $ekstensi = array('png', 'jpg', 'jpeg', 'gif', 'webp');
  $filename = $_FILES['gambar']['name'];
  $ukuran = $_FILES['gambar']['size'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);
  if (!in_array($ext, $ekstensi)) {
    echo "error";
  } else {
    if ($ukuran < 208815000) {
      $xx = $rand . '_' . $filename;
      move_uploaded_file($_FILES['gambar']['tmp_name'], 'berita/' . $rand . '_' . $filename);
      mysqli_query($koneksi, "INSERT INTO berita
(judul,tgl_publish,isi,id_kategori,id_penulis,gambar) 
VALUES ('$judul','$tgl_publish','$isi','$id_kategori','$id_penulis','$id_like','$xx')");
      header("location:index.php?pesan=input");
    } else {
      header("location:index.php?pesan=gagalukuran");
    }
  }
}
if (isset($_POST['EditBerita'])) {
  $id = $_POST['id'];
  $judul = $_POST['judul'];
  $tgl_publish = $_POST['tgl_publish'];
  $isi = $_POST['isi'];
  $foto_baru = $_FILES['gambarnew']['name'];
  $id_kategori = $_POST['id_kategori'];
  $id_penulis = $_POST['id_penulis'];
  $id_like = $_POST['id_like'];

  if ($foto_baru != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg', 'webp', 'gif');
    $x = explode('.', $foto_baru);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambarnew']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $foto_baru;
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      $dt = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM berita WHERE id='$id'"));
      $gambarlama = $dt['gambar'];
      if (is_file("berita/" . $gambarlama)) {
        unlink("berita/" . $gambarlama);
      }
      move_uploaded_file($file_tmp, 'berita/' . $nama_gambar_baru);

      $query  = "UPDATE berita SET 
                   judul = '$judul', 
                   tgl_publish='$tgl_publish', 
                   isi = '$isi', 
                   gambar = '$nama_gambar_baru', 
                   id_kategori = '$id_kategori', 
                   id_penulis = '$id_penulis'
                   id_like = '$id_like'
                   WHERE id = '$id'
                   ";
      $result = mysqli_query($koneksi, $query);

      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
          " - " . mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }
    } else {
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png,atau jpeg.');window.location='index.php';</script>";
    }
  } else {
    $query  = "UPDATE berita SET judul = '$judul', 
      tgl_publish='$tgl_publish', isi = '$isi', id_kategori = '$id_kategori', 
      id_penulis = '$id_penulis'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
    } else {
      header("location:index.php?pesan=edit");
    }
  }
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $cek = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM berita WHERE id = '$id'"));
  if ($cek) {
    if (is_file("berita/" . $cek['gambar'])) {
      unlink("berita/" . $cek['gambar']);
    }
  }
  // menghapus data dari database
  $query = "DELETE FROM berita WHERE id = '$id'";

  if (mysqli_query($koneksi, $query)) {
    header("location:index.php?pesan=hapus");
  } else {
    echo "gagal";
  }
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
              <h1 class="m-0"> Data Berita</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Data Berita</a></li>
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
                  <!-- <a href="#" class="btn btn-success float-right" data-toggle="modal" data-target="#inputberita"><i class="far fa-plus-square"></i> Tambah Data</a> -->
                </div>
              </div>
              <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Jumlah Like</th>
                    <th>Tanggal</th>
                    <th>Isi</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $data = mysqli_query($koneksi, "SELECT * FROM `berita` 
                  LEFT JOIN kategori ON `kategori`.`id_kategori`=`berita`.`id_kategori`
                  LEFT JOIN penulis ON `penulis`.`id_penulis`=`berita`.`id_penulis`
                  LEFT JOIN `like` ON `like`.`id_berita` = `berita`.`id`");
                  $no = 1;
                  while ($d = mysqli_fetch_array($data)) {
                    $isi_berita = strlen($d['isi']) > 100 ? substr($d['isi'], 0, 100) . "..." : $d['isi'];
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td>
                        <img src="berita/<?= $d['gambar']; ?>" width="120" height="120">
                      </td>
                      <td><?= $d['judul']; ?></td>
                      <td><?= $d['jumlah_like']; ?></td>
                      <td><?= $d['tgl_publish']; ?></td>
                      <td>
                        <span class="content-toggle">
                          <span class="content-preview"><?= $isi_berita; ?></span>
                          <?php if (strlen($d['isi']) > 100) : ?>
                            <span class="content-full" style="display: none;"><?= $d['isi']; ?></span>
                            <a href="#" class="show-more">More</a>
                            <a href="#" class="show-less" style="display: none;">Less</a>
                          <?php endif; ?>
                        </span>
                      </td>
                      <td><?= $d['kategori']; ?></td>
                      <td><?= $d['nama']; ?></td>
                      <td>
                        
                        <a href="" data-toggle="modal" data-target="#deleteberita<?php echo $no; ?>" class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash-alt"></i> Hapus</a>
                      </td>
                    </tr>

                    <script>
                      var showMoreButtons = document.getElementsByClassName("show-more");
                      Array.prototype.forEach.call(showMoreButtons, function(button) {
                        button.addEventListener('click', function() {
                          var contentToggle = this.parentNode; 
                          var contentPreview = contentToggle.getElementsByClassName("content-preview")[0];
                          var contentFull = contentToggle.getElementsByClassName("content-full")[0];
                          var showLessButton = contentToggle.getElementsByClassName("show-less")[0];

                          contentPreview.style.display = "none";
                          contentFull.style.display = "inline";

                          this.style.display = "none";
                          showLessButton.style.display = "inline";
                        });
                      });

                      var showLessButtons = document.getElementsByClassName("show-less");
                      Array.prototype.forEach.call(showLessButtons, function(button) {
                        button.addEventListener('click', function() {
                          var contentToggle = this.parentNode; // Ambil elemen konten (span.content-toggle)
                          var contentPreview = contentToggle.getElementsByClassName("content-preview")[0];
                          var contentFull = contentToggle.getElementsByClassName("content-full")[0];
                          var showMoreButton = contentToggle.getElementsByClassName("show-more")[0];

                          contentPreview.style.display = "inline";
                          contentFull.style.display = "none";

                          showMoreButton.style.display = "inline";
                          this.style.display = "none";
                        });
                      });
                    </script>
                    <div class="modal fade" id="editberita<?php echo $no; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Data Berita</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="#" enctype="multipart/form-data">
                              <?php
                              $id = $d['id'];
                              $query = "SELECT * FROM berita JOIN `like` ON berita.id = `like`.`id_berita` WHERE berita.id='$id'";
                              $result = mysqli_query($koneksi, $query);
                              while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="ID Berita">ID</label>
                                    <input type="text" class="form-control" value="<?= $row['id']; ?>" name="id" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label for="Gambar">Gambar</label>
                                    <br>
                                    <img src="berita/<?php echo $row['gambar']; ?>" height="120" width="120">
                                    <input type="file" name="gambarnew" class="form-control-file">
                                    <small>Abaikan jika tidak merubah gambar.</small>
                                  </div>
                                  <div class="form-group">
                                    <label for="Judul">Judul</label>
                                    <input type="text" class="form-control" value="<?= $row['judul']; ?>" name="judul" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="Jumlah Like">Jumlah Like</label>
                                    
                                    <input type="text" class="form-control" value="<?= $row['jumlah_like']; ?>" name="jumlah_like" required>
                                    
                                  </div>
                                  <div class="form-group">
                                    <label for="Tanggal">Tanggal</label>
                                    <input type="datetime-local" class="form-control" value="<?= $row['tgl_publish']; ?>" name="tgl_publish" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="Isi">Isi</label>
                                    <textarea name="isi" class="form-control" rows="20" col="10"><?= $row['isi']; ?></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="Kategori">Kategori</label>
                                    <select name="id_kategori" class="form-control" required>
                                      <?php
                                      $kat = mysqli_query($koneksi, "SELECT * FROM kategori");
                                      while ($kategori = mysqli_fetch_assoc($kat)) {
                                      ?>
                                        <option value="<?php echo $kategori['id_kategori']; ?>" <?php if ($row['id_kategori'] == $kategori['id_kategori']) {
                                                                                                  echo "selected";
                                                                                                } ?>><?php echo $kategori['kategori']; ?></option>
                                      <?php } ?>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="Penulis">Penulis</label>
                                    <select name="id_penulis" class="form-control" required>
                                      <?php
                                      $nulis = mysqli_query($koneksi, "SELECT * FROM penulis");
                                      while ($penulis = mysqli_fetch_assoc($nulis)) {
                                      ?>
                                        <option value="<?php echo $penulis['id_penulis']; ?>" <?php if ($row['id_penulis'] == $penulis['id_penulis']) {
                                                                                                echo "selected";
                                                                                              } ?>><?php echo $penulis['nama']; ?></option>
                                      <?php } ?>
                                    </select>
                                  </div>
                                  <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="EditBerita">Simpan</button>
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

                    <div class="modal fade" id="deleteberita<?php echo $no; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Delete Data Berita</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h4 align="center">Apakah anda yakin ingin menghapus data ?</h4>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                            <a href="index.php?id=<?php echo $d['id']; ?>" class="btn btn-primary">Delete</a>
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
                  <th>Gambar</th>
                  <th>Judul</th>
                  <th>Jumlah Like</th>
                  <th>Tanggal</th>
                  <th>Isi</th>
                  <th>Kategori</th>
                  <th>Penulis</th>
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
    <div class="modal fade" id="inputberita">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Data Berita</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="#" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputFile">Upload Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="form-control-file" name="gambar" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="form-group">
                                    <label for="Jumlah Like">Jumlah Like</label>
                                    <input type="text" class="form-control" id="jumlah_like" name="jumlah_like" required>
                                  </div>
                <div class="form-group">
                  <label for="Tanggal">Tanggal</label>
                  <input type="datetime-local" class="form-control" id="tanggal" name="tgl_publish" required>
                </div>
                <div class="form-group">
                  <label for="Isi">Isi</label>
                  <textarea name="isi" class="form-control" cols="30" rows="10" required></textarea>
                </div>
                <div class="form-group">
                  <label for="Kategori">Kategori</label>
                  <select name="id_kategori" class="form-control" required>
                    <?php
                    $kat = mysqli_query($koneksi, "SELECT * FROM kategori");
                    while ($kategori = mysqli_fetch_assoc($kat)) {
                    ?>
                      <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="Penulis">Penulis</label>
                  <select name="id_penulis" class="form-control" required>
                    <?php
                    $nulis = mysqli_query($koneksi, "SELECT * FROM penulis");
                    while ($penulis = mysqli_fetch_assoc($nulis)) {
                    ?>
                      <option value="<?php echo $penulis['id_penulis']; ?>"><?php echo $penulis['nama']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="SimpanBerita">Simpan</button>
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

