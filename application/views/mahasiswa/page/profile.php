<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0"><?php echo $page_title ?></p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('mahasiswa'); ?>">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)"><?php echo $page_title ?></a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                    
                                </div>
                                <div class="profile-info">
									
                                    <div class="row">
										<div class="col-sm-3">
											<div class="profile-photo">
												<img src="<?php echo base_url('assets/images/profile/') . $user['image']; ?>" class="img-fluid rounded-circle" alt="">
											</div>
										</div>
                                        <div class="col-sm-9 col-12">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-6 border-right-1">
                                                    <div class="profile-name">
                                                        <h4 class="text-primary mb-0"><?= $user['nama']; ?></h4>
                                                        <p>
                                                            <?php if ($user['role_id'] == '5') { ?>
                                                                <div class="badge badge-info btn-sm"> Mahasiswa</div>
                                                            <?php } ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6 border-right-1">
                                                    <div class="profile-email">
                                                        <h4 class="text-muted mb-0"><?= $user['email']; ?></h4>
                                                        <p>Email</p>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-xl-4 col-sm-4 prf-col">
                                                    <div class="profile-call">
                                                        <h4 class="text-muted">(+1) 321-837-1030</h4>
                                                        <p>Phone No.</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics">
                                    <div class="text-center mt-4 border-bottom-1 pb-3">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="m-b-0">150</h3><span>Follower</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">140</h3><span>Place Stay</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">45</h3><span>Reviews</span>
                                            </div>
                                        </div>
                                        <div class="mt-4">
											<a href="javascript:void()" class="btn btn-primary px-5 mr-3 mb-4">Follow</a> 
											<a href="javascript:void()" class="btn btn-dark px-3 mb-4">Send Message</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#datapribadi" data-toggle="tab" class="nav-link active show">Informasi Pribadi</a>
                                            </li>
                                            <li class="nav-item"><a href="#kontakpribadi" data-toggle="tab" class="nav-link">Kontak Pripadi</a>
                                            </li>
                                            <li class="nav-item"><a href="#kontakdarurat" data-toggle="tab" class="nav-link">Kontak Darurat</a>
                                            </li>
                                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Ganti Kata Sandi</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="datapribadi" class="tab-pane fade active show">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Data Pribadi</h4>
                                                        <form method="post" action="<?php echo base_url('mahasiswa/update_profile1'); ?>">
                                                            <!-- <div class="form-row"> -->
                                                                <div class="form-group" hidden>
                                                                    <label for="id">id</label>
                                                                    <input type="text" id="id" name="id" value="<?= $user['id']; ?>" class="form-control" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nama">Nama Panjang</label>
                                                                    <input type="text" id="nama" name="nama" value="<?= $user['nama']; ?>" class="form-control" disabled>
                                                                </div>
                                                            <!-- </div> -->
                                                            <div class="form-group">
                                                                <label>Jenis Kelamin</label>
                                                                <input type="text" value="<?= $user['jk']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tempat kelahiran</label>
                                                                <input type="text" value="<?= $user['tempat_lahir']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tanggal Lahir</label>
                                                                <input type="text" value="<?= date('d F Y', strtotime ($user['tanggal_lahir'])); ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="agama" class="form-label">Agama</label>
                                                            <select class="selectpicker form-control form-select-lg mb-3" data-live-search="true" id="agama" name="agama" required>
                                                                    <option class="text-center" value="" selected="" disabled="">--- PILIH ---</option>
                                                                    <option <?php if ($user['agama'] == "Islam") {echo 'selected'; }?> value="Islam">Islam</option>
                                                                    <option <?php if ($user['agama'] == "Protestan") {echo 'selected'; }?> value="Protestan">Protestan</option>
                                                                    <option <?php if ($user['agama'] == "Katolik") {echo 'selected'; }?> value="Katolik">Katolik</option>
                                                                    <option <?php if ($user['agama'] == "Hindu") {echo 'selected'; }?> value="Hindu">Hindu</option>
                                                                    <option <?php if ($user['agama'] == "Buddha") {echo 'selected'; }?> value="Buddha">Buddha</option>
                                                                    <option <?php if ($user['agama'] == "Khonghucu") {echo 'selected'; }?> value="Khonghucu">Khonghucu</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nomor Induk Kependudukan (NIK)</label>
                                                                <input type="text" value="<?= $user['nik']; ?>" class="form-control" disabled>
                                                            </div>

                                                            <br>
                                                            <h4 class="text-primary">Informasi Akademik</h4>
                                                            <div class="form-group">
                                                                <label for="kampus">Nama Perguruan Tinggi</label>
                                                                <input type="text" id="kampus" name="kampus" value="<?= $user['kampus']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="p_studi">Program Studi</label>
                                                                <input type="text" id="p_studi" name="p_studi" value="<?= $user['p_studi']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nim">Nomor Induk Siswa (NIM)</label>
                                                                <input type="number" id="nim" name="nim" value="<?= $user['nim']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="asal_sklh">Asal Sekolah</label>
                                                                <input type="text" id="asal_sklh" name="asal_sklh" value="<?= $user['asal_sklh']; ?>" class="form-control">
                                                            </div>
                                                            <button class="btn btn-danger bt-light" type="submit">Simpan Perubahan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="kontakpribadi" class="tab-pane fade">
                                                <div class="my-post-content pt-3">
                                                    <h4 class="text-primary">Kontak Pribadi</h4>
                                                        <form method="post" action="<?php echo base_url('mahasiswa/update_profile2'); ?>">
                                                            <!-- <div class="form-row"> -->
                                                                <div class="form-group" hidden>
                                                                    <label for="id">id</label>
                                                                    <input type="text" id="id" name="id" value="<?= $user['id']; ?>" class="form-control" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" id="email" name="email" value="<?= $user['email']; ?>" class="form-control" disabled>
                                                                </div>
                                                            <!-- </div> -->
                                                            <div class="form-group">
                                                                <label for="telepom">Nomor ponsel</label>
                                                                <input type="text" id="telepon" name="telepon" value="<?= $user['telepon']; ?>" class="form-control">
                                                            </div>

                                                            <br>
                                                            <h4 class="text-primary">Alamat Domisili</h4>
                                                            <div class="form-group">
                                                                <label for="provinsi">Provinsi</label>
                                                                <input type="text" id="provinsi" name="provinsi" value="<?= $user['provinsi']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="kabupaten">Kabupaten</label>
                                                                <input type="text" id="kabupaten" name="kabupaten" value="<?= $user['kabupaten']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="kecamatan">Kecamatan</label>
                                                                <input type="text" id="kecamatan" name="kecamatan" value="<?= $user['kecamatan']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="desa">Desa</label>
                                                                <input type="text" id="desa" name="desa" value="<?= $user['desa']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="kode_pos">Kode Pos</label>
                                                                <input type="text" id="kode_pos" name="kode_pos" value="<?= $user['kode_pos']; ?>" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="alamat">alamat</label>
                                                                <textarea type="text" id="alamat" name="alamat" class="form-control"><?= $user['alamat']; ?></textarea>
                                                            </div>
                                                            <button class="btn btn-danger bt-light" type="submit">Simpan Perubahan</button>
                                                        </form>
                                                </div>
                                            </div>
                                            <div id="kontakdarurat" class="tab-pane fade">
                                                <div class="kontakdarurat-form pt-3">
                                                    <h4 class="text-primary">Kontak Darurat</h4>
                                                        <form method="post" action="<?php echo base_url('mahasiswa/update_profile3'); ?>">
                                                                <div class="form-group" hidden>
                                                                    <label for="id">id</label>
                                                                    <input type="text" id="id" name="id" value="<?= $user['id']; ?>" class="form-control" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="kp_nama">Nama</label>
                                                                    <input type="text" id="kp_nama" name="kp_nama" value="<?= $user['kp_nama']; ?>" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="kp_posisi">Hubungan</label>
                                                                    <select class="selectpicker form-control form-select-lg mb-3" data-live-search="true" id="kp_posisi" name="kp_posisi" required>
                                                                        <option class="text-center" value="" selected="" disabled="">--- PILIH ---</option>
                                                                        <option <?php if ($user['kp_posisi'] == "Ayah") {echo 'selected'; }?> value="Ayah">Ayah</option>
                                                                        <option <?php if ($user['kp_posisi'] == "ibu") {echo 'selected'; }?> value="ibu">ibu</option>
                                                                        <option <?php if ($user['kp_posisi'] == "Saudara Kandung") {echo 'selected'; }?> value="Saudara Kandung">Saudara Kandung</option>
                                                                        <option <?php if ($user['kp_posisi'] == "Teman") {echo 'selected'; }?> value="Teman">Teman</option>
                                                                        <option <?php if ($user['kp_posisi'] == "Wali") {echo 'selected'; }?> value="Wali">Wali</option>
                                                                        <option <?php if ($user['kp_posisi'] == "Lainnya") {echo 'selected'; }?> value="Lainnya">Lainnya</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="kp_nomor">Nomor telepon</label>
                                                                    <input type="number" id="kp_nomor" name="kp_nomor" value="<?= $user['kp_nomor']; ?>" class="form-control">
                                                                </div>
                                                            <button class="btn btn-danger bt-light" type="submit">Simpan Perubahan</button>
                                                        </form>
                                                 </div>
                                            </div>
                                            <div id="profile-settings" class="tab-pane fade">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Account Setting</h4>
                                                        <form method="post" action="<?php echo base_url('mahasiswa/passwordupdate'); ?>">
                                                            <div class="form-group">
                                                                <label for="current_password">Kata sandi sekarang</label>
                                                                <input type="password" name="current_password" id="current_password" placeholder="Kata sandi sekarang" class="form-control" required>
                                                                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="new_password1">Kata sandi baru</label>
                                                                <input type="password" name="new_password1" id="new_password1" placeholder="Kata sandi baru" class="form-control" required>
                                                                <h6 class="text-muted">Minimal 8 karakter dan mengandung kombinasi huruf kecil, huruf besar, dan angka</h6>
                                                                <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="new_password2">Ketik ulang kata sandi baru</label>
                                                                <input type="password" name="new_password2" id="new_password2" placeholder="Ketik ulang kata sandi baru" class="form-control" required>
                                                                <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>

                                                            </div>
                                                            <button class="btn btn-danger" type="submit">Simpan Perubahan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>