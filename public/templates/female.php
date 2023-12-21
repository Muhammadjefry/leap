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
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion " id="accordionSidebar" style="background-image: linear-gradient(    #0097ff,#0367ac  
);box-shadow: 0 10px 20px #000;z-index:2">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center pt-4 pb-4" href="index.php"
                style="height: 7em">
                <img src="img/leap1.png" alt="" width="80%" />
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">Menu</div>

            <!-- Nav Item - Gender -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-venus-mars"></i>
                    <span>Gender</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded ">
                        <h6 class="collapse-header ">Gender :</h6>
                        <a class="collapse-item" href="male.php">Male</a>
                        <a class="collapse-item" href="female.php">Female</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Add User-->
            <li class="nav-item">
                <a class="nav-link" href="addUser.php">
                    <i class="fa fa-user-plus"></i>
                    <span>Add User</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block" />


            <!-- Nav Profile -->
            <li class="nav-item">
                <a class="nav-link" href="profile.php">
                    <i class="fa fa-user"></i>
                    <span>Profile</span></a>
            </li>


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

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Heading -->
                <div class="col-md-12 text-center mb-5 text-dark p-5" style="background-image: linear-gradient(to right,    #0097ff  
 ,    #0367ac  
);">

                    <div class="col-md-6 text-left text-white">
                        <h3>Total Participant</h3>
                        <h5>Female</h5>
                    </div>

                </div>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="card shadow mb-5" style="margin-top:-80px">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Reading</th>
                                            <th>Listening</th>
                                            <th>Structure</th>
                                            <th>Speaking</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>Tiger Nixon</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>Garrett Winters</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <td>Ashton Cox</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>4</th>
                                            <td>Cedric Kelly</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>5</th>
                                            <td>Airi Satou</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>6</th>
                                            <td>Brielle Williamson</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>7</th>
                                            <td>Herrod Chandler</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>8</th>
                                            <td>Rhona Davidson</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>9</th>
                                            <td>Colleen Hurst</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>10</th>
                                            <td>Sonya Frost</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>11</th>
                                            <td>Jena Gaines</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>12</th>
                                            <td>Quinn Flynn</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>13</th>
                                            <td>Charde Marshall</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>14</th>
                                            <td>Haley Kennedy</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>15</th>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>16</th>
                                            <td>Michael Silva</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>17</th>
                                            <td>Paul Byrd</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>18</th>
                                            <td>Gloria Little</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>19</th>
                                            <td>Bradley Greer</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>20</th>
                                            <td>Dai Rios</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>21</th>
                                            <td>Jenette Caldwell</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>22</th>
                                            <td>Yuri Berry</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>23</th>
                                            <td>Caesar Vance</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>24</th>
                                            <td>Doris Wilder</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>25</th>
                                            <td>Angelica Ramos</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>26</th>
                                            <td>Gavin Joyce</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>27</th>
                                            <td>Jennifer Chang</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>28</th>
                                            <td>Brenden Wagner</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>29</th>
                                            <td>Fiona Green</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>61</td>
                                            <th>
                                                <a href="#" class="btn btn-sm btn-primary text-white">Detail</a>
                                            </th>

                                        </tr>
                                    </tbody>
                                </table>
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
</body>

</html>