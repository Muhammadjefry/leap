<?= $this->extend('layout/template/index'); ?>


<?= $this->section('content'); ?>

<div class="col-md-6 text-left text-white">
    <h3>Participant</h3>
    <h2><!-- Jumlah User -->
        <?php

        // Menghitung jumlah keseluruhan mahasiswa
        $totalStudents = count($student);

        // Menampilkan jumlah keseluruhan mahasiswa
        echo $totalStudents;


        ?></h2>
</div>

</div>

<!-- Begin Page Content -->
<div class="container-fluid" style="margin-bottom: 20em;">

    <!-- Content Row -->
    <div class="card shadow mb-5" style="margin-top:-80px">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Participant Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Perusahaan</th>
                            <th>Option</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($student as $st) {
                        ?>


                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $st['nama']; ?></td>
                                <td><?php echo $st['jenis_k']; ?></td>
                                <td><?php echo $st['email']; ?></td>
                                <td><?php echo $st['perusahaan']; ?></td>
                                <th>
                                    <a href="<?= site_url('menu/detail/' . $st['id']) ?>" class="btn btn-sm btn-primary text-white"> <i class="fa fa-info-circle mr-2"></i>Detail</a>
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