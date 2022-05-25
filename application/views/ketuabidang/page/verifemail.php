<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title><?php echo $page_title ?> - <?= $web['title']; ?></title>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/web')?>/<?= $web['image_logo'] ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/template/dist2')?>/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url('assets/template/dist2')?>/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php echo base_url('assets/template/dist2')?>/css/feathericon.min.css">

<link rel="stylesheet" href="<?php echo base_url('assets/template/dist2')?>/plugins/morris/morris.css">

<link rel="stylesheet" href="<?php echo base_url('assets/template/dist2')?>/css/style.css">
</head>
<body>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-right">
<div class="login-right-wrap">
<h1>Verifikasi Email</h1>
<p class="account-subtitle">Enter your email to get a password reset link</p>

<form action="login.html">
<div class="form-group">
<input class="form-control" type="text" placeholder="Email">
</div>
<div class="form-group mb-0">
<button class="btn btn-primary btn-block" type="submit">Verif Email</button>
</div>
</form>

<div class="text-center dont-have"><a type="button" href="<?php echo base_url('ketuabidang/profile'); ?>">Kembali</a></div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="<?php echo base_url('assets/template/dist2')?>/js/jquery-3.6.0.min.js"></script>

<script src="<?php echo base_url('assets/template/dist2')?>/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url('assets/template/dist2')?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url('assets/template/dist2')?>/js/script.js"></script>
</body>
</html>