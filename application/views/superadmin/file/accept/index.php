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
                                                <th>Nama Peserta</th>
                                                <th>Keperluan</th>
                                                <th>Perguran Tinggi</th>
                                                <th>Jurusan</th>
                                                <th>Dokumen</th>
                                                <th>Status Dokumen</th>
                                                <th>Status Surat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($admin_file2 as $file){ ?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?= $file['nama']; ?></td>
                                                <td><?= $file['keperluan']; ?></td>
                                                <td><?= $file['kampus']; ?></td>
                                                <td><?= $file['p_studi']; ?></td>
                                                <td class="project-actions text-right">
                                                  <a class="badge light badge-dark badge-md" type="button" value="Lihat Detail" target="_blank" href="<?php echo base_url('assets/file_upload/doc_rekomendasi_kampus/') . $file['doc_rek_kampus']; ?>" style="width: 100%">
                                                      Lihat Detail
                                                  </a>
                                                </td>
                                                <td>
                                                    <?php if ($file['status_doc'] == '0') { ?>
                                                        <div type="button" class="badge light badge-secondary badge-md" style="width: 100%">Dalam Antrian</div>
                                                    <?php } ?>
                                                    <?php if ($file['status_doc'] == '1') { ?>
                                                        <div type="button" class="badge light badge-warning badge-md" style="width: 100%">Sedang Diproses</div>
                                                    <?php } ?>
                                                    <?php if ($file['status_doc'] == '2') { ?>
                                                        <div type="button" class="badge light badge-success badge-md" style="width: 100%">Surat Telah Divalidasi</div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if ($file['status_surat'] == '0') { ?>
                                                        <div type="button" class="badge light badge-secondary badge-md" style="width: 100%">Data Belum Dirubah</div>
                                                    <?php } ?>
                                                    <?php if ($file['status_surat'] == '1') { ?>
                                                        <div type="button" class="badge light badge-warning badge-md" style="width: 100%">Data Ditolak</div>
                                                    <?php } ?>
                                                    <?php if ($file['status_surat'] == '2') { ?>
                                                        <div type="button" class="badge light badge-success badge-md" style="width: 100%">Data Diterima</div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-block btn-success btn-sm" href="<?php echo base_url('superadmin/edit_pending/?id_surat='.$file['id_surat'])?>">
                                                    <span class="fa fa-wrench">
                                                </td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th width="1%">No</th>
                                                <th>Keperluan</th>
                                                <th>Perguran Tinggi</th>
                                                <th>Jurusan</th>
                                                <th>Nama Peserta</th>
                                                <th>Dokumen</th>
                                                <th>Status Dokumen</th>
                                                <th>Status Surat</th>
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