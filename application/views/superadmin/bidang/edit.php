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
                                        <form method="post" action="<?php echo base_url('superadmin/update_bidang?id='.$bidang['id']); ?>" enctype="multipart/form-data">
                                            <div class="form-row" hidden>
                                                <div class="form-group col-md-12">
                                                <label for="id">id <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="id" name="id" value="<?= $edit['id']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="kode_bidang">Kode Bidang <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="kode_bidang" name="kode_bidang" value="<?= $edit['kode_bidang']; ?>" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="nama_bidang">Nama Bidang <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="nama_bidang" name="nama_bidang" value="<?= $edit['nama_bidang']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                <label for="s_bidang">Status Bidang <font color="red">(*)</font></label>
                                                <select class="form-control" name="s_bidang" id="s_bidang">
                                                <option value="" selected="" disabled="">--- PILIH ---</option>
                                                    <option <?php if ($edit['s_bidang'] == "1") {echo 'selected'; }?> value="1">Active</option>
                                                    <option <?php if ($edit['s_bidang'] == "0") {echo 'selected'; }?> value="0">Non Active</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                <label for="deskripsi">Deskripsi <font color="red">(*)</font></label>
                                                <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"><?= $edit['deskripsi']; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                <label for="slot_siswa">Slot Siswa <font color="red">(*)</font></label>
                                                <input type="number" class="form-control" id="slot_siswa" name="slot_siswa" value="<?= $edit['slot_siswa']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="slot_mhs">Slot Mahasiswa <font color="red">(*)</font></label>
                                                <input type="number" class="form-control" id="slot_mhs" name="slot_mhs" value="<?= $edit['slot_mhs']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="slot_mhs_penelitian">Slot Mahasiswa Penelitian <font color="red">(*)</font></label>
                                                <input type="number" class="form-control" id="slot_mhs_penelitian" name="slot_mhs_penelitian" value="<?= $edit['slot_mhs_penelitian']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6" hidden>
                                                <label for="date_created">Tanggal Dibuat <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="date_created" name="date_created" value="<?= $edit['date_created']; ?>" readonly>
                                                </div>
                                                  <div class="form-group col-md-6">
                                                    <label for="images[]">Foto</label>
                                                    <div class="input-group">
                                                      <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="images[]" name="images[]">
                                                        <label class="custom-file-label" for="images[]">Choose file</label>
                                                      </div>
                                                      <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                      </div>
                                                    </div>
                                                  </div>
                                            </div>
                                            <div class="form-row" hidden>
                                                <div class="form-group col-md-12">
                                                <label for="edit">user id</label>
                                                <input type="text" class="form-control" id="edit" name="edit" value="<?= $user['nama']; ?> | <?= $user['id']; ?>">
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