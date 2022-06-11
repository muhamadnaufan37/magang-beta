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
                 <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">
                                <h4 class="card-title">Table <?php echo $page_title ?></h4> 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="display table dataTable table-striped table-bordered text-center" >
                                        <thead>
                                            <tr>
                                                <th width="1%">No</th>
                                                <th>Kode Bidang</th>
                                                <th>Nama Bidang</th>
                                                <th>Perguran Tinggi</th>
                                                <th>Nama Peserta</th>
                                                <th>Email Peserta</th>
                                                <th>Keperluan</th>
                                                <th>Golongan</th>
                                                <th>Status Peserta</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($allpeserta1 as $peserta){ ?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?= $peserta['kode_bidang']; ?></td>
                                                <td><?= $peserta['nama_bidang']; ?></td>
                                                <td><?= $peserta['kampus']; ?></td>
                                                <td><?= $peserta['nama']; ?></td>
                                                <td><?= $peserta['email']; ?></td>
                                                <td><?= $peserta['keperluan']; ?></td>
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
                                                <td>
                                                    <a class="btn btn-block btn-success btn-sm" href="<?php echo base_url('superadmin/edit_peserta/?id_peserta='.$peserta['id_peserta'])?>">
                                                    <span class="fa fa-wrench"></span></a>
                                                </td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th width="1%">No</th>
                                                <th>Kode Bidang</th>
                                                <th>Nama Bidang</th>
                                                <th>Perguran Tinggi</th>
                                                <th>Nama Peserta</th>
                                                <th>Email Peserta</th>
                                                <th>Keperluan</th>
                                                <th>Golongan</th>
                                                <th>Status Peserta</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div> 

                    </div>                  
                </div>               
                <!-- END: Card DATA-->
            </div>
        </main>