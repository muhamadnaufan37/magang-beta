<div class="row">
    <div class="col-12 col-sm-12">        
        <div class="bg-light row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="card auth-form">
                                <div class="card-body shadow">
                                    <form method="post" action="<?php echo base_url('register/mahasiswa'); ?>" id="mahasiswa" style="margin-top: 100px" class="container">
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                          <strong>Selamat Datang</strong> Isi form dibawah ini dengan benar dan tepat.
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <h1 class="text-center"><b>Form Pendaftaran Peserta</b></h1><br>

                                        <div class="d-flex justify-content-between">
                                            <h4>Tentang</h4>
                                        </div>
                                            <div class="mb-3">
                                                <label for="keperluan" class="form-label">Keperluan</label>
                                                <select class="selectpicker form-control form-select-lg mb-3" data-live-search="true" name="keperluan" id="keperluan" required>
                                                        <option class="text-center" value="" selected="" disabled="">--- PILIH ---</option>
                                                        <option value="1">Magang</option>
                                                        <option value="2">Penelitian Skripsi</option>
                                                    </select>
                                            </div>

                                        <br>
                                        <div class="d-flex justify-content-between">
                                            <h4>Informasi Akun</h4>
                                        </div>
                                            <div class="mb-3">
                                              <label for="email" class="form-label">Email address</label>
                                              <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="name@example.com" required>
                                              <a class="text-muted">Sebelum Submit Pastikan Email yang didaftarkan Aktif</a>
                                              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="mb-3">
                                              <label for="password1" class="form-label">Password</label>
                                              <input type="password" class="form-control" id="password1" name="password1" value="<?= set_value('password1'); ?>" placeholder="Enter your password" required>
                                              <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>

                                        <br>
                                        <div class="d-flex justify-content-between">
                                            <h4>Informasi Biodata Diri</h4>
                                            <!-- <a href="#" class="h3 text-dark" style="text-decoration: none;">Kembali</a>
                                            <p class="h1 text-muted"><span id="page">1</span>/3</p> -->
                                        </div>
                                        <!-- <div id="sectionOne"> -->
                                            <div class="mb-3">
                                              <label for="nama" class="form-label">Nama Lengkap</label>
                                              <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>" placeholder="Enter your full name" required>
                                              <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="mb-3">
                                                <label for="agama" class="form-label">Agama</label>
                                                <select class="selectpicker form-control form-select-lg mb-3" data-live-search="true" id="agama" name="agama" required>
                                                        <option class="text-center" value="" selected="" disabled="">--- PILIH ---</option>
                                                        <option value="1">Islam</option>
                                                        <option value="2">Protestan</option>
                                                        <option value="3">Katolik</option>
                                                        <option value="4">Hindu</option>
                                                        <option value="5">Buddha</option>
                                                        <option value="6">Khonghucu</option>
                                                    </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="jk" class="form-label">Jenis Kelamin</label>
                                                <select class="selectpicker form-control form-select-lg mb-3" data-live-search="true" id="jk" name="jk" required>
                                                <option class="text-center" value="" selected="" disabled="">--- PILIH ---</option>
                                                      <option value="1">Laki - Laki</option>
                                                      <option value="0">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                              <label for="telepon" class="form-label">Mobile Number</label>
                                              <input type="number" class="form-control" id="telepon" name="telepon" value="<?= set_value('telepon'); ?>" placeholder="Enter your number" required>
                                              <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="mb-3">
                                              <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= set_value('tempat_lahir'); ?>" placeholder="Enter your full name" required>
                                              <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="mb-3">
                                              <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                              <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" placeholder="Enter your full name" required>
                                              <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>

                                        <br>
                                        <div class="d-flex justify-content-between">
                                            <h4>Informasi Umum</h4>
                                        </div>
                                        <!-- <div id="sectionTwo" style="display: none;"> -->
                                            <div class="mb-3">
                                                <label for="kampus" class="form-label">Perguruan Tinggi Asal</label>
                                                <select class="selectpicker form-control form-select-lg mb-3" data-live-search="true" id="kampus" name="kampus" required>
                                                <option class="text-center" value="" selected="" disabled="">--- PILIH PERGURUAN TINGGI ---</option>
                                                    <?php foreach($pt1 as $pt){ ?>
                                                      <option value="<?= $pt['nama_pt']; ?>"><?= $pt['nama_pt']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="jenjang" class="form-label">Jenjang</label>
                                                <select class="selectpicker form-control form-select-lg mb-3" data-live-search="true" id="jenjang" name="jenjang" required>
                                                <option class="text-center" value="" selected="" disabled="">--- PILIH JENJANG ---</option>
                                                      <option value="D3">D3</option>
                                                      <option value="D4">D4</option>
                                                      <option value="S1">S1</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                              <label for="p_studi" class="form-label">Program Studi</label>
                                              <input type="text" class="form-control" id="p_studi" name="p_studi" value="<?= set_value('p_studi'); ?>" placeholder="Enter your studi" required>
                                              <?= form_error('p_studi', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="mb-3">
                                              <label for="nim" class="form-label">Nomor Induk Mahasiswa (NIM)</label>
                                              <input type="text" class="form-control" id="nim" name="nim" value="<?= set_value('nim'); ?>" placeholder="Enter your nim" required>
                                              <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="mb-3">
                                              <label for="nik" class="form-label">Nomor Induk Kependudukan (NIK)</label>
                                              <input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik'); ?>" placeholder="Enter your nik" required>
                                              <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="mb-3">
                                              <label for="asal_sklh" class="form-label">Asal SMA/SMK</label>
                                              <input type="text" class="form-control" id="asal_sklh" name="asal_sklh" value="<?= set_value('asal_sklh'); ?>" placeholder="Enter your school" required>
                                              <?= form_error('asal_sklh', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        <!-- </div> -->

                                        <br>
                                        <div class="d-flex justify-content-between">
                                            <h4>Informasi Domisili</h4>
                                        </div>
                                        <!-- <div id="sectionthree" style="display: none;"> -->
                                            <div class="mb-3">
                                                <label for="provinsi" class="form-label">Provinsi</label>
                                                <select name="provinsi" class="selectpicker form-control" data-live-search="true" id="provinsi" required>
                                                   <option value="" selected="" disabled="">- Select Provinsi -</option>
                                                   <?php foreach($provinsi as $prov){
                                                    echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
                                                   } ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kabupaten" class="form-label">kabupaten</label>
                                                <select name="kabupaten" class="form-control" id="kabupaten" required>
                                                   <option value="" selected="" disabled="">- Select Kabupaten -</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                                <select name="kecamatan" class="form-control" id="kecamatan" required>
                                                   <option value="" selected="" disabled="">- Select Kecamatan -</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="desa" class="form-label">desa</label>
                                                <select name="desa" class="form-control" id="desa" required>
                                                    <option value="" selected="" disabled="">- Select Desa -</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                              <label for="kode_pos" class="form-label">Kode Pos</label>
                                              <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?= set_value('kode_pos'); ?>" placeholder="Enter your code address" required>
                                              <?= form_error('kode_pos', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="mb-3">
                                              <label for="alamat" class="form-label">Alamat</label>
                                              <textarea type="text" class="form-control" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>" placeholder="Enter your address" required></textarea>
                                              <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        <!-- </div> -->

                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                                          <label class="form-check-label" for="flexCheckChecked">
                                            Dengan ini saya menyetujui <a type="button" data-bs-toggle="modal" data-bs-target="#term"><font color="blue">Ketentuan Pengguna</font></a> dan <a type="button" data-bs-toggle="modal" data-bs-target="#privacy"><font color="blue">Kebijakan Privasi</font></a> dari DISKOMINFO
                                          </label>
                                        </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="term" tabindex="-1" aria-labelledby="termLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="termLabel">Syarat dan Ketentuan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum placeat quis incidunt suscipit et fuga iste
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal fade" id="privacy" tabindex="-1" aria-labelledby="privacyLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="privacyLabel">Kebijakan Privacy</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum placeat quis incidunt suscipit et fuga iste
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                        <!-- <div class="d-grid"><a class="btn btn-primary btn-lg mt-3 mb-3" name="1" id="next" >Selanjutnya</a></div> -->
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-lg mt-3 mb-3" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>