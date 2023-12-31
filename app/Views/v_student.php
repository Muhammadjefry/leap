<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard</title>
    <link rel="icon" type="image/png" href="<?= base_url() ?>/templates/img/leap.png">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/templates/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/templates/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/templates/css/sb-admin-2.min.css" rel="stylesheet">
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
        <ul class="navbar-nav sidebar sidebar-dark accordion d-flex flex-column" id="accordionSidebar" style="background-image: linear-gradient(    #0097ff,#0367ac  );box-shadow: 0 10px 20px #000;z-index:2">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center pt-4 pb-4" href="#" style="height: 7em">
                <img src="<?= base_url() ?>/templates/img/leap1.png" alt="" width="80%" />
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />


            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link">
                    <i class="fa fa-user"></i>
                    <span>Nama :</span>
                    <p class="text"> <?= session()->get('nama'); ?> </p>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Nav Item - gender -->
            <li class="nav-item active " style="margin-top:-20px;margin-bottom:-15px">
                <a class="nav-link ">
                    <i class="fa fa-venus-mars"></i>
                    <span>Jenis Kelamin :</span>
                    <p class="text"><?= session()->get('jenis_k'); ?></p>
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
                        <?= session()->get('email'); ?></p>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Nav Item - Add User-->
            <li class="nav-item active " style="margin-top:-20px;margin-bottom:-15px">
                <a class="nav-link ">
                    <i class="fa fa-building"></i>
                    <span>Perusahaan :</span>
                    <p class="text"><?= session()->get('perusahaan'); ?></p>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Nav Logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout_student') ?>">
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
                <nav class="navbar navbar-expand navbar-light bg-body topbar static-top nav" style="background-image: linear-gradient(to left, #0097ff,  #0367ac  );z-index: 1;box-shadow: -10px 0 20px #000;">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none bg-transparent rounded-circle mr-3">
                        <i class="fa fa-bars text-white"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item active">
                            <a class="nav-link">
                                <i class="fa fa-user mr-3"></i>
                                <span style="font-size: 0.8em;"><?= session()->get('nama'); ?></span>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item  no-arrow">
                            <a class="nav-link" href="<?= base_url('auth/logout_student') ?>">
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
                <div class="container-fluid" style="margin-bottom: 10em;">



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

                                        <!-- student/testing view -->
                                        <form action="<?= base_url('student/testing') ?>" method="post">
                                            <!-- Example button in your form -->
                                            <input type="hidden" name="btn_value" value="btn_reading">
                                            <button type="submit" class="btn btn-warning mt-3 text-end">
                                                <span>Detail</span><i class="fa fa-arrow-right ml-3"></i>
                                            </button>
                                        </form>

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
                                        <input type="hidden" name="btn_value" value="btn_listening">
                                        <button class="btn btn-warning mt-3 text-end " type="submit">
                                            <span>Detail</span><i class="fa fa-arrow-right ml-3"></i>
                                        </button>
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
                                        <input type="hidden" name="btn_value" value="btn_structure">
                                        <button class="btn btn-warning mt-3 text-end " type="submit">
                                            <span>Detail</span><i class="fa fa-arrow-right ml-3"></i>
                                        </button>
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
                                        <input type="hidden" name="btn_value" value="btn_speaking">
                                        <button class="btn btn-warning mt-3 text-end " type="submit">
                                            <span>Detail</span><i class="fa fa-arrow-right ml-3"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-12 col-md-12 ">


                            <div class="card shadow ">
                                <div class="row g-0">

                                    <div class="col-md-12">
                                        <div class="card-body">

                                            <h5 class="card-title">Syarat dan Ketentuan Mengikuti Ujian TOEFL </h5>

                                            <ol>
                                                <li>Pendaftaran</li>
                                                <ol>Pertama-tama, calon peserta TOEFL perlu melakukan pendaftaran melalui situs resmi penyelenggara ujian atau aplikasi web yang telah ditentukan. Informasi pribadi yang akurat dan lengkap diperlukan, termasuk data identitas dan alamat email yang valid.
                                                </ol>


                                                <li>Persyaratan Teknologi</li>
                                                <ol>Sebelum mengikuti ujian, pastikan perangkat keras dan perangkat lunak yang digunakan memenuhi persyaratan teknis. Ini termasuk komputer atau laptop yang dapat terhubung ke internet dengan kecepatan yang memadai, perangkat lunak browser terbaru, dan kamera web yang berfungsi baik untuk ujian Speaking..
                                                </ol>

                                                <li>Waktu Ujian</li>
                                                <ol>
                                                    Waktu ujian TOEFL Listening selama 30 menit memerlukan manajemen waktu efektif, termasuk persiapan awal, mendengarkan dua percakapan, dan menjawab pertanyaan dengan fokus untuk meningkatkan performa.
                                                </ol>

                                            </ol>

                                        </div>
                                    </div>
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


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/templates/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/templates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/templates/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/templates/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>/templates/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url(); ?>/templates/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url(); ?>/templates/js/demo/chart-pie-demo.js"></script>

    <!-- Page assets chart -->
    <script src="<?= base_url(); ?>/templates/assets/demo/chart-area-demo.js"></script>
    <script src="<?= base_url(); ?>/templates/assets/demo/chart-bar-demo.js"></script>

    <!-- Page datatable -->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>


    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>/templates/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/templates/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url(); ?>/templates/js/demo/datatables-demo.js"></script>

    <!-- Page datatable -->
    <script src="<?= base_url(); ?>/templates/js/datatables-simple-demo.js"></script>
</body>

</html>