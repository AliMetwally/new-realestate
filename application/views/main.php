<?php
defined('BASEPATH') OR exit('');
$pageTitle = "";
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title><?= $pageTitle ? $pageTitle:$this->uri->segment(1) ?></title>
        <!--Favicon-->
        <link rel="shortcut icon"  href=""> <!--add the .ico file-->

        <!--Load Files-->
        
        <?php if($_SERVER['HTTP_HOST'] == "localhost" || 
        stristr($_SERVER['HTTP_HOST'], "192.168.") !== FALSE ||
        stristr($_SERVER['HTTP_HOST'], "127.0.0.") !== FALSE
        ): ?>

        <link rel="stylesheet" href="<?= base_url()?>public/bootstrap/css/bootstrap.min.css">        
        <link rel="stylesheet" href="<?= base_url()?>public/bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" href="<?= base_url()?>public/bootstrap/rtl/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="<?= base_url()?>public/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url()?>public/font-awesome/css/font-awesome-animation.css">

        <script src="<?= base_url()?>public/js/jquery.min.js"></script>
        <script src="<?= base_url()?>public/bootstrap/js/bootstrap.min.js"></script>

        <?php else: ?>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <?php endif; ?>
        
        <!--Custom css-->
        <link rel="stylesheet" href="<?= base_url()?>public/css/main.css">

        <!--Custome js-->
        <script src="<?= base_url()?>public/js/main.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default hidden-print">
            
            <div class="container-fluid">
                <!--Brand and Toggle Grouped for Mobile Display-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="<?=base_url()?>" style="margin-top:-15px">
                        <h2>Emad</h2>
                        <!--<img src="<?=base_url()?>public/images/logo_black.png" alt="logo" class="img-responsive" width="73px">-->
                    </a>
            </div> 

            <!--nav contents to collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav navbar-left visible-xs">
                    <li class="<?= $pageTitle == 'Dashboard' ? 'active' : '' ?>">
                            <a href="<?= site_url('dashboard') ?>">
                                <i class="fa fa-home"></i>
                                Dashboard
                            </a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-left">
                    <!-- 
                    <li class="dropdown">
                            <a>
                                اجمالي النقاط: <b><span id="totalEarnedToday"></span></b>
                            </a>
                    </li>
                    -->
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user navbarIcons"></i>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li class="dropdown-menu-header text-center">
                                    <strong>الحساب</strong>
                                </li>
                                <li class="divider"></li>
                                
                                <li><a href="<?= site_url('logout') ?>">تسجيل الخروج <i class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </li>
                </ul>
            </div>
            </div>
        </nav>


        <div class="container-fluid hidden-print">
            <div class="row content">
                <!--sidebar-->
                <div class="col-sm-2 sidenav hidden-xs mySideNav">
                    <br>
                    <ul class="nav nav-pills nav-stacked pointer">
                        <li class="active">
                            <a href="<?= site_url('dashboard') ?>">
                                <i class="fa fa-home"></i>
                                الرئيسية
                            </a>
                        </li>
                    </ul>
                    <br>
                </div>
                <!-- end sidbar -->
                <br>
                <!--Start Main Content-->
            <div class="col-sm-10">
                <?= isset($pageContent) ? $pageContent : "" ?>
                
            </div>
            <!--End Main Content-->
            </div> 
            

            
        </div> 

        <footer class="container-fluid text-center hidden-print">
            <p>
                <i class="fa fa-copyright"></i>
                Copyright <a href="#">Ali Elsayed</a> (2017)
            </p>
        </footer>

    </body>
</html>