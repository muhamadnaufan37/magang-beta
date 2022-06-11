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
                        </ol>
                    </div>
                </div>
                <?php if ($user['s_magang'] == '2') { ?>   
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      Yeay, Selamat! <strong>Data kamu berhasil diverifikasi oleh team, silahkan ikuti proseduer selanjutnya ya!</strong>.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <?php } ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h4 style="text-align: center;"><?php echo $page_title ?></h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php foreach($peserta1 as $peserta){ ?>
                                    <table id="example4" class="table table-striped table-bordered table-responsive-sm bg-light shadow" style="min-width: 845px">
                                        <tr align="center" bgcolor="yellow">
                                            <td width="174">DATA DIRI</td>
                                            <td width="353">KETERANGAN</td>
                                            <td width="232">QRCODE PENDAFTARAN</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Bidang</td>
                                            <td><?= $peserta['kode_bidang']; ?></td>
                                            <td rowspan="15" align="center"><img class="shadow" src="<?php echo site_url('mahasiswa/qrcode/') . $peserta['id_peserta'] .'-'. $peserta['kode_bidang'] .'-'. $peserta['nip'] .'-'. $peserta['nim'] .'-'. $peserta['nik'] .'-'. $peserta['golongan'] .'-'. $peserta['s_peserta']; ?>" width="300" height="300"></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Bidang</td>
                                            <td><?= $peserta['nama_bidang']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Induk Pegawai</td>
                                            <td><?= $peserta['nik']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Ketua Bidang</td>
                                            <td><?= $peserta['nama_ketua']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td><?= $peserta['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?= $peserta['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Contact</td>
                                            <td><?= $peserta['telepon']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kampus</td>
                                            <td><?= $peserta['kampus']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jurusan</td>
                                            <td><?= $peserta['p_studi']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Induk Mahasiswa (NIM)</td>
                                            <td><?= $peserta['nim']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Keperluan</td>
                                            <td><?= $peserta['keperluan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Surat Rekomendasi Kampus</td>
                                            <?php foreach($user_file as $file){ ?>
                                            <td class="project-actions text-right">
                                              <a class="badge light badge-dark badge-md" type="button" value="Lihat Detail" target="_blank" href="<?php echo base_url('assets/file_upload/doc_rekomendasi_kampus/') . $file['doc_rek_kampus']; ?>" style="width: 100%">
                                                  Lihat Detail
                                              </a>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kehadiran</td>
                                            <td>
                                                <?php if ($peserta['golongan'] == '1') { ?>
                                                    <div type="button" class="badge light badge-secondary badge-md" style="width: 100%">Golongan A</div>
                                                <?php } ?>
                                                <?php if ($peserta['golongan'] == '2') { ?>
                                                    <div type="button" class="badge light badge-warning badge-md" style="width: 100%">Golongan B</div>
                                                <?php } ?>
                                                <?php if ($peserta['golongan'] == '3') { ?>
                                                    <div type="button" class="badge light badge-success badge-md" style="width: 100%">Golongan C</div>
                                                <?php } ?>
                                                <?php if ($peserta['golongan'] == '4') { ?>
                                                    <div type="button" class="badge light badge-danger badge-md" style="width: 100%">Golongan D</div>
                                                <?php } ?>
                                                <?php if ($peserta['golongan'] == '5') { ?>
                                                    <div type="button" class="badge light badge-info badge-md" style="width: 100%">Golongan E</div>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status Pendaftaran</td>
                                            <td>
                                                <?php if ($peserta['s_peserta'] == '0') { ?>
                                                    <div type="button" class="badge light badge-secondary badge-md" style="width: 100%">Dalam Antrian</div>
                                                <?php } ?>
                                                <?php if ($peserta['s_peserta'] == '1') { ?>
                                                    <div type="button" class="badge light badge-danger badge-md" style="width: 100%">Ditolak</div>
                                                <?php } ?>
                                                <?php if ($peserta['s_peserta'] == '2') { ?>
                                                    <div type="button" class="badge light badge-success badge-md" style="width: 100%">Diterima</div>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status Magang</td>
                                            <td>
                                                <?php if ($user['s_magang'] == '0') { ?>
                                                    <div type="button" class="badge light badge-secondary badge-md shadow" style="width: 100%">Belum Mendaftar</div>
                                                <?php } ?>
                                                <?php if ($user['s_magang'] == '1') { ?>
                                                    <div type="button" class="badge light badge-info badge-md shadow" style="width: 100%">Sudah Daftar</div>
                                                <?php } ?>
                                                <?php if ($user['s_magang'] == '2') { ?>
                                                    <div type="button" class="badge light badge-warning badge-md shadow" style="width: 100%">Progres</div>
                                                <?php } ?>
                                                <?php if ($user['s_magang'] == '3') { ?>
                                                    <div type="button" class="badge light badge-success badge-md shadow" style="width: 100%">Selesai</div>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    </table>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>