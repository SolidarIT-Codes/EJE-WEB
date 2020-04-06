<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/vendor/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/vendor/fonts/circular-std/style.css" );?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/libs/css/style.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/vendor/fonts/fontawesome/css/fontawesome-all.css"); ?>">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><img class="logo-img" src="<?php echo base_url("assets/assets/images/ejelo.png" );?>" alt="logo" width="305px" height="305px"><span class="splash-description">Entrer vos informations utilisateur.</span></div>
            <div class="card-body">
                <form action="<?php echo site_url("Login/login"); ?>" method="post">
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="mail" name="email" placeholder="Email" autocomplete="off">
                        <span style="color: red"><?php echo form_error('email'); ?></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="password" name="password" placeholder="Password">
                        <span style="color: red"><?php echo form_error('password'); ?></span>
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Se souvenir de moi</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Connexion</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="<?php echo site_url("User/"); ?>" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url("assets/assets/vendor/jquery/jquery-3.3.1.min.js");?>"></script>
    <script src="<?php echo base_url("assets/assets/assets/vendor/bootstrap/js/bootstrap.bundle.js");?>"></script>
</body>
 
</html>