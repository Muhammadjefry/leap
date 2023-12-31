<?= $this->extend('layout/template/index'); ?>


<?= $this->section('content'); ?>

<div class="col-md-12 text-left text-white d-flex justify-content-between">
    <h3>Participant Score</h3>
    <a href="<?= base_url('menu/participant') ?>" class="btn btn btn-warning text-dark"> <i class="fas fa-undo mr-2"></i>Back</a>
</div>

</div>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row mb-5" style="margin-top:-80px">

        <!-- Participant data -->
        <div class="col-xl-6 col-md-12  table-sm">
            <div class="card shadow ">
                <div class="card-header">

                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>: <?php echo $student['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>: <?php echo $student['jenis_k']; ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>: <?php echo $student['email']; ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-12 table-sm">
            <div class="card shadow ">
                <div class="card-header">

                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>Perusahaan</td>
                                <td>: <?php echo $student['perusahaan']; ?></td>
                            </tr>
                            <tr>
                                <td>Total Score</td>
                                <td>: 457</td>
                            </tr>

                        </tbody>
                    </table>

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
                            <th>Test</th>
                            <th>Score</th>
                            <th>Option</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Reading</td>
                            <td>89</td>
                            <th>
                                <a href="#" class="btn btn-sm btn-primary text-white"> <i class="fa fa-info-circle mr-2"></i>Info</a>
                            </th>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Listening</td>
                            <td>50</td>
                            <th>
                                <a href="#" class="btn btn-sm btn-primary text-white"> <i class="fa fa-info-circle mr-2"></i>Info</a>
                            </th>
                        </tr>
                        <tr>
                            <td>3</td>

                            <td>Structure</td>
                            <td>45</td>
                            <th>
                                <a href="#" class="btn btn-sm btn-primary text-white"> <i class="fa fa-info-circle mr-2"></i>Info</a>
                            </th>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Speaking</td>
                            <td>59</td>
                            <th>
                                <a href="#" class="btn btn-sm btn-primary text-white"> <i class="fa fa-info-circle mr-2"></i>Info</a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- End of Main Content -->


<!--End Page Wrapper-->

<?= $this->endSection(); ?>