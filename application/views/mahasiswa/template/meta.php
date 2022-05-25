<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
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
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/web')?>/<?= $web['image_logo'] ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist3/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist3/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist3/css/skin.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist3/vendor/jqvmap/css/jqvmap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist3/vendor/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist3/vendor/fullcalendar/css/fullcalendar.min.css">
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">