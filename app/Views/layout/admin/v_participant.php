<?= $this->extend('layout/template/index'); ?>


<?= $this->section('content'); ?>

<div class="col-md-6 text-left text-white">
    <h3>Total Participant</h3>
    <h5>81</h5>
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
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Perusahaan</th>
                            <th>Option</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($student as $s) :
                            $nomor += 1; ?>


                            <tr>
                                <?php var_dump($s); ?>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $s['nama'] ?></td>


                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->


<!--End Page Wrapper-->

<?= $this->endSection(); ?>