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
                                        <form method="post" action="<?php echo base_url('superadmin/add_faq'); ?>">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                <label for="tanya">Pertanyaan <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="tanya" name="tanya" placeholder="Isi Pertanyaan" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                <label for="jawab">Jawaban <font color="red">(*)</font></label>
                                                <textarea type="text" class="form-control" id="jawab" name="jawab" placeholder="Isi Jawaban" required> </textarea>
                                                </div>
                                            </div>
                                            <div class="form-row" hidden>
                                                <div class="form-group col-md-12">
                                                <label for="created_by">user id</label>
                                                <input type="text" class="form-control" id="created_by" name="created_by" value="<?= $user['nama']; ?> | <?= $user['id']; ?>">
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