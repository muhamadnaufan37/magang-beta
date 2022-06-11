<div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4><?php echo $page_title ?></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('mahasiswa'); ?>">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)"><?php echo $page_title ?></a></li>
                        </ol>
                    </div>
                </div>

                <?php foreach($user_file1 as $file1){ ?>
                    <?php if ($file1['status_doc'] == '0') { ?>   
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              Kamu belum upload dokumen surat rekomendasi kampus. Silahkan upload dokumen yang diperlukan <strong><b>sebelum mendaftar</b></strong>. Lengkapi Dokumen <a href="<?php echo base_url('mahasiswa/doc_rek_kampus'); ?>"><font color="blue">Disini</font></a>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php } ?>
                        <?php if ($file1['status_doc'] == '2') { ?>   
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                              Yeay, Selamat! <strong>Dokumen kamu berhasi diverifikasi oleh team, sekarang kamu dapat mendaftar ke bidang yang diinginkan</strong>.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php } ?>
                    <?php } ?>

                    <div class="alert alert-info alert-dismissible fade show" role="alert" style="text-align: center;">
                      <h3>Form Pendaftaran Peserta <?= $user['keperluan']; ?></h3>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

            <form method="post" action="<?php echo base_url('bidang/proses_mahasiswa/?id_bidang='.$edit['id_bidang']); ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id_bidang">Id Bidang</label>
                                    <input type="text" id="id_bidang" name="id_bidang" value="<?= $edit['id_bidang']; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="kode_bidang">Kode Bidang</label>
                                    <input type="text" id="kode_bidang" name="kode_bidang" value="<?= $edit['kode_bidang']; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <label for="nama_bidang">Nama Bidang</label>
                                    <input type="text" class="form-control" id="nama_bidang" name="nama_bidang" value="<?= $edit['nama_bidang']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="id_ketua">Id ketua</label>
                                    <input type="text" id="id_ketua" name="id_ketua" value="<?= $edit['id_ketua']; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <label for="nip">NIP</label>
                                    <input type="text" class="form-control" value="<?= $edit['nip']; ?>" id="nip" name="nip" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <label for="nama_ketua">Kepala Bidang</label>
                                    <input type="text" class="form-control" value="<?= $edit['nama_ketua']; ?>" id="nama_ketua" name="nama_ketua" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <label for="email_ketua">Email Kepala Bidang</label>
                                    <input type="email" class="form-control" value="<?= $edit['email_ketua']; ?>" id="email_ketua" name="email_ketua" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <label for="telepon_ketua">Mobile Number</label>
                                    <input type="number" class="form-control" value="<?= $edit['telepon_ketua']; ?>" id="telepon_ketua" name="telepon_ketua" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <label for="reward">Reward</label>
                                    <input type="text" class="form-control" value="<?= $edit['reward']; ?>" id="reward" name="reward" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                        <label for="keperluan">keperluan</label>
                                        <input type="text" class="form-control" value="<?= $user['keperluan']; ?>" id="keperluan" name="keperluan" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="id">Nomor Peserta</label>
                                        <input type="text" id="id" name="id" value="<?= $user['id']; ?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                        <label for="nama">Nama Peserta</label>
                                        <input type="text" class="form-control" value="<?= $user['nama']; ?>" id="nama" name="nama" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" value="<?= $user['email']; ?>" id="email" name="email" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                        <label for="telepon">Mobile Number</label>
                                        <input type="number" class="form-control" value="<?= $user['telepon']; ?>" id="telepon" name="telepon" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                        <label for="kampus">Nama Kampus Peserta</label>
                                        <input type="text" class="form-control" value="<?= $user['kampus']; ?>" id="kampus" name="kampus" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                        <label for="p_studi">Program Studi</label>
                                        <input type="text" class="form-control" value="<?= $user['p_studi']; ?>" id="p_studi" name="p_studi" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                        <label for="nim">Nomor Induk Siswa (NIM)</label>
                                        <input type="text" class="form-control" value="<?= $user['nim']; ?>" id="nim" name="nim" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                        <label for="nik">Nomor Induk Kependudukan (NIK)</label>
                                        <input type="text" class="form-control" value="<?= $user['nik']; ?>" id="nik" name="nik" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row" hidden>
                                        <div class="form-group col-md-12">
                                        <label for="s_magang">status magang</label>
                                        <input type="text" class="form-control" value="1" id="s_magang" name="s_magang">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="1" id="acc_peserta" name="acc_peserta" required>
                                      <label class="form-check-label" for="acc_peserta">
                                        Dengan ini saya <b><?= $user['nama']; ?></b> menyetujui <a type="button" data-toggle="modal" data-target="#term"><font color="blue">Ketentuan Pengguna</font></a> dan <a type="button" data-toggle="modal" data-target="#privacy"><font color="blue">Kebijakan Privasi</font></a> dari DISKOMINFO
                                      </label>
                                    </div>
                                    <br>
                                    <?php foreach($user_file1 as $file1){ ?>
                                        <?php if ($file1['status_doc'] == '0') { ?>   
                                            <a class="btn btn-block btn-dark disabled">Submit</a>
                                        <?php } ?>
                                        <?php if ($file1['status_doc'] == '1') { ?>   
                                            <a class="btn btn-block btn-dark disabled">Submit</a>
                                        <?php } ?>
                                        <?php if ($file1['status_doc'] == '2') { ?>   
                                            <button type="submit" class="btn btn-block btn-primary">Submit</button>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modal -->
            <div class="modal fade" id="term" tabindex="-1" role="dialog" aria-labelledby="termTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Syarat dan Ketentuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum placeat quis incidunt suscipit et fuga iste
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="privacy" tabindex="-1" role="dialog" aria-labelledby="privacyTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Syarat dan Ketentuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum placeat quis incidunt suscipit et fuga iste
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>