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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-body topbar static-top nav" style="background-image: linear-gradient(to left, #0097ff,  #0367ac  );z-index: 1;box-shadow: -10px 0 20px #000;">
                    <!-- Sidebar Toggle (Topbar) -->

                    <a class="nav-link" href="#">
                        <span style="font-size: 0.8em;"> <img src="<?= base_url() ?>/templates/img/leap1.png" alt="" class="img-fluid" width="100" /></span>
                    </a>


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




                    <!-- Begin Page Content -->
                    <?= $this->renderSection('content'); ?>
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


            <!-- Di bagian head, tambahkan script SweetAlert -->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="<?= base_url(); ?>/templates/vendor/jquery-easing/jquery.easing.min.js"></script>
            <script src="<?= base_url(); ?>/templates/js/sb-admin-2.min.js"></script>

            <!-- <script src="<?= base_url(); ?>/templates/js/demo/datatables-demo.js"></script> -->
            <!-- <script src="<?= base_url(); ?>/templates/js/listening.js"></script> -->
            <script src="<?= base_url(); ?>/templates/js/test.js"></script>
            <!-- Bootstrap core JavaScript-->
            <!-- <script src="<?= base_url(); ?>/templates/vendor/jquery/jquery.min.js"></script> -->
            <!-- <script src="<?= base_url(); ?>/templates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

            <!-- Core plugin JavaScript-->


            <!-- Custom scripts for all pages-->

            <!-- Page level plugins -->
            <!-- <script src="<?= base_url(); ?>/templates/vendor/chart.js/Chart.min.js"></script> -->

            <!-- Page level custom scripts -->
            <!-- <script src="<?= base_url(); ?>/templates/js/demo/chart-area-demo.js"></script> -->
            <!-- <script src="<?= base_url(); ?>/templates/js/demo/chart-pie-demo.js"></script> -->

            <!-- Page assets chart -->
            <!-- <script src="<?= base_url(); ?>/templates/assets/demo/chart-area-demo.js"></script> -->
            <!-- <script src="<?= base_url(); ?>/templates/assets/demo/chart-bar-demo.js"></script> -->


            <!-- Page level plugins -->
            <!-- <script src="<?= base_url(); ?>/templates/vendor/datatables/jquery.dataTables.min.js"></script> -->
            <!-- <script src="<?= base_url(); ?>/templates/vendor/datatables/dataTables.bootstrap4.min.js"></script> -->

            <!-- Page level custom scripts -->
            <!-- <script src="<?= base_url(); ?>/templates/js/demo/datatables-demo.js"></script> -->
            <script src="<?= base_url('path/to/main.js') ?>"></script>

            <script>
                <?php if (isset($downloadSpeed) && isset($uploadSpeed)) : ?>
                    // Tampilkan nilai unduh dan unggah jika ada
                    Swal.fire({
                        icon: 'warning',
                        title: 'Perhatian',
                        text: 'Mohon untuk berpindah tempat terlebih dahulu untuk memastikan jaringan Anda lebih dari 10.0',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    });
                <?php endif; ?>

                function cek_listening() {
                    document.getElementById('ya').addEventListener('change', function() {
                        if (this.checked) {
                            window.location.href = 'listening';
                        }
                    });

                }


                function reading() {

                    var sec = 1800;
                    var countDiv = document.getElementById("timer1");
                    var secpass;
                    countDown = setInterval(function() {
                        'use strict';

                        secpass();
                    }, 1000);

                    function done() {
                        window.location.href = base_url('student / index');
                    }

                    function secpass() {
                        'use strict';

                        var min = Math.floor(sec / 60),
                            remSec = sec % 60;

                        if (remSec < 10) {
                            remSec = '0' + remSec;
                        }
                        if (min < 10) {
                            min = '0' + min;
                        }
                        countDiv.innerHTML = min + ":" + remSec;
                        if (sec > 0) {

                            sec = sec - 1;

                        } else {

                            clearInterval(countDown);

                            done();

                        }
                    }

                    const prev = document.querySelector("#prev");
                    const next = document.querySelector("#next");
                    var exam = 0;
                    var artikel = 0;

                    function quetion() {
                        $(".exam").hide();
                        $(".exam:eq(" + exam + ")").show();
                    }

                    quetion();

                    function blog() {
                        $(".artikel").hide();
                        $(".artikel:eq(" + artikel + ")").show();
                    }

                    blog();



                    next.addEventListener("click", function() {
                        if (exam == $(".exam").length - 1) {
                            exam = end;

                        } else if (exam == 0) {
                            artikel++;
                            exam++;
                        } else if (exam == 1) {
                            artikel++;
                            exam++;
                        } else if (exam == 8) {
                            artikel++;
                            exam++;
                        } else if (exam == 18) {
                            artikel++;
                            exam++;
                        } else {
                            exam++;
                        }
                        quetion();
                        blog();

                    });

                    prev.addEventListener("click", function() {
                        if (exam == 0) {
                            exam = end;
                        } else if (exam == 1) {
                            artikel--;
                            exam--;
                        } else if (exam == 2) {
                            artikel--;
                            exam--;
                        } else if (exam == 9) {
                            artikel--;
                            exam--;
                        } else if (exam == 19) {
                            artikel--;
                            exam--;
                        } else {
                            exam--;
                        }
                        quetion();
                        blog();

                    });
                }

                function structure() {

                    var sec = 900;
                    var countDiv = document.getElementById("timer_structure");
                    var secpass;
                    countDown = setInterval(function() {
                        'use strict';

                        secpass();
                    }, 1000);

                    function done() {
                        window.location.href = base_url('student / index');
                    }

                    function secpass() {
                        'use strict';

                        var min = Math.floor(sec / 60),
                            remSec = sec % 60;

                        if (remSec < 10) {
                            remSec = '0' + remSec;
                        }
                        if (min < 10) {
                            min = '0' + min;
                        }
                        countDiv.innerHTML = min + ":" + remSec;
                        if (sec > 0) {

                            sec = sec - 1;

                        } else {
                            clearInterval(countDown);
                            done();

                        }
                    }

                    const prev = document.querySelector("#prev_S");
                    const next = document.querySelector("#next_S");
                    var str = 0;

                    function quetion() {
                        $(".str").hide();
                        $(".str:eq(" + str + ")").show();
                    }
                    quetion();

                    next.addEventListener("click", function() {
                        if (str == $(".str").length - 1) {
                            str = end;
                        } else {
                            str++;
                        }
                        quetion();
                    });

                    prev.addEventListener("click", function() {
                        if (str == 0) {
                            str = end;
                        } else {
                            str--;
                        }
                        quetion();

                    });
                }


                if (window.location.pathname.includes('/student/reading')) {
                    // Panggil fungsi showSweetAlert jika di halaman /student/listening

                    reading();


                } else if (window.location.pathname.includes('/student/cek_listening')) {

                    cek_listening();
                } else if (window.location.pathname.includes('/student/structure')) {

                    structure();
                }
            </script>

</body>

</html>