      <!-- START: Main Content-->
        <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0"><?php echo $page_title ?></h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('superadmin') ?>">Home</a></li>
                                <li class="breadcrumb-item active"><?php echo $page_title ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="position-relative">
                            <div class="background-image-maker py-5"></div>
                            <div class="holder-image">
                                <img src="<?php echo base_url('assets/template')?>/dist/images/portfolio13.jpg" alt="" class="img-fluid d-none">
                            </div>
                            <div class="position-relative px-3 py-5">
                                <div class="media d-md-flex d-block">
                                    <a href="#"><img src="<?php echo base_url('assets/images/profile/') . $user['image']; ?>" width="100" alt="" class="img-fluid rounded-circle"></a>
                                    <div class="media-body z-index-1">
                                        <div class="pl-4">
                                            <h1 class="display-4 text-uppercase text-white mb-0"><?= $user['nama']; ?></h1>
                                            <h6 class="text-uppercase text-white mb-0">
                                                    <span>
                                                        <?php if ($user['role_id'] == '1') { ?>
                                                            <div class="badge badge-danger btn-sm"><i class="fas fa-check"> Administrator</i></div>
                                                          <?php } ?>
                                                      <?php if ($user['role_id'] == '2') { ?>
                                                            <div class="badge badge-secondary btn-sm">Member</div>
                                                          <?php } ?>
                                                    </span>
                                                </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-3 mt-3">
                        <div class="card">
                            <div class="card-header">                               
                                <h4 class="card-title">Status Account</h4>                  
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <li class="list-group-item text-center">
                                                <b>Account Level 
                                                    <span>
                                                        <?php if ($user['role_id'] == '1') { ?>
                                                            <div class="col-12 mt-3 badge badge-danger btn-sm">Administrator</div>
                                                          <?php } ?>
                                                      <?php if ($user['role_id'] == '2') { ?>
                                                            <div class="col-12 mt-3 badge badge-success btn-sm">Member</div>
                                                          <?php } ?>
                                                    </span>
                                                </b>
                                            </li>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <li class="list-group-item text-center">
                                                <b>Account Activation 
                                                    <span>
                                                        <?php if ($user['is_active'] == '0') { ?>
                                                            <div class="col-12 mt-3 badge badge-secondary btn-sm">Not Actived</div>
                                                          <?php } ?>
                                                      <?php if ($user['is_active'] == '1') { ?>
                                                            <div class="col-12 mt-3 badge badge-info btn-sm">Active</div>
                                                          <?php } ?> 
                                                    </span>
                                                </b>
                                            </li>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <li class="list-group-item text-center">
                                                <b>Email 
                                                    <span>
                                                    <?php if ($user['v_email'] == '0') { ?>
                                                        <div class="active"><i><font color="red">Email Belum Diverifikasi</font></i></div>
                                                      <?php } ?>
                                                      <?php if ($user['v_email'] == '1') { ?>
                                                        <div class="active"><i><font color="green">Email Sudah Diverifikasi</font></i></div>
                                                      <?php } ?>
                                                    </span>
                                                </b>
                                            </li>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <li class="list-group-item text-center">
                                                <b>Account Created 
                                                    <span>
                                                        <div class="col-12 mt-3 badge badge-secondary btn-sm"><?= date('d F Y', $user['date_created']); ?>
                                                        </div>
                                                    </span>
                                                </b>
                                            </li>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <li class="list-group-item text-center">
                                                <b>Last Logged 
                                                    <span>
                                                        <div class="col-12 mt-3 badge badge-secondary btn-sm"><?php if ($user['online'] == '') { ?>
                                                                <div class="badge badge-secondary">Data Tidak Ditemukan</div>
                                                              <?php }else {
                                                                echo $user['online'];
                                                              } ?>
                                                        </div>
                                                    </span>
                                                </b>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 mt-3">
                        <div class="card">
                            <div class="card-header">                               
                                <h4 class="card-title">Data Account</h4>                                
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <form method="post" action="<?php echo base_url('superadmin/profile'); ?>">
                                                <label for="id" hidden>id</label>
                                                <div class="input-group  mb-3" hidden>

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="id" name="id" value="<?= $user['id']; ?>" >
                                                </div>

                                                <label for="name">Nama Lengkap</label>
                                                <div class="input-group  mb-3">

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['nama']; ?>" >
                                                </div>

                                                <label for="email" hidden>Email</label>
                                                <div class="input-group mb-3" hidden>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-transparent border-right-0" id="basic-email"><i class="icon-envelope"></i></span>
                                                    </div>
                                                    <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" >
                                                </div>

                                                <label for="telepon">Contact</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-transparent border-right-0" id="basic-contac"><i class="icon-phone"></i></span>
                                                    </div>
                                                    <input type="number" class="form-control" id="telepon" name="telepon" value="<?= $user['telepon']; ?>" >
                                                </div>
                                                <p><?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?></p>

                                                <div class="form-group">

                                                    <button type="submit" class="btn btn-primary">Submit</button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">                               
                                <h4 class="card-title">Data Account</h4>                                
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <form method="post" action="<?php echo base_url('superadmin/emailupdate?id='.$user['id']); ?>">

                                                <label for="id" hidden>id</label>
                                                <div class="input-group  mb-3" hidden>

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="id" name="id" value="<?= $user['id']; ?>" >
                                                </div>

                                                <label for="email">Old Email</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-transparent border-right-0" id="basic-email"><i class="icon-envelope"></i></span>
                                                    </div>
                                                    <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" disabled>
                                                </div>

                                                <label for="email">New Email</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-transparent border-right-0" id="basic-email"><i class="icon-envelope"></i></span>
                                                    </div>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email Baru" required>
                                                </div>

                                                <div class="form-group">

                                                    <button onclick="return confirm('apakah anda yakin ingin menyimpan data ini?')" type="submit" class="btn btn-primary">Submit</button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Upload Foto Profile</h4>
                            </div>
                            <div class="card-body">
                                <?= form_open_multipart('superadmin/profile'); ?>
                                <form class="dropzone dropzone-primary">
                                    <label for="name" hidden>Nama Lengkap</label>
                                        <div class="input-group  mb-3" readonly hidden>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="name" name="name" value="<?= $user['nama']; ?>" readonly hidden>
                                        </div>

                                        <label for="email" hidden>Email</label>
                                        <div class="input-group mb-3" readonly hidden>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent border-right-0" id="basic-email"><i class="icon-envelope"></i></span>
                                            </div>
                                            <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" >
                                        </div>

                                        <label for="telepon" hidden>Contact</label>
                                        <div class="input-group mb-3" readonly hidden>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent border-right-0" id="basic-contac"><i class="icon-phone"></i></span>
                                            </div>
                                            <input type="number" class="form-control" id="telepon" name="telepon" value="<?= $user['telepon']; ?>" >
                                        </div>
                                    <div class="fallback">
                                        <input name="image" type="file" id="image" />
                                    </div>
                                    <p>
                                    <div class="form-group">
                                        <button onclick="return confirm('apakah anda yakin ingin menyimpan data ini?')" type="submit" class="btn btn-primary">Submit</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header d-flex justify-content-between align-items-center">                               
                                <h4 class="card-title">Ganti Password</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="<?php echo base_url('superadmin/passwordupdate'); ?>">
                                    <label for="current_password">Password Lama</label>
                                        <div class="input-group  mb-3">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-lock"></i></span>
                                            </div>
                                            <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Old Password">
                                            <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    <label for="new_password1">Password Baru</label>
                                        <div class="input-group  mb-3">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-lock"></i></span>
                                            </div>
                                            <input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="New Password">
                                            <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    <label for="new_password2">Ulangi Password</label>
                                        <div class="input-group  mb-3">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-lock"></i></span>
                                            </div>
                                            <input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="Retype New Password">
                                        </div>

                                    <div class="form-group">

                                        <button onclick="return confirm('apakah anda yakin ingin menyimpan data ini?')" type="submit" class="btn btn-primary">Submit</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>                
                <!-- END: Card DATA-->

            </div>
        </main>