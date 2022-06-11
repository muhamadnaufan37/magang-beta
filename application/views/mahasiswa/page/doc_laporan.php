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
                <?php $no=1; foreach($user_file3 as $file3){ ?>
                    <?php if ($file3['status_doc'] == '0') { ?>   
                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                          Silahkan upload dokumen yang diperlukan <strong>sebelum mendaftar</strong>.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    <?php } ?>
                    <?php if ($file3['status_doc'] == '1') { ?>   
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                          Dokumen kamu sedang diproses <strong>tunggu kabar lebih lanjut ya dan cek secara berkala</strong>.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    <?php } ?>
                    <?php if ($file3['status_doc'] == '2') { ?>   
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          Yeay, Selamat! <strong>Dokumen kamu berhasi diverifikasi oleh team, langsung ke tahap selanjutnya ya. </strong>.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    <?php } ?>
                <?php } ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title"><i class="icon-info"> </i>INFOMATION</h3>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-warning alert-dismissible">
                                    <div class="card-body pad table-responsive">
                                        <font color="black">
                                            <li>Dokumen yang akan di upload tidak akan bisa di submit <strong>jika beberapa tahap tidak memenuhi persyaratan</strong></li>
                                            <li>Pastikan file hanya 1x kirim | <strong>Pastikan Dokumen Yang Akan Dikirim Sudah Benar Untuk Upload.</strong></li>
                                            <li>File yang dikirim harus berbentuk <strong>.PDF atau .DOCX</strong></li>
                                            <li>Ukuran File <strong>Tidak Boleh Lebih Dari 2Mb</strong></li>
                                        </font>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="<?php echo base_url('mahasiswa/doc_laporan'); ?>" enctype="multipart/form-data">
                                    <div class="form-group" hidden>
                                        <label for="id">id</label>
                                        <input type="text" id="id" name="id" value="<?= $user['id']; ?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-row" hidden>
                                        <div class="form-group col-md-12">
                                        <label for="nama">Nama Peserta</label>
                                        <input type="text" class="form-control" value="<?= $user['nama']; ?>" id="nama" name="nama" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row" hidden>
                                        <div class="form-group col-md-12">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" value="<?= $user['email']; ?>" id="email" name="email" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row" hidden>
                                        <div class="form-group col-md-12">
                                        <label for="telepon">Mobile Number</label>
                                        <input type="number" class="form-control" value="<?= $user['telepon']; ?>" id="telepon" name="telepon" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row" hidden>
                                        <div class="form-group col-md-12">
                                        <label for="kampus">Nama Kampus Peserta</label>
                                        <input type="text" class="form-control" value="<?= $user['kampus']; ?>" id="kampus" name="kampus" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row" hidden>
                                        <div class="form-group col-md-12">
                                        <label for="p_studi">Program Studi</label>
                                        <input type="text" class="form-control" value="<?= $user['p_studi']; ?>" id="p_studi" name="p_studi" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row" hidden>
                                        <div class="form-group col-md-12">
                                        <label for="nim">Nomor Induk Siswa (NIM)</label>
                                        <input type="text" class="form-control" value="<?= $user['nim']; ?>" id="nim" name="nim" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="images[]" class="form-label">Upload Dokumen Laporan</label><br>
                                            <li class="list-group-item text-center">
                                                <input class="form-control-sm" id="images[]" name="images[]" type="file" required>
                                                <?= form_error('images[]', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </li>
                                    </div>
                                    <?php if ($user['s_magang'] == '0') { ?>    
                                    <button type="button" class="btn btn-dark disabled">Submit</button>
                                    <?php } ?>
                                    <?php if ($user['s_magang'] == '1') { ?> 
                                    <button type="button" class="btn btn-dark disabled">Submit</button>
                                    <?php } ?>
                                    <?php if ($user['s_magang'] == '2') { ?> 
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <?php } ?>
                                    <?php if ($user['s_magang'] == '3') { ?> 
                                    <button type="button" class="btn btn-dark disabled">Submit</button>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $page_title ?></h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display table-bordered" style="min-width: 845px">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Nomor Peserta</th>
                                                <th>Nama Peserta</th>
                                                <th>Status Magang</th>
                                                <th>Dokumen</th>
                                                <th>Status Dokumen</th>
                                                <th>Reason</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach($user_file3 as $file3){ ?>
                                                <tr class="text-center">
                                                    <td><?= $file3['id']; ?></td>
                                                    <td><?= $file3['nama']; ?></td>
                                                    <td>
                                                        <?php if ($user['s_magang'] == '0') { ?>
                                                            <div type="button" class="badge light badge-secondary badge-md" style="width: 100%">Belum Mendaftar</div>
                                                        <?php } ?>
                                                        <?php if ($user['s_magang'] == '1') { ?>
                                                            <div type="button" class="badge light badge-info badge-md" style="width: 100%">Sudah Daftar</div>
                                                        <?php } ?>
                                                        <?php if ($user['s_magang'] == '2') { ?>
                                                            <div type="button" class="badge light badge-warning badge-md" style="width: 100%">Progres</div>
                                                        <?php } ?>
                                                        <?php if ($user['s_magang'] == '3') { ?>
                                                            <div type="button" class="badge light badge-success badge-md" style="width: 100%">Selesai</div>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="project-actions text-right">
                                                      <a class="badge light badge-dark badge-md" type="button" value="Lihat Detail" target="_blank" href="<?php echo base_url('assets/file_upload/doc_laporan/') . $file3['doc_laporan']; ?>" style="width: 100%">
                                                          Lihat Detail
                                                      </a>
                                                    </td>
                                                    <td>
                                                        <?php if ($file3['status_doc'] == '0') { ?>
                                                            <div type="button" class="badge light badge-secondary badge-md" style="width: 100%">Dalam Antrian</div>
                                                        <?php } ?>
                                                        <?php if ($file3['status_doc'] == '1') { ?>
                                                            <div type="button" class="badge light badge-warning badge-md" style="width: 100%">Sedang Diproses</div>
                                                        <?php } ?>
                                                        <?php if ($file3['status_doc'] == '2') { ?>
                                                            <div type="button" class="badge light badge-success badge-md" style="width: 100%">Surat Telah Divalidasi</div>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-muted">
                                                        <?php if ($file3['reason'] == '') { ?>
                                                        <div class="text-reset"><em>Belum ada Tanggapan</em></div>
                                                      <?php }else {
                                                        echo $file3['reason'];
                                                      } ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($file3['status_doc'] == '0') { ?>
                                                            <a onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-block btn-danger btn-sm" href="<?=base_url('mahasiswa/doc_laporan_delete/'.$file3['id_surat'])?>">
                                                                <span class="fa fa-trash"></span>
                                                            </a>
                                                         <?php } ?>
                                                        <?php if ($file3['status_doc'] == '1') { ?>
                                                            <a onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-block btn-danger btn-sm disabled" href="<?=base_url('mahasiswa/doc_laporan_delete/'.$file3['id_surat'])?>">
                                                                <span class="fa fa-trash"></span>
                                                            </a>
                                                         <?php } ?>
                                                        <?php if ($file3['status_doc'] == '2') { ?>
                                                            <a onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-block btn-danger btn-sm disabled" href="<?=base_url('mahasiswa/doc_laporan_delete/'.$file3['id_surat'])?>">
                                                                <span class="fa fa-trash"></span>
                                                            </a>
                                                         <?php } ?>
                                                    </td>
                                                    <?php } ?>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>