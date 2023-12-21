<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard</title>
    <link rel="icon" type="image/png" href="img/leap.png">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <!-- Custo data tables -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
    .text {
        white-space: nowrap;
        /* Agar teks tidak pindah ke baris baru */
        overflow: hidden;
        /* Agar teks yang melebihi ukuran tersembunyi */
        text-overflow: ellipsis;
        /* Tambahkan elipsis (...) jika teks terlalu panjang */
        font-size: 0.8em;
        /* Atur ukuran font sesuai kebutuhan */
        transform: scale(0.8);
        /* Mengurangi ukuran teks menggunakan transformasi skala */
        transform-origin: left;
        /* Mengatur titik asal transformasi ke kiri */
    }
    </style>

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion d-flex flex-column" id="accordionSidebar" style="background-image: linear-gradient(    #0097ff,#0367ac  
);box-shadow: 0 10px 20px #000;z-index:2">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center pt-4 pb-4" href="#"
                style="height: 7em">
                <img src="img/leap1.png" alt="" width="80%" />
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active ">
                <a class="nav-link">
                    <i class="fa fa-user"></i>
                    <span>Nama :</span>
                    <p class="text">MUHAMMAD JEFRY MULYANTO</p>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Nav Item - gender -->
            <li class="nav-item active " style="margin-top:-20px;margin-bottom:-15px">
                <a class="nav-link ">
                    <i class="fa fa-venus-mars"></i>
                    <span>Jenis Kelamin :</span>
                    <p class="text">Pria</p>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Nav Item - Gender -->
            <li class="nav-item active" style="margin-top:-20px;margin-bottom:-15px">
                <a class="nav-link ">
                    <i class="fa fa-envelope"></i>
                    <span>Email :</span>
                    <p class="text">
                        mhmmadjfry015@gmail.com</p>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Nav Item - Add User-->
            <li class="nav-item active " style="margin-top:-20px;margin-bottom:-15px">
                <a class="nav-link ">
                    <i class="fa fa-building"></i>
                    <span>Perusahaan :</span>
                    <p class="text">Leap Surabaya</p>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Nav Logout -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block" />


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-body topbar static-top nav" style="background-image: linear-gradient(to left, #0097ff,  #0367ac 
  );z-index: 1;box-shadow: -10px 0 20px #000;">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none bg-transparent rounded-circle mr-3">
                        <i class="fa fa-bars text-white"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item active">
                            <a class="nav-link">
                                <i class="fa fa-user mr-3"></i>
                                <span style="font-size: 0.8em;">MUHAMMAD JEFRY MULYANTO</span>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item  no-arrow">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>

                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Heading -->
                <div class="col-md-12 text-center mb-5 text-dark p-5" style="background-image: linear-gradient(to right,    #0097ff  
 ,    #0367ac  
);">

                    <div class="col-md-6 text-left text-white">
                        <h3>Alur Test</h3>
                        <h5>Terdapat 4 test</h5>
                    </div>

                </div>



                <!-- Begin Page Content -->
                <div class="container-fluid" style="margin-bottom: 20em;">

                    <!-- Content Row -->
                    <div class="row mb-5" style="margin-top:-80px">

                        <!-- Reading Test-->
                        <div class="col-xl-3 col-md-6 mb-4" style="text-decoration: none;z-index: 2;" id="myDiv">
                            <div class="card  shadow ">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" mb-0 mr-3  font-weight-bold text-gray-800">
                                                <span class="h3">Test 1</span>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 mt-2 ">
                                                        <span>Reading</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <a href="index.php" onclick="removeElement()"
                                            class="btn btn-primary mt-3 text-end " style="background: #0097ff;">
                                            <span>Detail</span><i class="fa fa-arrow-right ml-3"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Listening Test-->
                        <div class="col-xl-3 col-md-6 mb-4" style="text-decoration: none;" id="myDiv">
                            <div class="card  shadow ">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" mb-0 mr-3  font-weight-bold text-gray-800">
                                                <span class="h3">Test 2</span>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 mt-2 ">
                                                        <span>Listening</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <a href="index.php" onclick="removeElement()"
                                            class="btn btn-primary mt-3 text-end " style="background: #0097ff;">
                                            <span>Detail</span><i class="fa fa-arrow-right ml-3"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Structure Test-->
                        <div class="col-xl-3 col-md-6 mb-4" style="text-decoration: none;" id="myDiv">
                            <div class="card  shadow  ">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" mb-0 mr-3  font-weight-bold text-gray-800">
                                                <span class="h3">Test 3</span>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 mt-2 ">
                                                        <span>Structure</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <a href="index.php" onclick="removeElement()"
                                            class="btn btn-primary mt-3 text-end " style="background: #0097ff;">
                                            <span>Detail</span><i class="fa fa-arrow-right ml-3"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Speaking Test-->
                        <div class="col-xl-3 col-md-6 mb-4" style="text-decoration: none;" id="myDiv">
                            <div class="card  shadow ">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" mb-0 mr-3  font-weight-bold text-gray-800">
                                                <span class="h3">Test 4</span>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 mt-2 ">
                                                        <span>Speaking</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <a href="index.php" onclick="removeElement()"
                                            class="btn btn-primary mt-3 text-end " style="background: #0097ff;">
                                            <span>Detail</span><i class="fa fa-arrow-right ml-3"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white pos">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Leap Surabaya 2023 </span>
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
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Select "Logout" below if you are ready to end your current session.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">
                            Cancel
                        </button>
                        <a class="btn btn-primary" href="login.php">Logout</a>
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
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

        <!-- Page assets chart -->
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>

        <!-- Page datatable -->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>


        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

        <!-- Page datatable -->
        <script src="js/datatables-simple-demo.js"></script>

        <script>
        function removeElement() {
            // Menghapus elemen div
            var myDiv = document.getElementById('myDiv');
            if (myDiv) {
                myDiv.remove();

                // Simpan status penghapusan di localStorage
                localStorage.setItem('elementRemoved', 'true');
            }
        }

        // Cek status penghapusan pada saat pembukaan halaman
        document.addEventListener('DOMContentLoaded', function() {
            var elementRemoved = localStorage.getItem('elementRemoved');

            if (elementRemoved === 'true') {
                // Jika elemen dihapus sebelumnya, hapus kembali
                var myDiv = document.getElementById('myDiv');
                if (myDiv) {
                    myDiv.remove();
                }

                // Bersihkan status penghapusan di localStorage
                localStorage.removeItem('elementRemoved');
            }
        });
        </script>
</body>

</html>