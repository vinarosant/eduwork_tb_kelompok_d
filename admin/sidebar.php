<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="../assets/img/atas.png" alt="Apotek Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">ED NEWS</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="index.php" class="nav-link <?php if ($halaman == "Data Berita") {
                                                echo "active";
                                              } ?>">
            <i class="nav-icon fa fa-newspaper"></i>
            <p>
              Data Berita
              <i class="right fas fa-angle-<?php if ($halaman == "Data Berita") {
                                              echo "right";
                                            } else {
                                              echo "left";
                                            } ?>"></i>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="kategori.php" class="nav-link <?php if ($halaman == "Data Kategori") {
                                                    echo "active";
                                                  } ?>">
            <i class="nav-icon 	fas fa-paper-plane"></i>
            <p>
              Data Kategori
              <i class="right fas fa-angle-<?php if ($halaman == "Data Kategori") {
                                              echo "right";
                                            } else {
                                              echo "left";
                                            } ?>"></i>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="penulis.php" class="nav-link <?php if ($halaman == "Data Penulis") {
                                                  echo "active";
                                                } ?>">
            <i class="nav-icon 	fas fa-user-edit"></i>
            <p>
              Data Penulis
              <i class="right fas fa-angle-<?php if ($halaman == "Data Penulis") {
                                              echo "right";
                                            } else {
                                              echo "left";
                                            } ?>"></i>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="komentar.php" class="nav-link <?php if ($halaman == "Data Komentar") {
                                                    echo "active";
                                                  } ?>">
            <i class="nav-icon 	fas fa-comment"></i>
            <p>
              Data Komentar
              <i class="right fas fa-angle-<?php if ($halaman == "Data Komentar") {
                                              echo "right";
                                            } else {
                                              echo "left";
                                            } ?>"></i>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="admin.php" class="nav-link <?php if ($halaman == "Data Admin") {
                                                echo "active";
                                              } ?>">
            <i class="nav-icon 	fas fa-user-cog"></i>
            <p>
              Data Admin
              <i class="right fas fa-angle-<?php if ($halaman == "Data Admin") {
                                              echo "right";
                                            } else {
                                              echo "left";
                                            } ?>"></i>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="user.php" class="nav-link <?php if ($halaman == "Data User") {
                                                echo "active";
                                              } ?>">
            <i class="nav-icon 	fas fa-user-cog"></i>
            <p>
              Data User
              <i class="right fas fa-angle-<?php if ($halaman == "Data User") {
                                              echo "right";
                                            } else {
                                              echo "left";
                                            } ?>"></i>
            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>