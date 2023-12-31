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
    <link href="<?= base_url() ?>/templates/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <!-- Custo data tables -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>/templates/css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>/templates/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url() ?>/templates/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion " id="accordionSidebar" style="background-image: linear-gradient(#0097ff,#0367ac);box-shadow: 0 10px 20px #000;z-index:2">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center pt-4 pb-4" href="<?= base_url('home/index') ?>" style="height: 7em">
                <img src="<?= base_url() ?>/templates/img/leap1.png" alt="" width="80%" />
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active ">
                <a class="nav-link" href="<?= base_url('home/index') ?>">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">Menu</div>

            <!-- Sidebar - Participant -->
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('menu/participant') ?>">
                    <i class="fa fa-users"></i>
                    <span>Participant</span></a>
            </li>

            <?php if (session()->get('level') == 1) { ?>

                <!-- Sidebar - Add User-->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('menu/add_user') ?>  ">
                        <i class="fa fa-user-plus"></i>
                        <span>Add User</span></a>
                </li>

            <?php }; ?>


            <hr class="sidebar-divider d-none d-md-block" />


            <!-- Nav Profile -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('menu/profile') ?>">
                    <i class="fa fa-user"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Nav Logout -->
            <li class="nav-item">

                <a class="nav-link" href="<?= base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>


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

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white-600 small"><?= session()->get('username'); ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url() ?>/templates/img/undraw_profile.svg" />
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('menu/profile') ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Heading -->
                <div class="col-md-12 text-center mb-5 text-dark p-5 " style="background-image: linear-gradient(to right, #0097ff , #0367ac );">




                    <?= $this->renderSection('content'); ?>



                    <!-- Footer -->
                    <footer class="sticky-footer bg-white pos">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Leap Surabaya <?= date('Y'); ?></span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->
                </div>
                <!-- End of Main Content  -->
            </div>
            <!-- End of Content Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>


        </div>


        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url() ?>/templates/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>/templates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url() ?>/templates/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url() ?>/templates/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?= base_url() ?>/templates/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?= base_url() ?>/templates/js/demo/chart-area-demo.js"></script>
        <script src="<?= base_url() ?>/templates/js/demo/chart-pie-demo.js"></script>

        <!-- Page assets chart -->
        <script src="<?= base_url() ?>/templates/assets/demo/chart-area-demo.js"></script>
        <script src="<?= base_url() ?>/templates/assets/demo/chart-bar-demo.js"></script>

        <!-- Page datatable -->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?= base_url() ?>/templates/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>/templates/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?= base_url() ?>/templates/js/demo/datatables-demo.js"></script>

        <!-- Page datatable -->
        <script src="<?= base_url() ?>/templates/js/datatables-simple-demo.js"></script>


        <script>
            //Hapus
            function hapus($id) {
                var result = confirm("Are you sure you want to delete this account")
                if (result) {
                    window.location = "<?php echo site_url("menu/hapus") ?>/" + $id;
                }
            }

            // Edit
            function edit($id) {
                $.ajax({
                    url: "<?php echo site_url("menu/edit") ?>/" + $id,
                    type: "get",
                    success: function(hasil) {
                        var $obj = $.parseJSON(hasil);
                        if ($obj.id != '') {
                            $("#id").val($obj.id);
                            $("#username").val($obj.username);
                            $("#password").val($obj.password);
                        }
                    }
                })
            }

            //tutup
            function bersihkan() {
                $('id').val('');
                $('username').val('');
                $('password').val('');
            }


            $('.tutup').on('click', function() {
                if ($('.sukses')) {
                    // .is(":visible")
                    window.location.href = "<?php echo current_url() . "?" . $_SERVER['QUERY_STRING'] ?>";
                }
                $('.alert').hide();
                bersihkan();
            })

            // add
            $('#Tsimpan').on('click', function() {

                var $id = $('#id').val();
                var $username = $('#username').val();
                var $password = $('#password').val();


                $.ajax({
                    url: "<?php echo site_url("menu/add_save") ?>",
                    type: "POST",
                    data: {
                        id: $id,
                        username: $username,
                        password: $password
                    },
                    success: function(hasil) {
                        var $obj = $.parseJSON(hasil);
                        if ($obj.sukses == false) {
                            $('.sukses').hide();
                            $('.eror').show();
                            $('.eror').html($obj.eror);
                        } else {
                            $('.eror').hide();
                            $('.sukses').show();
                            $('.sukses').html($obj.sukses);
                        }
                    }
                });
                bersihkan();

            })
        </script>


</body>

</html>