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


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

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
                        <h3>Intruksi</h3>
                        <h5>Koneksi internet</h5>
                    </div>

                </div>


                <!-- Begin Page Content -->
                <div class="container-fluid" style="margin-bottom: 30em;">

                    <!-- Content Row -->
                    <div class="row mb-5 justify-content-center" style="margin-top:-80px">

                        <!-- Reading Test-->
                        <div class="col-xl-4 col-md-6 mb-4" style="text-decoration: none;z-index: 2;" id="myDiv">
                            <div class="card  shadow ">
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <h4>Uji kecepatan internet anda sebelum melanjutkan test </h4>
                                            <p>Untuk mengetahui kecepatan internet anda, silahkan klik link di bawah ini</p>
                                            <a href="https://www.speedtest.net/id" target="_blank">https://www.speedtest.net/id</a>
                                            <input type="email" class="form-control mt-4" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
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