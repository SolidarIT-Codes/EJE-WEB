<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/vendor/bootstrap/css/bootstrap.min.css");?>">
    <link href="<?php echo base_url("assets/assets/vendor/fonts/circular-std/style.css");?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/libs/css/style.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/vendor/fonts/fontawesome/css/fontawesome-all.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/vendor/charts/chartist-bundle/chartist.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/vendor/charts/morris-bundle/morris.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/vendor/charts/c3charts/c3.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/vendor/fonts/flag-icon-css/flag-icon.min.css");?>">
    <title>EJE | Administration</title>
    
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="<?php echo base_url();?>">EJE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php  echo $this->session->userdata('statut'); ?></h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <?php
                            if($this->session->userdata('statut') == 1)
                              {
                              ?>
                             <li class="nav-divider">
                                BANQUE DE SANG
                            </li>
                            <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo site_url("campagne/"); ?>" tabindex="-1" aria-disabled="false"><i class="fas fa-fw fa-map-marker-alt"></i>Lancer une Campagne</a>
                            </li>
                            <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo site_url("campagne/campagne_a_venir"); ?>" tabindex="-1" aria-disabled="false"><i class="fas fa-fw fa-map-marker-alt"></i>Campagne à venir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("blood/bloodlist"); ?>" tabindex="-1" aria-disabled="false"><i class="m-r-10 mdi mdi-water"></i>Sang Disponible</a>
                            </li>
                            <li class="nav-item">
                                
                            </li>
                            <li class="nav-item ">
                                
                            </li>
                            <li class="nav-item">
                                
                            </li>
                          <?php } elseif ($this->session->userdata('role') == 0) {
                            ?>
                              <li class="nav-divider">
                                ADMINISTRATION
                            </li>
                            <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo site_url("admin/"); ?>" tabindex="-1" aria-disabled="false"><i class="fas fa-hands-helping"></i>Nos Partenaires </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("admin/translist"); ?>" tabindex="-1" aria-disabled="false"><i class="fas fa-truck"></i> Nos Transporteurs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("admin/doclist"); ?>" tabindex="-1" aria-disabled="false"><i class="fas fa-stethoscope"></i> Nos Médecins</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("admin/donneurlist"); ?>" tabindex="-1" aria-disabled="false"><i class="m-r-10 mdi mdi-water"></i> Nos Donneurs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("admin/userlist"); ?>" tabindex="-1" aria-disabled="false"><i class="fas fa-user"></i> Nos Utilisateurs</a>
                            </li>
                            <?php
                          }

                          else {?>
                            <li class="nav-divider">
                                HÖPITAL

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("recherche/"); ?>" tabindex="-1" aria-disabled="false"><i class="fas fa-search"></i>Rechercher</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("recherche/en_cours"); ?>" tabindex="-1" aria-disabled="false"><i class="fas fa-bus"></i>Courses en Cours</a>
                            </li>
                            <li class="nav-item">
                                
                            </li>
                          <?php }?>
                          <hr>
                            <li class="nav-item">
                                 <a class="nav-link" href="<?php echo site_url("user/deconnexion"); ?>" tabindex="-1" aria-disabled="false"><i class="fas fa-power-off"></i>Deconnexion</a>
                            </li>
                            <li class="nav-item">
                               
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
