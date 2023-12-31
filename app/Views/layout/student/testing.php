<?= $this->extend('layout/student/template/index'); ?>


<?= $this->section('content'); ?>

<div class="col-md-6 text-left text-white">
    <h3>Intruksi</h3>
    <h5>Koneksi internet</h5>
</div>

</div>


<!-- Begin Page Content -->
<div class="container-fluid" style="margin-bottom: 30em;">

    <!-- Content Row -->
    <div class="row mb-5 justify-content-center" style="margin-top:-80px">

        <!-- Reading Test-->
        <div class="col-xl-8 col-md-6 mb-4" style="text-decoration: none;z-index: 2;" id="myDiv">
            <div class="card  shadow ">
                <div class="card-body">
                    <div class="col-12">
                        <div>
                            <h3>Periksa Koneksi Internet Anda !!!</h1>
                                <p>Sebelum melanjutkan test ini, diharapkan untuk memeriksa kecepatan jaringan internet anda. Dengan mengikuti beberapa langkah - langkah dibawah ini : </p>

                                <ol>
                                    <li>Klik Link di bawah ini, <br>
                                        <a href="https://www.speedtest.net/id" target="_blank">https://www.speedtest.net/id</a>
                                    </li>
                                    <li>Kemudian untuk memulainya tekan tombol Mulai/Go, tunggu sampai muncul nilai UNDUH mbps & UNGGAH mbps </li>
                                    <li>Copy nilai UNDUH mbps & UNGGAH mbps dan letakan sesuai arahan di bawah, dan pastikan nilainya lebih dari 10.0, jika kurang dari 10.0 untuk berpindah tempat terlebih dahulu dan periksa kembali jaringan internet anda.</li>
                                </ol>
                        </div>

                        <!-- File: app/Views/form.php -->

                        <!-- File: app/Views/form.php -->
                        <form action="<?= site_url('student/handleForm') ?>" method="post">
                            <div class="col-md-12 d-flex mb-4">
                                <div class="col-6">
                                    <h6>Nilai UNDUH mbps</h6>
                                    <input type="text" class="form-control mt-4" name="download_speed" aria-describedby="emailHelp" required>
                                </div>
                                <div class="col-6">
                                    <h6>Nilai UNGGAH mbps</h6>
                                    <input type="text" class="form-control mt-4" name="upload_speed" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            <input type="hidden" name="btn_value" value="<?= $btnValue ?>">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary ml-3">Submit</button>
                            </div>
                        </form>






                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>