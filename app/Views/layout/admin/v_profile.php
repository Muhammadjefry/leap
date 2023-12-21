<?= $this->extend('layout/template/index'); ?>


<?= $this->section('content'); ?>

<div class="col-md-6 text-left text-white">
    <h3>Profile</h3>
    <h5><?= session()->get('username'); ?></h5>
</div>

</div>

<!-- Begin Page Content -->
<div class="container-fluid " style="margin-bottom: 30em;">

    <!-- Content Row -->
    <div class="row mb-5" style="margin-top:-80px;">

        <!-- Profile User -->

        <div class="card mb-3 p-3 col-lx-8  col-md-12 " style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url() ?>/templates/img/undraw_profile.svg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body p-5">
                        <h5 class="card-title">Username : <?= session()->get('username'); ?></h5>
                        <h5 class="card-title">Kata Sandi : <?= session()->get('password'); ?></h5>
                    </div>
                </div>
            </div>
        </div>



    </div>

</div>
<!-- End of Main Content -->


<!--End Page Wrapper-->

<?= $this->endSection(); ?>