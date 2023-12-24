<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbel Rangking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        body{
            font-family: 'Poppins', sans-serif;
            background: #ececec;
        }
        .box-area{
            width: 1200px;
        }
        ::placeholder{
            font-size:16px ;
        }
        .right-box{
            padding: 40px 30px 40px 40px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
                <div class="bg-image mb-3">
                    <img src="assets/compiled/svg/kartun.png" class="image-fluid" style="width: 380px;" alt="">
                </div>
                <p class="text-white fs-2" style="font-weight: 600;"><i class="fa-solid fa-circle-nodes" style="color: #ffffff;"></i> Bimbingan Belajar Rangking</p>
                <small class="text-white text-wrap text-center mb-3" style="width: 17rem;">Ikut bergabung dengan program kami di sini</small>
            </div>

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <p class="fs-4" style="font-weight: 600;">Selamat Datang 😀</p>
                        <p>Silahkan Daftar terlebih dahulu !</p>
                    </div>
                    <form action="<?= url_to('register') ?>" method="post">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label for="email"><?=lang('Auth.email')?></label>
                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                           name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                    <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                </div>

                <div class="form-group">
                    <label for="username"><?=lang('Auth.username')?></label>
                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                </div>

                <div class="form-group">
                    <label for="password"><?=lang('Auth.password')?></label>
                    <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                    <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                </div>

                <br>

                <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button>
            </form>
            <hr>
            <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>"><?=lang('Auth.signIn')?></a></p>


                    <div class="copyright text-center" style="margin-top: 50px;">
                        <small>&copy; 2023 Bimbingan Belajar Rangking. Hak cipta dilindungi.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
