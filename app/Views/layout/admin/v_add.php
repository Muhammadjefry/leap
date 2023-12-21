<?= $this->extend('layout/template/index'); ?>


<?= $this->section('content'); ?>

<div class="col-md-6 text-left text-white">
    <h3>Total Participant</h3>
    <h5>Male</h5>
</div>

</div>

<!-- Begin Page Content -->
<div class="container-fluid" style="margin-bottom: 10em;">

    <!-- Content Row -->
    <div class="row mb-5" style="margin-top:-80px">

        <!-- Total User -->
        <div class="col-xl-6 col-md-12 mb-2">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-rborder-left-warning text-uppercase mb-1">
                                Total User
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <!-- Jumlah User -->
                                        <?php
                                        $targetLevel = '2';
                                        $userLevels = array_column($user, 'level');
                                        $levelCounts = array_count_values($userLevels);

                                        echo $levelCounts[$targetLevel] ?? 0;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Admin-->
        <div class="col-xl-6 col-md-12 mb-2">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Total Admin</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <!-- Jumlah Admin -->
                                        <?php
                                        $targetLevel = '1';
                                        $userLevels = array_column($user, 'level');
                                        $levelCounts = array_count_values($userLevels);

                                        echo $levelCounts[$targetLevel] ?? 0;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Add User -->
    <div class="col-md-12 justify-content-end mb-2 text-right mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-user-plus mr-2"></i>Add user
        </button>
    </div>



    <!-- Modal Add-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="btn tutup" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <!-- Error -->
                    <div class="alert alert-danger eror" role="alert" style="display: none;"></div>
                    <!-- Succes -->
                    <div class="alert alert-primary sukses" role="alert" style="display: none;"></div>

                    <!-- id -->
                    <input type="hidden" id="id">
                    <div class="mb-3 row">
                        <!-- input Username -->
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <!-- input Username -->
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">

                            <input type="text" class="form-control" id="password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary tutup" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="Tsimpan">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Participant Test Scores</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Option</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($user as $k => $v) {
                            $nomor += 1; ?>


                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $v['username']; ?></td>
                                <td><?php echo $v['password']; ?></td>
                                <th>
                                    <a href="#" class="btn btn-sm btn-primary text-white " data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="edit(<?php echo $v['id'] ?>)"> <i class="fa fa-user-edit mr-2"></i>Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger text-white" onclick="hapus(<?php echo $v['id'] ?>)"> <i class="fa fa-trash mr-2"></i>Delete</a>
                                </th>

                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<!--End Page Wrapper-->



<?= $this->endSection(); ?>