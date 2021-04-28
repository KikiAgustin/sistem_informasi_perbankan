<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Registrasi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('assets/login/'); ?>images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                    <span class="login100-form-title">
                        Halaman Registrasi
                    </span>

                    <?= form_error('nama_lengkap', '<p style="color: red;">', '</p>'); ?>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Nama Lengkap wajib diisi">
                        <input class="input100" type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= set_value('nama_lengkap'); ?>">
                        <span class="focus-input100"></span>
                    </div>

                    <?= form_error('email', '<p style="color: red;">', '</p>'); ?>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Email wajib diisi">
                        <input class="input100" type="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                        <span class="focus-input100"></span>
                    </div>

                    <?= form_error('password', '<p style="color: red;">', '</p>'); ?>
                    <div class="wrap-input100 validate-input" data-validate="Password wajib diisi">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>
                    <br>

                    <?= form_error('password1', '<p style="color: red;">', '</p>'); ?>
                    <div class="wrap-input100 validate-input" data-validate="Konfirmasi Password wajib diisi">
                        <input class="input100" type="password" name="password1" placeholder="Konfirmasi Password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="text-right p-t-13 p-b-23">
                        <!-- <span class="txt1">
                            Forgot
                        </span>

                        <a href="#" class="txt2">
                            Username / Password?
                        </a> -->
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="flex-col-c p-t-170 p-b-40">
                        <span class="txt1 p-b-9">
                            Sudah punya akun?
                        </span>

                        <a href="<?= base_url("Auth"); ?>" class="txt3">
                            Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="<?= base_url('assets/login/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/login/'); ?>vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/login/'); ?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url('assets/login/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/login/'); ?>vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/login/'); ?>vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url('assets/login/'); ?>vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/login/'); ?>vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/login/'); ?>js/main.js"></script>

</body>

</html>