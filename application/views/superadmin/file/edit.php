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
                                <h5 class="card-title">Form Data Surat Rekomendasi Kampus</h5>
                              </div>
                          <div class="card-body">
                            <div class="block-content">

                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="<?php echo base_url('superadmin/update_file1/?id_surat='.$edit['id_surat']); ?>">
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                <label for="id_surat">Identitas Surat</label>
                                                <input type="number" class="form-control" id="id_surat" name="id_surat" value="<?= $edit['id_surat']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label for="nama">Nama Peserta</label>
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $edit['nama']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label for="email">Email Peserta</label>
                                                <input type="email" class="form-control" id="email" name="email" value="<?= $edit['email']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label for="telepon">Contact Peserta</label>
                                                <input type="number" class="form-control" id="telepon" name="telepon" value="<?= $edit['telepon']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                <label for="kampus">Nama Perguruan Tinggi Peserta</label>
                                                <input type="text" class="form-control" id="kampus" name="kampus" value="<?= $edit['kampus']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="p_studi">Jurusan</label>
                                                <input type="text" class="form-control" id="p_studi" name="p_studi" value="<?= $edit['p_studi']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="nim">Nomor Induk Mahasiswa (NIM)</label>
                                                <input type="number" class="form-control" id="nim" name="nim" value="<?= $edit['nim']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                <label for="doc_rek_kampus">Surat Rekomendasi Kampus </label>
                                                <input type="text" class="form-control" id="doc_rek_kampus" name="doc_rek_kampus" value="<?= $edit['doc_rek_kampus']; ?>" readonly>
                                                <middle class="form-text text-muted"><a class="badge badge-info badge-md" type="button" value="Lihat Detail" target="_blank" href="<?php echo base_url('assets/file_upload/doc_rekomendasi_kampus/') . $edit['doc_rek_kampus']; ?>" style="width: 100%">
                                                      Lihat FIle Disini
                                                  </a></middle>
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label for="status_surat">Status Surat</label>
                                                    <select class="form-control" id="status_surat" name="status_surat">
                                                      <option <?php if ($edit['status_surat'] == "0") {echo 'selected'; }?> value="0">Data Belum Dirubah</option>
                                                      <option <?php if ($edit['status_surat'] == "1") {echo 'selected'; }?> value="1">Data Ditolak</option>
                                                      <option <?php if ($edit['status_surat'] == "2") {echo 'selected'; }?> value="2">Data Diterima</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label for="status_doc">Status Dokumen</label>
                                                    <select class="form-control" id="status_doc" name="status_doc">
                                                      <option <?php if ($edit['status_doc'] == "0") {echo 'selected'; }?> value="0">Dalam Antrian</option>
                                                      <option <?php if ($edit['status_doc'] == "1") {echo 'selected'; }?> value="1">Sedang Diproses</option>
                                                      <option <?php if ($edit['status_doc'] == "2") {echo 'selected'; }?> value="2">Surat Telah Divalidasi</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label for="reason">Beri Tanggapan</label>
                                                <input type="text" class="form-control" id="reason" name="reason" value="<?= $edit['reason']; ?>" placeholder="kosongkan jika tidak ada tanggapan" >
                                                </div>
                                            </div>
                                            <div class="form-row" hidden>
                                                <div class="form-group col-md-4">
                                                <label for="acc_id">Nama Perguruan Tinggi Peserta</label>
                                                <input type="text" class="form-control" id="acc_id" name="acc_id" value="<?= $user['id']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="acc_nama">Nama</label>
                                                <input type="text" class="form-control" id="acc_nama" name="acc_nama" value="<?= $user['nama']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="acc_role">Level Akun</label>
                                                <input type="number" class="form-control" id="acc_role" name="acc_role" value="<?= $user['role_id']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div>
                                              <div class="card-footer">
                                                <a type="button" href="<?php echo base_url('superadmin/file_pending') ?>" class="btn btn-danger">Kembali</a>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                              </div>
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