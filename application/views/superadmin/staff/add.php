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
                                <h3 class="card-title"><strong>FORM BIO BIDANG | Form Isian dengan tanda <font color="red">(*)</font>, WAJIB DIISI !</strong></h3>
                              </div>
                          <div class="card-body">
                            <div class="block-content">

                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="<?php echo base_url('superadmin/add_staff'); ?>" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                <label for="id_bidang">Nomor Bidang <font color="red">(*)</font></label>
                                                <select class="form-control" name="id_bidang" id="id_bidang" required>
                                                <option value="" selected="" disabled="">--- pilih ---</option>
                                                <?php $no=1; foreach($bidang1 as $bidang){ ?>
                                                    <option value="<?= $bidang['id_bidang']; ?>"><?= $bidang['id_bidang']; ?></option>
                                                <?php } ?> 
                                                </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="nama_bidang">Nama Bidang <font color="red">(*)</font></label>
                                                <select class="form-control" name="nama_bidang" id="nama_bidang" required>
                                                <option value="" selected="" disabled="">--- pilih ---</option>
                                                <?php $no=1; foreach($bidang1 as $bidang){ ?>
                                                    <option value="<?= $bidang['nama_bidang']; ?>"><?= $bidang['nama_bidang']; ?></option>
                                                <?php } ?> 
                                                </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="kode_bidang">kode Bidang <font color="red">(*)</font></label>
                                                <select class="form-control" name="kode_bidang" id="kode_bidang" required>
                                                <option value="" selected="" disabled="">--- pilih ---</option>
                                                <?php $no=1; foreach($bidang1 as $bidang){ ?>
                                                    <option value="<?= $bidang['kode_bidang']; ?>"><?= $bidang['kode_bidang']; ?></option>
                                                <?php } ?> 
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                <label for="id">Nomor User <font color="red">(*)</font></label>
                                                <select class="form-control" name="id" id="id" required>
                                                <option value="" selected="" disabled="">--- pilih ---</option>
                                                <?php $no=1; foreach($alluser1 as $alluser){ ?>
                                                    <option value="<?= $alluser['id']; ?>"><?= $alluser['id']; ?></option>
                                                <?php } ?> 
                                                </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label for="nama">Nama User <font color="red">(*)</font></label>
                                                <select class="form-control" name="nama" id="nama" required>
                                                <option value="" selected="" disabled="">--- pilih ---</option>
                                                <?php $no=1; foreach($alluser1 as $alluser){ ?>
                                                    <option value="<?= $alluser['nama']; ?>"><?= $alluser['nama']; ?></option>
                                                <?php } ?> 
                                                </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label for="email">Email User <font color="red">(*)</font></label>
                                                <select class="form-control" name="email" id="email" required>
                                                <option value="" selected="" disabled="">--- pilih ---</option>
                                                <?php $no=1; foreach($alluser1 as $alluser){ ?>
                                                    <option value="<?= $alluser['email']; ?>"><?= $alluser['email']; ?></option>
                                                <?php } ?> 
                                                </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label for="role_id">Level User <font color="red">(*)</font></label>
                                                <select class="form-control" name="role_id" id="role_id" required>
                                                <option value="" selected="" disabled="">--- pilih ---</option>
                                                <?php $no=1; foreach($alluser1 as $alluser){ ?>
                                                    <option value="<?= $alluser['role_id']; ?>"><?= $alluser['role_id']; ?></option>
                                                <?php } ?> 
                                                </select>
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