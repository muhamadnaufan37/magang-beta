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
                    <div class="col-12  mt-3">                          
                        <div class="card">  
                            <div class="card-header justify-content-between align-items-center">
                                <a style="float: right;" href="<?php echo base_url('superadmin/add_staff') ?>" class="btn btn-success btn-sm ">Tambah data</a>                               
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
                                                <th>Staff Bidang</th>
                                                <th>Email Staff</th>
                                                <th>Jabatan</th>
                                                <th>Opsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php $no=1; foreach($staff1 as $staff){ ?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?= $staff['kode_bidang']; ?></td>
                                                <td><?= $staff['nama_bidang']; ?></td>
                                                <td><?= $staff['nama']; ?></td>
                                                <td><?= $staff['email']; ?></td>
                                                <td><?= $staff['role_id']; ?></td>
                                                <td>
                                                    <a class="btn btn-block btn-success btn-sm" href="<?php echo base_url('superadmin/edit_bidang/?id_ketua='.$staff['id_ketua'])?>">
                                                    <span class="fa fa-wrench">
                                                </td>
                                                <td>
                                                    <a onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-block btn-danger btn-sm" href="<?=base_url('superadmin/delete_ketua/'.$staff['id_ketua'])?>">
                                                    <span class="fa fa-trash">
                                                </td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th width="1%">No</th>
                                                <th>Kode Bidang</th>
                                                <th>Nama Bidang</th>
                                                <th>Staff Bidang</th>
                                                <th>Email Staff</th>
                                                <th>Jabatan</th>
                                                <th>Opsi</th>
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
        <!-- END: Content-->