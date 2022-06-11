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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tiket</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display table-bordered" style="min-width: 845px">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No Tiket</th>
                                                <th>Perihal</th>
                                                <th>Tanggal Dibuat</th>
                                                <th>Status</th>
                                                <th>Lampiran</th>
                                                <!-- <th>Lihat Detail</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($user_tiket1 as $tiket){ ?>
                                                <tr class="text-center">
                                                    <td><?=$no++?></td>
                                                    <td><?= $tiket['perihal']; ?></td>
                                                    <td><?= $tiket['date_created']; ?></td>
                                                    <td>
                                                        <?php if ($tiket['status'] == 'Terkirim') { ?>
                                                            <div type="button" class="badge light badge-success badge-md" style="width: 100%">Terkirim</div>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="project-actions text-right">
                                                      <a class="badge light badge-dark badge-sm" type="button" value="Lihat Detail" data-toggle="modal" data-target="#exampleModal" style="width: 100%"
                                                       onclick="" id="<?= $tiket['id_tiket']; ?>" >
                                                          Lihat Detail
                                                      </a>
                                                  </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Detail Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-striped table-bordered table-responsive">
                                                        <tbody>
                                                            <tr>
                                                                <td>Nama Pengirim</td>
                                                                <td><?= $tiket['nama']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email Pengirim</td>
                                                                <td><?= $tiket['email']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Perihal</td>
                                                                <td><?= $tiket['perihal']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Dari Bidang</td>
                                                                <td><?= $tiket['bidang']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Deskripsi</td>
                                                                <td><?= $tiket['deskripsi']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal Dibuat</td>
                                                                <td><?= $tiket['date_created']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lampiran Pengirim</td>
                                                                <td><img src="../assets/file_upload/tiket/<?=$tiket['lampiran1'] ?>"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>