<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <link rel="icon" type="image/png" href="<?= base_url() ?>/templates/img/leap.png">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/templates/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/templates/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/templates/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container mt-5">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center mb-5">
                                        <img src="<?= base_url(); ?>/templates/img/leap.png" alt="" width="80">
                                    </div>

                                    <?php
                                    // pesan validasi error
                                    $errors = session()->getFlashdata('errors');
                                    if (!empty($errors)) { ?>

                                        <div class="alert alert-danger" role="alert">
                                            <ul>
                                                <?php foreach ($errors as $error) : ?>

                                                    <li><?= esc($error); ?></li>

                                                <?php endforeach; ?>


                                            </ul>
                                        </div>
                                    <?php }; ?>
                                    <?php if (session()->getFlashdata('pesan')) {
                                        echo ' <div class="alert alert-danger" role="alert">';
                                        echo session()->getFlashdata('pesan');
                                        echo '</div>';
                                    }; ?>

                                    <!-- <div class="user"> -->

                                    <?php echo form_open('auth/cek_login'); ?>

                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control form-control-user" name="username" placeholder=" Username">
                                    </div>
                                    <div class="form-group mb-5">
                                        <input type="password" class="form-control form-control-user" name="password" id="pass" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" onclick="showpass()">
                                            <span class="form-check-label">Show Password</span>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block mt-2 mb-5">
                                        Login
                                    </button>
                                    <?php echo form_close(); ?>

                                    <hr>
                                    <!-- login student -->
                                    <div class="row justify-content-end">
                                        I'm Student<input type="checkbox" class="ml-3" id="teacherCheckbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Leap Surabaya <?= date('Y'); ?></span>
                </div>

            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/templates/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/templates/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/templates/js/sb-admin-2.min.js"></script>
    <script>
        document.getElementById('teacherCheckbox').addEventListener('change', function() {
            if (this.checked) {
                window.location.href = '<?= base_url('auth/login_student'); ?>';
            }
        });

        function showpass() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $($this).remove();
            });
        }, 3000);
    </script>
</body>

</html>