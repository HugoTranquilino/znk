<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Znk Seguros</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
    <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/flatpickr.min.css" rel="stylesheet">


    <!-- =======================================================
  * Template Name: FlexStart - v1.1.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= base_url() ======= -->
    <input id="base_url_host" type="hidden" value="<?php echo base_url()?>" >
    <?php $url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];?>
    
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="<?php echo base_url();?>" class="logo d-flex align-items-center">
                <img src="<?php echo base_url()?>resources/logoHeader.png" alt="">
                <!-- <span>Znk-Seguros</span> -->
            </a>
            <?php 
            if($url_actual != base_url()){ ?>
                <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="<?php echo base_url()?>"> Regresar</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            <?php } else { ?>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#about">¿Quienes Somos?</a></li>
                    <li><a class="nav-link scrollto" href="#seguros">Tipos de SEGUROS</a></li>
                    <li><a class="nav-link scrollto" href="#socios">Nuestros Socios Comerciales</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <?php } ?>

            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= content ======= -->
    <?php echo $content; ?>
    <!-- End Content -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
    
        <div class="container">
            <div class="copyright">
                <a href="#" class="align-items-center">
                    <img src="resources/logoBlanc.png" alt="" style="width: 20%; text-align: center;">
                </a>
            </div>
            <div class="credits">
                Aviso de Privacidad
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Template Main JS File -->

    
    <script src="<?php echo base_url();?>assets/js/sweetalert2@9.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-3.6.0.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
    <script src="<?php echo base_url();?>assets/js/flatpickr.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.blockUI.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.redirect.js"></script>
    <script src="<?php echo base_url();?>assets/js/cotizaciones.js"></script>
    

</body>

</html>
