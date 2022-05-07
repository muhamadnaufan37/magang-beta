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
                                <a style="float: right;" href="<?php echo base_url('superadmin/add_bidang') ?>" class="btn btn-sm btn-success">Tambah data</a>
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
                                                <th>Status Bidang</th>
                                                <th>Slot Bidang</th>
                                                <th>Type Bidang</th>
                                                <th>Opsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($bidang1 as $bidang){ ?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?= $bidang['kode_bidang']; ?></td>
                                                <td><?= $bidang['nama_bidang']; ?></td>
                                                <td>
                                                    <span><?php if ($bidang['s_bidang'] == '0') { ?>
                                                            <div class="col-12 badge badge-secondary btn-xs">Not Actived</div>
                                                          <?php } ?>
                                                      <?php if ($bidang['s_bidang'] == '1') { ?>
                                                            <div class="col-12 badge badge-success btn-xs">Active</div>
                                                          <?php } ?> 
                                                    </span></td>
                                                <td>
                                                    <a class="btn btn-info btn-xs" value="Lihat Detail" data-toggle="modal" data-target="#myModal" style="width: 100%"
                                                       onclick="modaljs(<?= $bidang['id']; ?>,'<?= $bidang['slot_siswa']; ?>','<?= $bidang['slot_mhs']; ?>','<?= $bidang['slot_mhs_penelitian']; ?>')"
                                                       id="<?= $bidang['id']; ?>" >
                                                          <font color="white">Lihat Detail</font>
                                                      </a>
                                                </td>
                                                <td>
                                                    <?php if ($bidang['type'] == '') { ?>
                                                        <div class="badge badge-secondary">Data Tidak Ditemukan</div>
                                                      <?php }else {
                                                        echo $bidang['type'];
                                                      } ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-block btn-success btn-sm" href="<?php echo base_url('superadmin/edit_bidang/?id='.$bidang['id'])?>">
                                                    <span class="fa fa-wrench">
                                                </td>
                                                <td>
                                                    <a onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-block btn-danger btn-sm" href="<?=base_url('superadmin/delete_bidang/'.$bidang['id'])?>">
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
                                                <th>Status Bidang</th>
                                                <th>Slot Bidang</th>
                                                <th>Type Bidang</th>
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

                <!-- modal data pribadi -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                        <i class="icon-pencil"></i> Info Slot Magang
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="icon-close"></i>
                                    </button>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <div class="form-group" hidden>
                                            <label>Id</label>
                                            <input type="id" name="id" id="id" class="form-control" readonly>
                                          </div>
                                        <div class="form-group">
                                            <label>Slot siswa</label>
                                            <input type="number" name="slot_siswa" id="slot_siswa" class="form-control" readonly>
                                          </div>
                                        <div class="form-group">
                                            <label>Slot Mahasiswa</label>
                                            <input type="number" name="slot_mhs" id="slot_mhs" class="form-control" readonly>
                                          </div>
                                        <div class="form-group">
                                            <label>Slot Mahasiswa Penelitian</label>
                                            <input type="number" name="slot_mhs_penelitian" id="slot_mhs_penelitian" class="form-control" readonly>
                                          </div>
                                          
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <!-- end modal data pribadi -->

            </div>
        </main>
        <script>
          function modaljs(id, slot_siswa, slot_mhs, slot_mhs_penelitian){
            document.getElementById("id").value = id;
            document.getElementById("slot_siswa").value = slot_siswa;
            document.getElementById("slot_mhs").value = slot_mhs;
            document.getElementById("slot_mhs_penelitian").value = slot_mhs_penelitian;
          }
        </script>