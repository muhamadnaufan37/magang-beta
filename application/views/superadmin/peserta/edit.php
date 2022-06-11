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
                                <h5 class="card-title">Form Data Peserta</h5>
                              </div>
                          <div class="card-body">
                            <div class="block-content">

                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="<?php echo base_url('superadmin/update_peserta/?id_peserta='.$edit['id_peserta']); ?>">
                                            <div class="table-responsive">
                                                <table id="example4" class="table table-striped table-bordered table-responsive-sm bg-light shadow" style="min-width: 845px">
                                                    <tr align="center" bgcolor="yellow">
                                                        <td width="174">DATA DIRI</td>
                                                        <td width="353">KETERANGAN</td>
                                                        <td width="232">QRCODE PENDAFTARAN</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nomor Pendaftaran</td>
                                                        <td><?= $edit['id_peserta']; ?></td>
                                                        <td rowspan="16" align="center"><img class="shadow" src="<?php echo site_url('superadmin/qrcode/') . $edit['id_peserta'] .'-'. $edit['kode_bidang'] .'-'. $edit['nip'] .'-'. $edit['nim'] .'-'. $edit['nik'] .'-'. $edit['golongan'] .'-'. $edit['s_peserta']; ?>" width="300" height="300"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nomor Identitas Peserta</td>
                                                        <td><?= $edit['id']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kode Bidang</td>
                                                        <td><?= $edit['kode_bidang']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Bidang</td>
                                                        <td><?= $edit['nama_bidang']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nomor Induk Pegawai</td>
                                                        <td><?= $edit['nik']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ketua Bidang</td>
                                                        <td><?= $edit['nama_ketua']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td><?= $edit['nama']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td><?= $edit['email']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Contact</td>
                                                        <td><?= $edit['telepon']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kampus</td>
                                                        <td><?= $edit['kampus']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jurusan</td>
                                                        <td><?= $edit['p_studi']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nomor Induk Mahasiswa (NIM)</td>
                                                        <td><?= $edit['nim']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Keperluan</td>
                                                        <td><?= $edit['keperluan']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kehadiran</td>
                                                        <td>
                                                            <select class="form-control" id="golongan" name="golongan">
                                                            <option value="" selected="" disabled="">--- PILIH ---</option>
                                                              <option <?php if ($edit['golongan'] == "1") {echo 'selected'; }?> value="1">Golongan A</option>
                                                              <option <?php if ($edit['golongan'] == "2") {echo 'selected'; }?> value="2">Golongan B</option>
                                                              <option <?php if ($edit['golongan'] == "3") {echo 'selected'; }?> value="3">Golongan C</option>
                                                              <option <?php if ($edit['golongan'] == "4") {echo 'selected'; }?> value="4">Golongan D</option>
                                                              <option <?php if ($edit['golongan'] == "5") {echo 'selected'; }?> value="5">Golongan E</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status Pendaftaran</td>
                                                        <td>
                                                            <select class="form-control" id="s_peserta" name="s_peserta">
                                                            <option value="" selected="" disabled="">--- PILIH ---</option>
                                                              <option <?php if ($edit['s_peserta'] == "0") {echo 'selected'; }?> value="0">Dalam Antrian</option>
                                                              <option <?php if ($edit['s_peserta'] == "1") {echo 'selected'; }?> value="1">Ditolak</option>
                                                              <option <?php if ($edit['s_peserta'] == "2") {echo 'selected'; }?> value="2">Diterima</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status Magang</td>
                                                        <td>
                                                            <?php foreach($alluserid1 as $alluserid){ ?>
                                                                <select class="form-control" id="s_magang" name="s_magang">
                                                                <option value="" selected="" disabled="">--- PILIH ---</option>
                                                                  <option <?php if ($alluserid['s_magang'] == "0") {echo 'selected'; }?> value="0">Belum Mendaftar</option>
                                                                  <option <?php if ($alluserid['s_magang'] == "1") {echo 'selected'; }?> value="1">Sudah Daftar</option>
                                                                  <option <?php if ($alluserid['s_magang'] == "2") {echo 'selected'; }?> value="2">Progres</option>
                                                                  <option <?php if ($alluserid['s_magang'] == "3") {echo 'selected'; }?> value="3">Selesai</option>
                                                                </select>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="form-row" hidden>
                                                <div class="form-group col-md-4">
                                                <label for="id_panitia">Nomor Panitia</label>
                                                <input type="text" class="form-control" id="id_panitia" name="id_panitia" value="<?= $user['id']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="nama_panitia">Nama Panitia</label>
                                                <input type="text" class="form-control" id="nama_panitia" name="nama_panitia" value="<?= $user['nama']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="role_panitia">Level Akun</label>
                                                <input type="number" class="form-control" id="role_panitia" name="role_panitia" value="<?= $user['role_id']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="id">id</label>
                                                <input type="text" class="form-control" id="id" name="id" value="<?= $edit['id']; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="s_magang">Status Magang</label>
                                                <input type="text" class="form-control" id="s_magang" name="s_magang" value="2" readonly>
                                                </div>
                                            </div>
                                            <div>
                                              <div class="card-footer">
                                                <a type="button" href="<?php echo base_url('superadmin/pendaftaran_peserta') ?>" class="btn btn-block btn-danger">Kembali</a>
                                                <button type="submit" class="btn btn-block btn-primary">Simpan</button>
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