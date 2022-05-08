<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?= $web['desc_web']; ?>" />
        <meta name="author" content="" />
        <meta name="robots" content="index, follow" />
        <meta
          name="keywords"
          content="<?= $web['keyword_web']; ?>"
        />
        <meta property="og:title" content="<?= $web['title']; ?>" />
        <meta
          property="og:description"
          content="<?= $web['desc_web']; ?>"
        />
        <meta property="og:url" content="<?= $web['url_web']; ?>" />
        <meta property="og:site_name" content="<?= $web['site_web']; ?>" />
        <title><?php echo $page_title ?> - <?= $web['title']; ?></title>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/images/web')?>/<?= $web['image_logo'] ?>" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('assets/landing')?>/css/styles.css" rel="stylesheet" />
        <style>
            .circular--landscape {
        display: inline-block;
        position: relative;
        width: 300px;
        height: 300px;
        overflow: hidden;
        border-radius: 50%;
        }
        .circular--landscape img {
            width: auto;
            height: 150%;
            margin-left: -30px;
            }
        .img-responsive{
            min-width: 150px;
            width: 150px;
            height: auto;
        }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="<?php echo base_url('auth'); ?>">MAGANG</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="<?php echo base_url('auth'); ?>">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="<?php echo base_url('program'); ?>">Program</a></li>
                    </ul>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-lock me-2"></i>
                            <span class="small">Login</span>
                        </span>
                    </button>
                </div>
            </div>
        </nav>