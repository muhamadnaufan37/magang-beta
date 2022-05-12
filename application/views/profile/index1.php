<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">General Settings</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url('petugas'); ?>">Dashboard</a></li>
<li class="breadcrumb-item active">General Settings</li>
</ul>
</div>
</div>
</div>
<div class="row settings-tab">
<div class="col-md-4">
<div class="card">
<div class="card-header all-center">
<a href="general.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="<?php echo base_url('assets/images/profile/') . $user['image']; ?>" alt="User Image">
<i class="fe fe-camera"></i>
</a>
<h6><?= $user['nama']; ?></h6>
<p><?php if ($user['role_id'] == '2') { ?>
<div class="badge badge-danger btn-sm"> Adminkab</div>
<?php } ?>
<?php if ($user['role_id'] == '3') { ?>
<div class="badge badge-success btn-sm">Ketua Bidang</div>
<?php } ?>
<?php if ($user['role_id'] == '4') { ?>
<div class="badge badge-info btn-sm">Kasi</div>
<?php } ?></p>
</div>
<div class="card-body p-0">
<div class="profile-list">
<a href="#"><i class="fe fe-comment-o"></i></a>
<a href="#">Chat</a>
<a href="#" class="float-end"><h5>10, 203</h5></a>
</div>
<div class="profile-list">
<a href="#"><i class="fe fe-phone"></i></a>
<a href="#">Call</a>
<a href="#" class="float-end"><h5>403</h5></a>
</div>
<div class="profile-list">
<a href="#"><i class="fe fe-disabled"></i></a>
<a href="#">Blocked User</a>
<a href="#" class="float-end"><h5>103</h5></a>
</div>
<div class="profile-list">
<a href="group-history.html"><button type="button" class="btn btn-block btn-outline-light">View History</button></a>
</div>
</div>
</div>
</div>
<div class="col-md-8">
<div class="card">
<div class="card-header">
 <h4 class="card-title">General Settings</h4>
</div>
<div class="card-body">
<form action="#">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" value="<?= $user['nama']; ?>">
</div>
<div class="form-group">
<label>Email Address</label>
<input type="email" class="form-control" value="<?= $user['email']; ?>">
</div>
<div class="form-group">
<label>Contac</label>
<input type="text" class="form-control" value="<?= $user['telepon']; ?>">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" value="<?= $user['password']; ?>">
</div>
<div class="text-end">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>