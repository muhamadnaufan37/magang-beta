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
                                        <form method="post" action="<?php echo base_url('superadmin/add_notif'); ?>">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                <label for="id">Id Pengirim <font color="red">(*)</font></label>
                                                <input type="number" class="form-control" id="id" name="id" value="<?= $user['id']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                <label for="judul">Judul <font color="red">(*)</font></label>
                                                <input type="text" class="form-control" id="judul" name="judul" placeholder="contoh: Ini Judul" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="level">Level Notif <font color="red">(*)</font></label>
                                                <select class="form-control" name="level" id="level">
                                                <option value="" selected="" disabled="">--- PILIH LEVEL ---</option>
                                                    <option value="1">Penting</option>
                                                    <option value="2">Pengumuman</option>
                                                    <option value="3">Event</option>
                                                    <option value="4">Perayaan</option>
                                                    <option value="5">Berita</option>
                                                    <option value="99">Khusus</option>
                                                </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="tujuan">Tujuan Notif <font color="red">(*)</font></label>
                                                <select class="form-control" name="tujuan" id="tujuan">
                                                <option value="" selected="" disabled="">--- PILIH TUJUAN ---</option>
                                                    <option value="99">Semua Pengguna</option>
                                                    <option value="1">Superadmin</option>
                                                    <option value="2">Petugas</option>
                                                    <option value="3">Ketua Bidang</option>
                                                    <option value="4">Kasi</option>
                                                    <option value="5">Mahasiswa</option>
                                                    <option value="6">Siswa</option>
                                                    <option value="7">Pembimbing</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="isi">Deskripsi <font color="red">(*)</font></label>
                                                        <textarea name="isi" id="isi" class="summernote">
                                                        </textarea>
                                                </div>
                                            </div>
                                              <div class="card-footer">
                                                <a type="button" href="<?php echo base_url('superadmin') ?>" class="btn btn-danger">Kembali</a>
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