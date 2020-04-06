<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="fr">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EJE | Administration</title>
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
    .majuscule {
text-transform: uppercase;
}
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" action="<?php echo site_url("user/saveuser"); ?>" method="post" >
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Enregistrement</h3>
                <p>Entrer vos informations de façon suçinte.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                                    
                <select  name="statut"  class="form-control">
                    <option>--Selectionner votre Statut--</option>
                    <option value="2" >Centre de Santé</option>
              
                    <option value="1">Banque de Sang</option>
                    
                </select>
                <span style="color: red"><?php echo form_error('statut'); ?></span>
                </div>
                <div class="form-group">
                <input type="text" name="nom"  class="form-control form-control-lg majuscule" placeholder="Nom de Société" autocomplete="off">
                <span style="color: red"><?php echo form_error('nom'); ?></span>
            </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                    <span style="color: red"><?php echo form_error('email'); ?></span>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="mp" type="password" required="" placeholder="Mot de Passe">
                    <span style="color: red"><?php echo form_error('mp'); ?></span>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" type="password" name="mpc" placeholder="Confirmé">
                    <span style="color: red"><?php echo form_error('mpc'); ?></span>
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Enregistrer mon Compte</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">En créent votre compte, vous acceptez nos <a href="#">termes et conditions</a></span>
                    </label>
                </div>
                
            </div>
            <div class="card-footer bg-white">
                <p>Déja membres? <a href="<?php echo site_url("Login"); ?>" class="text-secondary">Se connecter.</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>