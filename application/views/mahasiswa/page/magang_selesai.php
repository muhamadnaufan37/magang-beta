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
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Selamat <b><?= $user['nama']; ?></b>!</strong> Kamu Telah Menyelesaikan Sesi Magang &#128521&#128522.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
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
                                                <th>Download Rapor Nilai</th>
                                                <th>Download Sertifikat</th>
                                                <!-- <th>Lihat Detail</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr class="text-center">
                                                    <td><?= $user['id']; ?></td>
                                                    <td><?= $user['nama']; ?></td>
                                                    <td>
                                                        <?php if ($user['s_magang'] == '3') { ?>
                                                            <div type="button" class="badge light badge-success badge-md" style="width: 100%">Selesai</div>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="project-actions text-center">
                                                        <?php if ($user['s_magang'] == '3') { ?>
                                                          <a class="btn btn-primary btn-sm" href="<?=base_url('mahasiswa/rapor_detail/?id='.$user['id'])?>">
                                                              <span class="fa fa-download">
                                                          <?php } ?>
                                                    </td>
                                                    <td class="project-actions text-center">
                                                        <?php if ($user['s_magang'] == '3') { ?>
                                                          <a class="btn btn-primary btn-sm" target="_blank" href="<?=base_url('mahasiswa/esertifikat_print/?id='.$user['id'])?>">
                                                              <span class="fa fa-download">
                                                          <?php } ?>
                                                    </td>
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