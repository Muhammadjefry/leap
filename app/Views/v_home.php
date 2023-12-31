<?= $this->extend('layout/template/index'); ?>


<?= $this->section('content'); ?>


<div class="col-md-6 text-left text-white">
    <h3>Dasboard</h3>
    <h5><?= session()->get('username'); ?></h5>
</div>

</div>

<!-- Begin Page Content -->
<div class="container-fluid" style="margin-bottom: 25em;">

    <!-- Content Row -->
    <div class="row mb-5" style="margin-top:-80px">

        <!-- Total Participant male-->
        <div class="col-xl-6 col-md-12 mb-4" style="text-decoration: none;z-index: 2;">
            <div class="card  shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-rborder-left-dark text-uppercase mb-1">
                                Total Participant Male
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 mt-3 font-weight-bold text-gray-800">
                                        <span class="h1">
                                            <!-- Jumlah Pria -->
                                     <?php
                                        $targetLevel = 'Pria';
                                        $userLevels = array_column($student, 'jenis_k');

                                        $levelCounts = array_count_values($userLevels);
                                        echo $levelCounts[$targetLevel] ?? 0;
                                        ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <span style="font-size: 3em;"><i class="fas fa-male fa-2x text-gray-300"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Participant Female-->
        <div class="col-xl-6 col-md-12 mb-4" style="text-decoration: none;">
            <div class="card  shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray text-uppercase mb-1">
                                Total Participant Female</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 mt-3">
                                        <span class="h1">                                        <span class="h1">
                                            <!-- Jumlah Pria -->
                                     <?php
                                        $targetLevel = 'Wanita';
                                        $userLevels = array_column($student, 'jenis_k');

                                        $levelCounts = array_count_values($userLevels);
                                        echo $levelCounts[$targetLevel] ?? 0;
                                        ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto ">
                            <span style="font-size: 3em;"><i class="fas fa-female fa-2x text-gray-300"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Average Reading Score -->
        <div class="col-xl-3 col-md-6 mb-4 ">
            <div class="card border-left-primary shadow h-100 py-2 ">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Average Reading Score
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        50%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book-reader fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Average Listening Score -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Average Listening Score
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        50%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-headphones fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Average Structure Score -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Average Structure Score
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        50%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Average Speaking Score -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Average Speaking Score
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        50%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-microphone fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Row -->

</div>
<!-- End of Page Content -->


<!--End Page Wrapper-->

<?= $this->endSection(); ?>