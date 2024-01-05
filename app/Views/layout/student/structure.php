<?= $this->extend('layout/student/template/index'); ?>


<?= $this->section('content'); ?>


<div class="col-md-12 text-left text-white d-flex justify-content-between">
    <h3>Reading Test</h3>
    <h3 id="timer_structure"></h3>
</div>

</div>


<!-- Begin Page Content -->
<div class="container-fluid" style="margin-bottom: 30em;">

    <!-- Content Row -->
    <div class="row mb-5 justify-content-center" style="margin-top:-80px">

        <!-- Reading Test-->
        <div class="col-xl-8 col-md-8 col-sm-8 mb-4" style="text-decoration: none;z-index: 2;" id="myDiv">
            <div class="card  shadow ">
                <div class="card-body">
                    <div class="col-12 p-3" style="font-size: 1.1em;">
                        <div class="str">
                            <img src="<?= base_url() ?>/templates/img/s1.png" alt="" class="img-fluid" width="100%" />
                        </div>

                        <div class="str">
                            <img src="<?= base_url() ?>/templates/img/s2.jpg" alt="" class="img-fluid" width="100%" />
                        </div>

                        <div class="str">
                            <img src="<?= base_url() ?>/templates/img/s3.jpg" alt="" class="img-fluid" width="100%" />
                        </div>

                        <div class="str">
                            <img src="<?= base_url() ?>/templates/img/s4.jpg" alt="" class="img-fluid" width="100%" />
                        </div>

                        <div class="str">
                            <img src="<?= base_url() ?>/templates/img/s5.jpg" alt="" class="img-fluid" width="100%" />
                        </div>

                        <div class="str">
                            <img src="<?= base_url() ?>/templates/img/s6.jpg" alt="" class="img-fluid" width="100%" />
                        </div>

                    </div>

                    <div class="col-12 d-flex justify-content-end">
                        <nav aria-label="Page navigation example ">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#" id="prev_S">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#" id="next_S">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>