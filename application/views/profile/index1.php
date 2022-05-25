<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title"><?php echo $page_title ?></h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url('ketuabidang'); ?>">Dashboard</a></li>
<li class="breadcrumb-item active"><?php echo $page_title ?></li>
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
<a><?php if ($user['v_email'] == '0') { ?>
<div class="badge badge-light btn-sm"><font color="red">Email</font></div>
<?php } ?>
<?php if ($user['v_email'] == '1') { ?>
<div class="badge badge-light btn-sm"><font color="black">Email</font></div>
<?php } ?></a>
<a class="float-end"><h5><?php if ($user['v_email'] == '1') { ?>
<div class="badge badge-info btn-sm"><i class="fe fe-check" style="color: white;"> Email Terverifikasi</i></div>
<?php } ?>
<?php if ($user['v_email'] == '0') { ?>
<div class="badge badge-light btn-sm"><font color="red">Email Belum Diverifikasi</font></div>
<?php } ?></h5></a>
</div>
<div class="profile-list">
<a><?php if ($user['is_active'] == '1') { ?>
<div class="badge badge-light btn-sm"><font color="black">Status Account</font></div>
<?php } ?></a>
<a class="float-end"><h5><?php if ($user['is_active'] == '1') { ?>
<div class="badge badge-danger btn-sm"><i class="fe fe-check" style="color: white;"> Active</i></div>
<?php } ?></h5></a>
</div>
<!-- <div class="profile-list">
<a href="#"><i class="fe fe-disabled"></i></a>
<a href="#">Blocked User</a>
<a href="#" class="float-end"><h5>103</h5></a>
</div> -->
<?php if ($user['v_email'] == '0') { ?>
<div class="profile-list">
<a href="<?php echo base_url('ketuabidang/verifemail'); ?>"><button type="button" class="btn btn-block btn-outline-danger">Verifikasi Email</button></a>
</div>
<?php } ?>
<?php if ($user['v_email'] == '1') { ?>
<div class="profile-list">
<a href="group-history.html"><button type="button" class="btn btn-block btn-outline-dark">Ubah Password</button></a>
</div>
<?php } ?>
<?php if ($user['v_email'] == '1') { ?>
<div class="profile-list">
<a href="group-history.html"><button type="button" class="btn btn-block btn-outline-dark">Ubah Email</button></a>
</div>
<?php } ?>
</div>
</div>
</div>
<div class="col-md-8">
<div class="card">
<div class="card-header">
 <h4 class="card-title">Profil</h4>
</div>
<div class="card-body">

<ul class="nav nav-tabs nav-tabs-solid nav-justified">
<li class="nav-item"><a class="nav-link active" href="#solid-justified-tab1" data-bs-toggle="tab">Data Pribadi</a></li>
<li class="nav-item"><a class="nav-link" href="#solid-justified-tab2" data-bs-toggle="tab">Kontak Pribadi</a></li>
<li class="nav-item"><a class="nav-link" href="#solid-justified-tab3" data-bs-toggle="tab">Bidang</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="solid-justified-tab1">
<form action="#">
<div class="form-group">
<label for="nip">NIP</label>
<input type="number" class="form-control" name="nip" id="nip" value="<?= $user['nip']; ?>" readonly>
</div>
<div class="form-group">
<label for="nama">Nama Lengkap</label>
<input type="text" class="form-control" name="nama" id="nama" value="<?= $user['nama']; ?>">
</div>
<div class="form-group">
<label for="jk">Jenis Kelamin</label>
<input type="text" class="form-control" name="jk" id="jk" value="<?php if ($user['jk'] == '0') { ?>
Perempuan
<?php } ?>
<?php if ($user['jk'] == '1') { ?>
Laki - Laki
<?php } ?>" readonly>
</div>
<div class="form-group">
<label for="tempat_lahir">Tempat Kelahiran</label>
<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?= $user['tempat_lahir']; ?>" readonly>
</div>
<div class="form-group">
<label for="tanggal_lahir">Tanggal Lahir</label>
<input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?= $user['tanggal_lahir']; ?>" readonly>
</div>
<div class="form-group">
<label for="agama">Agama</label>
<select class="selectpicker form-control" data-live-search="true" name="agama" id="agama">
<option value="" selected="" disabled="">--- Isi sesuai KTP Anda ---</option>
<option <?php if ($user['agama'] == "1") {echo 'selected'; }?> value="1">Islam</option>
<option <?php if ($user['agama'] == "2") {echo 'selected'; }?> value="2">Protestan</option>
<option <?php if ($user['agama'] == "3") {echo 'selected'; }?> value="3">Katolik</option>
<option <?php if ($user['agama'] == "4") {echo 'selected'; }?> value="4">Hindu</option>
<option <?php if ($user['agama'] == "5") {echo 'selected'; }?> value="5">Buddha</option>
<option <?php if ($user['agama'] == "6") {echo 'selected'; }?> value="6">Khonghucu</option>
</select>
</div>
</div>
<div class="tab-pane" id="solid-justified-tab2">
<div class="form-group">
<label for="id">Id Account</label>
<input type="number" class="form-control" name="id" id="id" value="<?= $user['id']; ?>" readonly>
</div>
<div class="form-group">
<label for="role_id">Jabatan</label>
<input type="text" class="form-control" name="role_id" id="role_id" value="<?php if ($user['role_id'] == '3') { ?>
Ketua Bidang
<?php } ?>
<?php if ($user['role_id'] == '4') { ?>
Kasi
<?php } ?>" readonly>
</div>
<div class="form-group">
<label for="email">Email Address</label>
<input type="email" class="form-control" name="email" id="email" value="<?= $user['email']; ?>">
</div>
<div class="form-group">
<label for="telepon">Nomor Ponsel</label>
<input type="text" class="form-control" name="telepon" id="telepon" value="<?= $user['telepon']; ?>">
</div>
<div class="form-group">
<label for="provinsi">Provinsi</label>
<select name="provinsi" class="form-control" id="provinsi">
   <option>- Select Provinsi -</option>
   <?php foreach($provinsi as $prov){
    echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
   } ?>
  </select>
</div>
<div class="form-group">
<label for="kabupaten">Kabupaten/Kota</label>
<select name="kabupaten" class="form-control" id="kabupaten">
   <option value=''>Select Kabupaten</option>
  </select>
</div>
<div class="form-group">
<label for="kecamatan">Kecamatan</label>
<select name="kecamatan" class="form-control" id="kecamatan">
   <option>Select Kecamatan</option>
  </select>
</div>
<!-- <div class="form-group">
<label for="kec">Kecamatan</label>
<select name="kec" class="form-control selectpicker" id="kecamatan">
   <option>Select Kecamatan</option>
  </select>
</div> -->
<div class="form-group">
<label for="desa">Kelurahan/Desa</label>
<select name="desa" class="form-control" id="desa">
<option>Select Desa</option>
</select>
</div>
<div class="form-group">
<label for="kode_pos">Kode Pos</label>
<input type="text" class="form-control" name="kode_pos" id="kode_pos" value="<?= $user['kode_pos']; ?>">
</select>
</div>
<div class="form-group">
<label for="alamat">Alamat</label>
<input type="text" class="form-control" name="alamat" id="alamat" value="<?= $user['alamat']; ?>">
</div>
</div>
<div class="tab-pane" id="solid-justified-tab3">
<div class="form-group">
<label for="id">Id Bidang</label>
<input type="number" class="form-control" name="id" id="id" value="" readonly>
</div>
<div class="form-group">
<label for="kode_bidang">Kode Bidang</label>
<input type="number" class="form-control" name="kode_bidang" id="kode_bidang" value="" readonly>
</div>
<div class="form-group">
<label for="">Jabatan</label>
<input type="number" class="form-control" name="" id="" value="" readonly>
</div>
</div>
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