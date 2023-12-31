<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventaris Barang</title>

    <!-- Custom fonts for this template -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="tables.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Inventaris Barang</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="insert.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Insert</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Alerts Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 12, 2019</div>
                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-success">
                                    <i class="fas fa-donate text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 7, 2019</div>
                                $290.29 has been deposited into your account!
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 2, 2019</div>
                                Spending Alert: We've noticed unusually high spending for your account.
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                    </li>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data</h1>
                    <p class="mb-4"> <a target="_blank" href="https://datatables.net"></a></p>

                    <!-- DataTales Example -->
                    <?php
                    include "koneksi.php";
                    $tampil = mysqli_query($conn, 'SELECT * from barang');
                    ?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data barang</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="" method="POST">
                                    <div class="input-group">
                                        <input type="search" name="keyword" class="form-control" placeholder="Search" aria-label="Search" autocomplete="off" autofocus />
                                        <button type="submit" name="cari" class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Kondisi</th>
                                            <th>Kategori</th>
                                            <th>Jumlah Barang</th>
                                            <th>KETERANGAN</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $banyakDataPerihal = 7;
                                    $banyakData = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM barang"));
                                    $banyakHal = ceil($banyakData / $banyakDataPerihal);
                                    if (isset($_GET['halaman'])) {
                                        $halamanAktif = $_GET['halaman'];
                                    } else {
                                        $halamanAktif = 1;
                                    }
                                    $dataAwal = ($halamanAktif * $banyakDataPerihal) - $banyakDataPerihal;

                                    //fitur search
                                    if (isset($_POST['cari'])) {
                                        $keyword = $_POST['keyword'];
                                        $tampil = mysqli_query($conn, "SELECT * FROM barang WHERE 
                                        kode_barang LIKE '%$keyword%' or
                                        nama_barang LIKE '%$keyword'
                                        LIMIT $dataAwal, $banyakDataPerihal");
                                    } else {
                                        $tampil = mysqli_query($conn, "SELECT * FROM barang LIMIT $dataAwal, $banyakDataPerihal");
                                    }
                                    while ($hasil = mysqli_fetch_array($tampil)) { ?>
                                        <tr>
                                            <td><?php print "$hasil[kode_barang]" ?></td>
                                            <td><?php print "$hasil[nama_barang]" ?></td>
                                            <td><?php print "$hasil[kondisi]" ?></td>
                                            <td><?php print "$hasil[kategori_barang]" ?></td>
                                            <td><?php print "$hasil[jml_barang]" ?></td>
                                            <td>
                                                <a href="cek_hapus.php?kode_barang=<?= $hasil["kode_barang"]; ?>" class="btn btn-danger">Hapus</a>
                                                <a href="edit.php?kode_barang=<?= $hasil["kode_barang"]; ?>" class="btn btn-warning">Edit</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                                <nav>
                                    <ul class="pagination justify-content-center">
                                        <!-- Tombol Sebelumnya -->
                                        <?php if ($halamanAktif <= 1) { ?>
                                            <li class="page-item disabled"><a href="?halaman=<?php echo $halamanAktif - 1; ?>" class="page-link">Sebelumnya</a></li>
                                        <?php } else { ?>
                                            <li class="page-item"><a href="?halaman=<?php echo $halamanAktif - 1; ?>" class="page-link">Sebelumnya</a></li>
                                        <?php } ?>
                                        <!-- Akhir Tombol Sebelumnya -->
                                        <?php for ($i = 1; $i <= $banyakHal; $i++) {
                                        ?>
                                            <li class="page-item"><a href="?halaman=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                                        <?php } ?>

                                        <!-- Tombol Selanjutnya -->
                                        <?php if ($halamanAktif >= $banyakHal) { ?>
                                            <li class="page-item disabled"><a href="?halaman=<?php echo $halamanAktif + 1; ?>" class="page-link">Selanjutnya</a></li>
                                        <?php } else { ?>
                                            <li class="page-item"><a href="?halaman=<?php echo $halamanAktif + 1; ?>" class="page-link">Selanjutnya</a></li>
                                        <?php } ?>
                                        <!-- Akhir Tombol Selanjutnya -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="startbootstrap-sb-admin-2-gh-pages/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="startbootstrap-sb-admin-2-gh-pages/js/demo/datatables-demo.js"></script>

</body>

</html>