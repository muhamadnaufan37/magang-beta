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
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">
                                <a style="float: right;" href="<?php echo base_url('superadmin/add_pages') ?>" class="btn btn-sm btn-success">Tambah data</a>   
                                <h4 class="card-title">Table <?php echo $page_title ?></h4> 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="display table dataTable table-striped table-bordered editable-table text-center">
                                        <thead>
                                            <tr>
                                              <th width="1%">No</th>
                                              <th>Title</th>
                                              <th>Status</th>
                                              <th>Created</th>
                                              <th>Opsi</th>
                                              <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($landing1 as $landing){ ?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?= $landing['judul']; ?></td>
                                                <td><?= $landing['deskripsi']; ?></td>
                                                <td class="text-center">
                                                      <span><?php if ($landing['is_active'] == '0') { ?>
                                                        <div class="badge badge-secondary btn-sm">Not Active</div>
                                                      <?php } ?>
                                                      <?php if ($landing['is_active'] == '1') { ?>
                                                        <div class="badge badge-success btn-sm">Active</div>
                                                      <?php } ?>
                                                    </span>
                                                  </td>
                                                <td><?= $landing['date_created']; ?></td>
                                                <td>
                                                    <!-- <a data-toggle="modal" data-target="#myModal1" class="btn btn-info btn-sm" onclick="edit(<?= $landing['id']; ?>,'<?= $landing['nama']; ?>','<?= $landing['email']; ?>','<?= $landing['v_email']; ?>','<?= $landing['telepon']; ?>','<?= $landing['role_id']; ?>','<?= $landing['is_active']; ?>','<?= $landing['jk']; ?>')"
                                                        id="<?= $landing['id']; ?>"><span class="fa fa-edit"></span></a> -->
                                                      <a onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" href="<?=base_url('superadmin/delete_page/'.$landing['id'])?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                                                </td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                              <th width="1%">No</th>
                                              <th>Title</th>
                                              <th>Status</th>
                                              <th>Created</th>
                                              <th>Opsi</th>
                                              <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>