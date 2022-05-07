<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <meta
      name="description"
      content="<?= $web['desc_web']; ?>"
    />
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
    <meta property="og:image" content="<?php echo base_url('assets/images/web')?>/<?= $web['image_logo'] ?>" />
    <meta property="og:url" content="<?= $web['url_web']; ?>" />
    <meta property="og:site_name" content="<?= $web['site_web']; ?>" />
    <title><?php echo $page_title ?> - <?= $web['title']; ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/web')?>/<?= $web['image_logo'] ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/node_modules/sweetalert2')?>/dist/sweetalert2.min.css"> 
    <link href="<?php echo base_url('assets/plugins')?>/css/style.css" rel="stylesheet">

</head>
<body>