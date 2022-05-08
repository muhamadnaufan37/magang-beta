<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="keywords" content="<?= $web['keyword_web']; ?>">
        <meta name="author" content="<?= $web['author']; ?>">
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="<?= $web['desc_web']; ?>">
        <meta property="og:title" content="<?= $web['title']; ?>">
        <meta property="og:description" content="<?= $web['desc_web']; ?>">
        <meta property="og:image" content="<?php echo base_url('assets/images/web')?>/<?= $web['image_logo'] ?>">
        <meta name="format-detection" content="telephone=no">
        <title><?php echo $page_title ?> - <?= $web['title']; ?></title>
        <link rel="shortcut icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/web')?>/<?= $web['image_logo'] ?>" />
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/jquery-ui/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/simple-line-icons/css/simple-line-icons.css">        
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/flags-icon/css/flag-icon.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/node_modules/sweetalert2')?>/dist/sweetalert2.min.css">
        <link rel="stylesheet" href="<?php echo base_url("assets/template/dist/custom/css/custom-modal.css") ?>">         
        <!-- END Template CSS-->

        <!-- START: Page CSS-->
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/chartjs/Chart.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/cryptofont/cryptofont.css"> 
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/lineprogressbar/jquery.lineProgressbar.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/jsgrid/jsgrid.min.css" />
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/jsgrid/jsgrid-theme.css" />
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/datatable/css/dataTables.bootstrap4.min.css" />
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/datatable/buttons/css/buttons.bootstrap4.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/quill/quill.snow.css"/>
        <!-- END: Page CSS-->

        <!-- START: Page CSS-->   
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/morris/morris.css"> 
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/weather-icons/css/pe-icon-set-weather.min.css"> 
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/chartjs/Chart.min.css"> 
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/starrr/starrr.css"> 
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/ionicons/css/ionicons.min.css"> 
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css">
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/css/main.css">
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->
    <body id="main-container" class="default">

        <!-- START: Pre Loader-->
        <div class="se-pre-con">
            <div class="loader"></div>
        </div>
        <!-- END: Pre Loader-->