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
                 <section class="col-lg-12 connectedSortable">
                        <div class="card card-danger">
                              <div class="card-header">
                                <h6 class="card-title"><strong>FORM BIO ACCOUNT | Form Isian dengan tanda <font color="red">(*)</font>, WAJIB DIISI !</strong></h6>
                              </div>
                          <div class="card-body">
                            <div class="block-content">

                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="<?php echo base_url('superadmin/add_account_1'); ?>" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                <label for="nama">Nama Lengkap <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="jk">Gender <font color="red">(*)</font></label>
                                                <select class="form-control" name="jk" id="jk" required>
                                                <option value="" selected="" disabled="">--- PILIH GENDER ---</option>
                                                    <option value="1">Laki - Laki</option>
                                                    <option value="2">Perempuan</option>
                                                </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="telepon">Nomor Telepon <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukan Nama Bidang" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                <label for="email">Email <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="contoh: example@email.com" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="password1">Password (default) <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="password1" name="password1" value="123456" readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="role_id">Level Akun <font color="red">(*)</font></label>
                                                <select class="form-control" name="role_id" id="role_id" required>
                                                <option value="" selected="" disabled="">--- PILIH ROLE ---</option>
                                                    <option value="1">Superadmin</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-row" hidden>
                                                <div class="form-group col-md-12">
                                                <label for="add">user id</label>
                                                <input type="text" class="form-control" id="add" name="add" value="<?= $user['nama']; ?> | <?= $user['id']; ?>" readonly>
                                                </div>
                                            </div>
                                              <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                              </div>
                                        </form>
                                    </div>
                                 </div>
                              </div>
                                <p class="text-muted"></p>
                            </div>
                      </div>
                    </div>
                </section>               
                <!-- END: Card DATA-->

            </div>
        </main>