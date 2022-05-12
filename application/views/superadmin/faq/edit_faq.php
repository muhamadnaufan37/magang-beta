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
                                <h3 class="card-title"><strong>FORM | Form Isian dengan tanda <font color="red">(*)</font>, WAJIB DIISI !</strong></h3>
                              </div>
                          <div class="card-body">
                            <div class="block-content">

                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="<?php echo base_url('superadmin/update_faq?id='.$faq['id']); ?>">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                <label for="id">Id faq <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="id" name="id" value="<?= $edit['id']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                <label for="tanya">Tanya <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="tanya" name="tanya" value="<?= $edit['tanya']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="jawab">Jawaban <font color="red">(*)</font></label>
                                                        <textarea name="jawab" id="jawab" class="summernote">
                                                            <p>
                                                                <?= $edit['jawab']; ?>
                                                            </p>
                                                        </textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                <label for="is_active">Status faq <font color="red">(*)</font></label>
                                                <select class="form-control" name="is_active" id="is_active">
                                                <option value="" selected="" disabled="">--- PILIH ---</option>
                                                    <option <?php if ($edit['is_active'] == "1") {echo 'selected'; }?> value="1">Active</option>
                                                    <option <?php if ($edit['is_active'] == "0") {echo 'selected'; }?> value="0">Non Active</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-row" hidden>
                                                <div class="form-group col-md-12">
                                                <label for="update_by">user id</label>
                                                <input type="text" class="form-control" id="update_by" name="update_by" value="<?= $user['nama']; ?> | <?= $user['id']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-row" hidden>
                                                <div class="form-group col-md-12">
                                                <label for="update_in">Time Update</label>
                                                <input type="text" class="form-control" id="update_in" name="update_in" value="<?php echo date('d-m-Y H:i:s'); ?>" readonly>
                                                </div>
                                            </div>
                                              <div class="card-footer">
                                                <a type="button" href="<?php echo base_url('superadmin/faq') ?>" class="btn btn-danger">Kembali</a>
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