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
                                        <form method="post" action="<?php echo base_url('superadmin/add_bidang'); ?>" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="kode_bidang">Kode Bidang <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="kode_bidang" name="kode_bidang" placeholder="contoh: DISKOMINFO-01" required>
                                                <?= form_error('kode_bidang', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="nama_bidang">Nama Bidang <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="nama_bidang" name="nama_bidang" placeholder="Masukan Nama Bidang" required>
                                                <?= form_error('nama_bidang', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                <label for="deskripsi">Deskripsi <font color="red">(*)</font></label>
                                                <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" required><?= set_value('deskripsi'); ?></textarea>
                                                <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="waktu_in">Jam Masuk Kerja <font color="red">(*)</font></label>
                                                <input type="time" class="form-control" id="waktu_in" name="waktu_in" value="<?= set_value('waktu_in'); ?>" placeholder="Masukan Jam Masuk Kerja Sesuai Bidang Masing - Masing" required>
                                                <?= form_error('waktu_in', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="waktu_out">Jam Pulang Kerja <font color="red">(*)</font></label>
                                                <input type="time" class="form-control" id="waktu_out" name="waktu_out" value="<?= set_value('waktu_out'); ?>" placeholder="Masukan Pulang Kerja Sesuai Bidang Masing - Masing" required>
                                                <?= form_error('waktu_out', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                <label for="slot_siswa">Slot Siswa <font color="red">(*)</font></label>
                                                <input type="number" class="form-control" id="slot_siswa" name="slot_siswa" value="<?= set_value('slot_siswa'); ?>" placeholder="Maximal Peserta: 10" required>
                                                <?= form_error('slot_siswa', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="slot_mhs">Slot Mahasiswa <font color="red">(*)</font></label>
                                                <input type="number" class="form-control" id="slot_mhs" name="slot_mhs" value="<?= set_value('slot_mhs'); ?>" placeholder="Maximal Peserta: 5" required>
                                                <?= form_error('slot_mhs', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="slot_mhs_penelitian">Slot Mahasiswa Penelitian <font color="red">(*)</font></label>
                                                <input type="number" class="form-control" id="slot_mhs_penelitian" name="slot_mhs_penelitian" value="<?= set_value('slot_mhs_penelitian'); ?>" placeholder="Maximal Peserta: 3" required>
                                                <?= form_error('slot_mhs_penelitian', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="type">Type Bidang <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="type" name="type" value="<?= set_value('type'); ?>" placeholder="Masukan Type Bidang" required>
                                                <?= form_error('type', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="reward">Reward Peserta <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="reward" name="reward" value="<?= set_value('reward'); ?>" placeholder="Masukan Reward" required>
                                                <?= form_error('reward', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                <label for="id">Nomor User <font color="red">(*)</font></label>
                                                <select class="form-control" name="id" id="id" required>
                                                <option value="" selected="" disabled="">--- pilih ---</option>
                                                <?php $no=1; foreach($alluser1 as $alluser){ ?>
                                                    <option value="<?= $alluser['id']; ?>"><?= $alluser['id']; ?> - <?= $alluser['nama']; ?></option>
                                                <?php } ?> 
                                                </select>
                                                <?= form_error('id', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="form-group col-md-2">
                                                <label for="nip">NIP User <font color="red">(*)</font></label>
                                                <select class="form-control" name="nip" id="nip" required>
                                                <option value="" selected="" disabled="">--- pilih ---</option>
                                                <?php $no=1; foreach($alluser1 as $alluser){ ?>
                                                    <option value="<?= $alluser['nip']; ?>"><?= $alluser['nip']; ?> - <?= $alluser['nama']; ?></option>
                                                <?php } ?> 
                                                </select>
                                                <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="form-group col-md-2">
                                                <label for="nama">Nama User <font color="red">(*)</font></label>
                                                <select class="form-control" name="nama" id="nama" required>
                                                <option value="" selected="" disabled="">--- pilih ---</option>
                                                <?php $no=1; foreach($alluser1 as $alluser){ ?>
                                                    <option value="<?= $alluser['nama']; ?>"><?= $alluser['id']; ?> - <?= $alluser['nama']; ?> - <?= $alluser['nama']; ?></option>
                                                <?php } ?> 
                                                </select>
                                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="form-group col-md-2">
                                                <label for="email">Email User <font color="red">(*)</font></label>
                                                <select class="form-control" name="email" id="email" required>
                                                <option value="" selected="" disabled="">--- pilih ---</option>
                                                <?php $no=1; foreach($alluser1 as $alluser){ ?>
                                                    <option value="<?= $alluser['email']; ?>"><?= $alluser['id']; ?> - <?= $alluser['nip']; ?> - <?= $alluser['nama']; ?> - <?= $alluser['email']; ?></option>
                                                <?php } ?> 
                                                </select>
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="form-group col-md-2">
                                                <label for="telepon">Telepon User <font color="red">(*)</font></label>
                                                <select class="form-control" name="telepon" id="telepon" required>
                                                <option value="" selected="" disabled="">--- pilih ---</option>
                                                <?php $no=1; foreach($alluser1 as $alluser){ ?>
                                                    <option value="<?= $alluser['telepon']; ?>"><?= $alluser['id']; ?> - <?= $alluser['nip']; ?> - <?= $alluser['nama']; ?> - <?= $alluser['email']; ?> - <?= $alluser['telepon']; ?></option>
                                                <?php } ?> 
                                                </select>
                                                <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="form-group col-md-2">
                                                <label for="role_id">Level User <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="role_id" name="role_id" value="3" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="images[]">Foto</label><p>
                                                        <input type="file" id="images[]" name="images[]" multiple required />
                                                    <?= form_error('images[]', '<small class="text-danger pl-3">', '</small>'); ?>
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