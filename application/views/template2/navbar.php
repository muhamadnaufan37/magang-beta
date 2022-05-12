<div class="header">

<div class="header-left">
<a href="<?php echo base_url('petugas'); ?>" class="logo">
<img src="<?php echo base_url('assets/images/web')?>/logo2.png" alt="Logo">
</a>
<a href="<?php echo base_url('petugas'); ?>" class="logo logo-small">
<img src="<?php echo base_url('assets/images/web')?>/logo1.jpg" alt="Logo" >
</a>
</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fe fe-text-align-left"></i>
</a>
<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>

<a class="mobile_btn" id="mobile_btn">
<i class="fa fa-bars"></i>
</a>


<ul class="nav user-menu">

<li class="nav-item dropdown noti-dropdown">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<i class="fa fa-bell"></i> <span class="badge badge-pill">3</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<?php foreach($notif1 as $notif){ ?>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title"><?= $notif['judul']; ?></span> <?= $notif['level']; ?> <span class="noti-title"><p><?= $notif['isi']; ?></p></span></p>
<p class="noti-time"><span class="notification-time"><?= $notif['date_created']; ?></span></p>
</div>
</div>
</a>
</li>
<!-- <li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li> -->
<?php } ?>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="#">View all Notifications</a>
</div>
</div>
</li>


<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="<?php echo base_url('assets/images/profile/') . $user['image']; ?>" width="31" alt="Seema Sisty"></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="<?php echo base_url('assets/images/profile/') . $user['image']; ?>" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6><?= $user['nama']; ?></h6>
<p class="text-muted mb-0"><?php if ($user['role_id'] == '2') { ?>
<div class="badge badge-danger btn-sm"> Adminkab</div>
<?php } ?>
<?php if ($user['role_id'] == '3') { ?>
<div class="badge badge-success btn-sm">Ketua Bidang</div>
<?php } ?>
<?php if ($user['role_id'] == '4') { ?>
<div class="badge badge-info btn-sm">Kasi</div>
<?php } ?></p>
</div>
</div>
<a class="dropdown-item" href="<?php echo base_url('petugas/profile'); ?>">My Profile</a>
<a class="dropdown-item" href="general.html">Account Settings</a>
<a class="dropdown-item" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
</div>
</li>

</ul>

</div>