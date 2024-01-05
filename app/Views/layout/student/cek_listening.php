<?= $this->extend('layout/student/template/index'); ?>


<?= $this->section('content'); ?>


<div class="col-md-12 text-left text-white d-flex justify-content-between">
    <h3>Reading Test</h3>
    <!-- <h3 id="timer"></h3> -->
</div>

</div>


<!-- Begin Page Content -->
<div class="container-fluid" style="margin-bottom: 30em;">

    <!-- Content Row -->
    <div class="row mb-5 justify-content-center" style="margin-top:-80px">

        <!-- Reading Test-->
        <div class="col-xl-6 col-md-6 col-sm-8 mb-4" style="text-decoration: none;z-index: 2;" id="myDiv">
            <div class="card  shadow ">
                <div class="card-body">
                    <div class="col-12 p-3" style="font-size: 1.1em;">
                        <h3>Periksa audio Anda !!!</h1>
                            <p style="text-indent: 40px;">Sebelum melanjutkan test listening, diharapkan untuk mencoba audio yang ada di bawah ini.
                                Jika audio itu terdengar, mohon konfirmasinya untuk mencentang kotak (Tanda Ya) yang ada di bawah, dan jika tidak , coba refresh halaman ini agar audio kembali normal </p>
                            <div class="d-flex justify-content-center mt-4 mb-4">
                                <audio controls>
                                    <source src="<?= base_url() ?>/templates/img/testaudio.mp3" type="audio/mpeg">
                                </audio>
                            </div>
                            <input type="checkbox" id="ya"> Ya


                    </div>

                </div>
            </div>
        </div>


    </div>
</div>

</div>
<!-- End of Main Content -->



<?= $this->endSection(); ?>