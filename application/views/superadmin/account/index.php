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

                <div class="row row-eq-height">
                    <div class="col-12 col-lg-2 mt-3 todo-menu-bar flip-menu pr-lg-0">
                        <a href="#" class="d-inline-block d-lg-none mt-1 flip-menu-close"><i class="icon-close"></i></a>
                        <div class="card border h-100 contact-menu-section">
                            <div class="card-header d-flex justify-content-between align-items-center"> 

                                <a href="#"  class="bg-primary py-2 px-2 rounded ml-auto text-white w-100 text-center" data-toggle="modal" data-target="#newcontact">
                                    <i class="icon-plus align-middle text-white"></i> <span class="d-none d-xl-inline-block">Add New Contact</span>
                                </a>
                                <!-- Add Contact -->
                                <div class="modal fade" id="newcontact">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    <i class="icon-pencil"></i> Add Contact
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i class="icon-close"></i>
                                                </button>
                                            </div>
                                            <form class="add-contact-form">
                                                <div class="modal-body">                                               

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="contact-name">
                                                                <label for="contact-name" class="col-form-label">Name</label>
                                                                <input type="text" id="contact-name" class="form-control" required="" >                                                                           
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="contact-email">
                                                                <label for="contact-email" class="col-form-label">Email</label>
                                                                <input type="text" id="contact-email" class="form-control" required="">                                                                          
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="contact-occupation">
                                                                <label for="contact-occupation" class="col-form-label">Occupation</label>
                                                                <input type="text" id="contact-occupation" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="contact-phone">
                                                                <label for="contact-phone" class="col-form-label">Phone</label>
                                                                <input type="text" id="contact-phone" class="form-control">                                                                           
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="contact-location">
                                                                <label for="contact-location" class="col-form-label">Location</label>
                                                                <input type="text" id="contact-location" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary add-todo">Add Contact</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit Contact -->
                                <div class="modal fade" id="editcontact">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    <i class="icon-pencil"></i> Edit Contact
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i class="icon-close"></i>
                                                </button>
                                            </div>
                                            <form class="edit-contact-form">
                                                <div class="modal-body">                                               

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="contact-name">
                                                                <label for="edit-contact-name" class="col-form-label">Name</label>
                                                                <input type="text" id="edit-contact-name" class="form-control" required="" >                                                                           
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="contact-email">
                                                                <label for="edit-contact-email" class="col-form-label">Email</label>
                                                                <input type="text" id="edit-contact-email" class="form-control" required="">                                                                          
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="contact-occupation">
                                                                <label for="edit-contact-occupation" class="col-form-label">Occupation</label>
                                                                <input type="text" id="edit-contact-occupation" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="contact-phone">
                                                                <label for="edit-contact-phone" class="col-form-label">Phone</label>
                                                                <input type="text" id="edit-contact-phone" class="form-control">                                                                           
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="contact-location">
                                                                <label for="edit-contact-location" class="col-form-label">Location</label>
                                                                <input type="text" id="edit-contact-location" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden"  id="edit-date">
                                                    <button type="submit" class="btn btn-primary add-todo">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <ul class="nav flex-column contact-menu">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" data-contacttype="contact">
                                        <i class="icon-list"></i> All
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-contacttype="family-contact">
                                        <i class="icon-people"></i> Family
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-contacttype="friend-contact">
                                        <i class="icon-user-follow"></i> Friends
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  href="#" data-contacttype="office-contact">
                                        <i class="icon-check"></i> Office
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  href="#" data-contacttype="business-contact">
                                        <i class="icon-layers"></i> Business
                                    </a>
                                </li>

                            </ul>         

                        </div>  
                    </div>
                    <div class="col-12 col-lg-10 mt-3 pl-lg-0">
                        <div class="card border h-100 contact-list-section">
                            <div class="card-header border-bottom p-1 d-flex">
                                <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i class="icon-menu"></i></a>
                                <input type="text" class="form-control border-0 p-2 w-100 h-100 contact-search" placeholder="Search ...">
                                <a href="#" class="list-style search-bar-menu border-0 active"><i class="icon-list"></i></a>
                                <a href="#" class="grid-style search-bar-menu"><i class="icon-grid"></i></a>
                            </div>
                            <div class="card-body p-0">
                            <?php $no=1; foreach($alluser1 as $user){ ?> 
                                <div class="contacts list">
                                    <div class="contact family-contact">
                                        <div class="contact-content">
                                            <div class="contact-profile">                                                   
                                                <img src="<?php echo base_url('assets/images/profile/') . $user['image']; ?>" alt="avatar" class="user-image img-fluid">
                                                <div class="contact-info">
                                                    <p class="contact-name mb-0"><?= $user['nama']; ?></p>
                                                    <p class="contact-position mb-0 small font-weight-bold text-muted">
                                                        <?php if ($user['role_id'] == '1') { ?>
                                                            <div class="badge badge-danger btn-sm">Administrator</i></div>
                                                          <?php } ?>
                                                      <?php if ($user['role_id'] == '2') { ?>
                                                            <div class="badge badge-danger btn-sm">Adminkab</div>
                                                          <?php } ?>
                                                      <?php if ($user['role_id'] == '3') { ?>
                                                            <div class="badge badge-success btn-sm">Kabid</div>
                                                          <?php } ?>
                                                      <?php if ($user['role_id'] == '4') { ?>
                                                            <div class="badge badge-success btn-sm">Kasi</div>
                                                          <?php } ?>
                                                      <?php if ($user['role_id'] == '5') { ?>
                                                            <div class="badge badge-secondary btn-sm">Mahasiswa</div>
                                                          <?php } ?>
                                                      <?php if ($user['role_id'] == '6') { ?>
                                                            <div class="badge badge-secondary btn-sm">Siswa</div>
                                                          <?php } ?>
                                                      <?php if ($user['role_id'] == '7') { ?>
                                                            <div class="badge badge-secondary btn-sm">Pembimbing</div>
                                                          <?php } ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="contact-email">
                                                <p class="mb-0 small">Email: </p>
                                                <p class="user-email"><?= $user['email']; ?></p>
                                            </div>
                                            <div class="contact-location">
                                                <p class="mb-0 small">Location: </p>
                                                <p class="user-location">-</p>
                                            </div>
                                            <div class="contact-phone">
                                                <p class="mb-0 small">Phone: </p>
                                                <p class="user-phone"><?= $user['telepon']; ?></p>
                                            </div>
                                            <div class="line-h-1 h5">
                                                <a class="text-success edit-contact" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">                               
                                <h4 class="card-title text-center">Table <?php echo $page_title ?> Peserta</h4> 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="display table dataTable table-striped table-bordered editable-table text-center">
                                        <thead>
                                            <tr>
                                              <th width="1%">No</th>
                                              <th>Nama Lengkap</th>
                                              <th>Telepon</th>
                                              <th>Role Akun</th>
                                              <th>Status Akun</th>
                                              <th>last Online</th>
                                              <th>Image</th>
                                              <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($siswa3 as $user){ ?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?= $user['nama']; ?></td>
                                                <td><?= $user['telepon']; ?></td>
                                                <td class="text-center">
                                                      <span><?php if ($user['role_id'] == '5') { ?>
                                                        <div class="badge badge-secondary btn-sm">Mahasiswa</div>
                                                      <?php } ?> 
                                                </span>
                                                      <span><?php if ($user['role_id'] == '6') { ?>
                                                        <div class="badge badge-secondary btn-sm">Siswa</div>
                                                      <?php } ?> 
                                                </span>
                                                  </td>
                                                <td class="text-center">
                                                      <span><?php if ($user['is_active'] == '0') { ?>
                                                        <div class="badge badge-secondary btn-sm">Not Actived</div>
                                                      <?php } ?>
                                                  <?php if ($user['is_active'] == '1') { ?>
                                                        <div class="badge badge-info btn-sm">Active</div>
                                                      <?php } ?> 
                                                </span>
                                                  </td>
                                                <td><?= $user['online']; ?></td>
                                                <th><img src="../assets/images/profile/<?=$user['image'] ?>" width="45" height="45"></th>
                                                <td>
                                                    <a class="btn btn-info btn-sm" ><span class="fa fa-edit"></span></a>
                                                      <a onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" href="<?=base_url('admin/account_delete/'.$user['id'])?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                                                </td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                              <th width="1%">No</th>
                                              <th>Nama Lengkap</th>
                                              <th>Telepon</th>
                                              <th>Role Akun</th>
                                              <th>Status Akun</th>
                                              <th>last Online</th>
                                              <th>Image</th>
                                              <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">
                                <!-- <a style="float: right;" data-toggle="modal" data-target="#myModal1" class="btn btn-sm btn-success">Tambah data</a> -->                               
                                <h4 class="card-title">Table <?php echo $page_title ?> Super Admin</h4> 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="display table dataTable table-striped table-bordered editable-table text-center">
                                        <thead>
                                            <tr>
                                              <th width="1%">No</th>
                                              <th>Nama Lengkap</th>
                                              <th>Telepon</th>
                                              <th>Role Akun</th>
                                              <th>Status Akun</th>
                                              <th>last Online</th>
                                              <th>Image</th>
                                              <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($superadmin1 as $user){ ?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?= $user['nama']; ?></td>
                                                <td><?= $user['telepon']; ?></td>
                                                <td class="text-center">
                                                      <span><?php if ($user['role_id'] == '1') { ?>
                                                        <div class="badge badge-danger btn-sm">Administrator</div>
                                                      <?php } ?>
                                                </span>
                                                  </td>
                                                <td class="text-center">
                                                      <span><?php if ($user['is_active'] == '0') { ?>
                                                        <div class="badge badge-secondary btn-sm">Not Actived</div>
                                                      <?php } ?>
                                                  <?php if ($user['is_active'] == '1') { ?>
                                                        <div class="badge badge-info btn-sm">Active</div>
                                                      <?php } ?> 
                                                </span>
                                                  </td>
                                                <td><?= $user['online']; ?></td>
                                                <th><img src="../assets/images/profile/<?=$user['image'] ?>" width="45" height="45"></th>
                                                <td>
                                                    <a data-toggle="modal" data-target="#myModal1" class="btn btn-info btn-sm" onclick="edit(<?= $user['id']; ?>,'<?= $user['nama']; ?>','<?= $user['email']; ?>','<?= $user['v_email']; ?>','<?= $user['telepon']; ?>','<?= $user['role_id']; ?>','<?= $user['is_active']; ?>','<?= $user['jk']; ?>')"
                                                        id="<?= $user['id']; ?>"><span class="fa fa-edit"></span></a>
                                                      <a onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" href="<?=base_url('admin/account_delete/'.$user['id'])?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                                                </td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                              <th width="1%">No</th>
                                              <th>Nama Lengkap</th>
                                              <th>Telepon</th>
                                              <th>Role Akun</th>
                                              <th>Status Akun</th>
                                              <th>last Online</th>
                                              <th>Image</th>
                                              <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">
                                <!-- <a style="float: right;" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success">Tambah data</a> -->
                                <button style="float: right;" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tambah Data</button>
                                    <div class="dropdown-menu p-0">
                                        <a class="dropdown-item" href="<?php echo base_url('superadmin/add_account_1'); ?>">Superadmin</a>
                                        <a class="dropdown-item" href="<?php echo base_url('superadmin/add_account_2'); ?>">Petugas</a>
                                        <a class="dropdown-item" href="<?php echo base_url('superadmin/add_account_3'); ?>">Ketua Bidang</a>
                                        <a class="dropdown-item" href="<?php echo base_url('superadmin/add_account_4'); ?>">Kasi</a>
                                        <a class="dropdown-item" href="<?php echo base_url('superadmin/add_account_'); ?>7">Pembimbing</a>
                                    </div>                               
                                <h4 class="card-title">Table <?php echo $page_title ?> Admin Kab</h4> 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display table dataTable table-striped table-bordered editable-table text-center">
                                        <thead>
                                            <tr>
                                              <th width="1%">No</th>
                                              <th>Nama Lengkap</th>
                                              <th>Telepon</th>
                                              <th>Role Akun</th>
                                              <th>Status Akun</th>
                                              <th>last Online</th>
                                              <th>Image</th>
                                              <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($admin1 as $user){ ?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?= $user['nama']; ?></td>
                                                <td><?= $user['telepon']; ?></td>
                                                <td class="text-center">
                                                      <span><?php if ($user['role_id'] == '2') { ?>
                                                        <div class="badge badge-danger btn-sm">Adminkab</div>
                                                      <?php } ?> 
                                                </span>
                                                  </td>
                                                <td class="text-center">
                                                      <span><?php if ($user['is_active'] == '0') { ?>
                                                        <div class="badge badge-secondary btn-sm">Not Actived</div>
                                                      <?php } ?>
                                                  <?php if ($user['is_active'] == '1') { ?>
                                                        <div class="badge badge-info btn-sm">Active</div>
                                                      <?php } ?> 
                                                </span>
                                                  </td>
                                                <td><?= $user['online']; ?></td>
                                                <th><img src="../assets/images/profile/<?=$user['image'] ?>" width="45" height="45"></th>
                                                <td>
                                                    <a class="btn btn-info btn-sm" ><span class="fa fa-edit"></span></a>
                                                      <a onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" href="<?=base_url('admin/account_delete/'.$user['id'])?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                                                </td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                              <th width="1%">No</th>
                                              <th>Nama Lengkap</th>
                                              <th>Telepon</th>
                                              <th>Role Akun</th>
                                              <th>Status Akun</th>
                                              <th>last Online</th>
                                              <th>Image</th>
                                              <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Card DATA-->

                                <!-- modal add account -->
                                <!-- <div class="modal fade" id="myModal">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    <i class="icon-pencil"></i> Tambbah User
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i class="icon-close"></i>
                                                </button>
                                            </div>
                                            <form method="post" action="<?php echo base_url('admin/account'); ?>">
                                                <div class="modal-body">
                                                    <div class="form-group" hidden>
                                                        <label>Id</label>
                                                        <input type="id" name="id" id="id" class="form-control" readonly>
                                                      </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" name="email" id="email" class="form-control">
                                                      </div>
                                                    <div class="form-group">
                                                        <label for="dinas">Dinas / Lembaga</label>
                                                        <select class="form-control" id="dinas" name="dinas">
                                                            <option value="" selected="" disabled="">--- PILIH DINAS ---</option>
                                                            <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                                                            <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                                                            <option value="Dinas Pekerjaan Umum Bina Marga dan Pengairan">Dinas Pekerjaan Umum Bina Marga dan Pengairan</option>
                                                            <option value="Dinas Kepemudaan Olahraga Parawisata dan Kebudayaan">Dinas Kepemudaan Olahraga Parawisata dan Kebudayaan</option>
                                                            <option value="Dinas Tata Ruang dan Pemukiman">Dinas Tata Ruang dan Pemukiman</option>
                                                            <option value="Dinas Pemberdayaan Masyarakat Desa">Dinas Pemberdayaan Masyarakat Desa</option>
                                                            <option value="Dinas Pangan dan Pertanian">Dinas Pangan dan Pertanian</option>
                                                            <option value="Badan Pendapatan Daerah">Badan Pendapatan Daerah</option>
                                                            <option value="Dinas Perikanan dan Peternakan">Dinas Perikanan dan Peternakan</option>
                                                            <option value="Dinas Tenaga Kerja, Sosial dan Transmigrasi">Dinas Tenaga Kerja, Sosial dan Transmigrasi</option>
                                                            <option value="Dinas Koperasi, Usaha Mikro, Kecil, Menengah, Perindustrian dan Perdagangan">Dinas Koperasi, Usaha Mikro, Kecil, Menengah, Perindustrian dan Perdagangan</option>
                                                            <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                                                            <option value="Dinas Kependudukan dan Pencatatan Sipil">Dinas Kependudukan dan Pencatatan Sipil</option>
                                                            <option value="Badan Keuangan dan Asset Daerah">Badan Keuangan dan Asset Daerah</option>
                                                            <option value="Kantor Kesatuan Bangsa dan Politik">Kantor Kesatuan Bangsa dan Politik</option>
                                                            <option value="Dinas Sosial, Pemberdayaan Perempuan dan Perlindungan Anak">Dinas Sosial, Pemberdayaan Perempuan dan Perlindungan Anak</option>
                                                            <option value="Inspektorat">Inspektorat</option>
                                                            <option value="Dinas Penanaman Modal dan Pelayanan Terpadu Satu pintu">Dinas Penanaman Modal dan Pelayanan Terpadu Satu pintu</option>
                                                            <option value="Badan Perencanaan Pembangunan Daerah">Badan Perencanaan Pembangunan Daerah</option>
                                                            <option value="Badan Kepegawaian dan Pengembangan Sumber Daya Manusia">Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</option>
                                                            <option value="Dinas Pengendalian Penduduk dan Keluarga Berencana">Dinas Pengendalian Penduduk dan Keluarga Berencana</option>
                                                            <option value="Dinas Lingkungan Hidup">Dinas Lingkungan Hidup</option>
                                                            <option value="Dinas Komunikasi dan Informatika">Dinas Komunikasi dan Informatika</option>
                                                            <option value="Dinas Kearsipan dan Perpustakaan/Bale Panyawangan">Dinas Kearsipan dan Perpustakaan/Bale Panyawangan</option>
                                                            <option value="Dinas Kearsipan dan Perpustakaan">Dinas Kearsipan dan Perpustakaan</option>
                                                            <option value="Rumah Sakit Umum Bayu Asih (BLUD)">Rumah Sakit Umum Bayu Asih (BLUD)</option>
                                                            <option value="Satuan Polisi – Pamong Praja">Satuan Polisi – Pamong Praja</option>
                                                          </select>
                                                      </div>
                                                    <div class="form-group">
                                                        <label>Contact</label>
                                                        <input type="number" name="telepon" id="telepon" class="form-control">
                                                      </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" name="password" id="password" value="123456" class="form-control" readonly>
                                                      </div>
                                                    <div class="form-group">
                                                        <label>User ID</label>
                                                        <input type="text" name="user_id" id="user_id" class="form-control" value="<?= $user['id']; ?>" readonly>
                                                      </div>
                                                      
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button onclick="return confirm('apakah anda yakin ingin menyimpan data ini?')" type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- end modal -->

                                <!-- modal edit account -->
                                <div class="modal fade" id="myModal1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    <i class="icon-pencil"></i> Tambbah User
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i class="icon-close"></i>
                                                </button>
                                            </div>
                                            <form method="post" action="<?php echo base_url('superadmin/update_account?id='.$user['id']); ?>">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="id">id <font color="red">(*)</font></label>
                                                        <input type="text" class="form-control" id="id" name="id" value="<?= $user['id']; ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Nama Lengkap <font color="red">(*)</font></label>
                                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                                                      </div>
                                                    <div class="form-group">
                                                        <label for="email">Email <font color="red">(*)</font></label>
                                                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                                                      </div>
                                                    <div class="form-group">
                                                        <label for="v_email">Status Email</label>
                                                        <select class="form-control" id="v_email" name="v_email" disabled>
                                                        <option value="" selected="" disabled="">--- PILIH ROLE---</option>
                                                        <option <?php if ($user['v_email'] == "0") {echo 'selected'; }?> value="0">Email Belum Diverifikasi</option>
                                                        <option <?php if ($user['v_email'] == "1") {echo 'selected'; }?> value="1">Email Sudah Diverifikasi</option>
                                                          </select>
                                                      </div>
                                                    <div class="form-group">
                                                        <label for="telepon">Contact <font color="red">(*)</font></label>
                                                        <input type="number" name="telepon" id="telepon" class="form-control" value="<?= $user['telepon']; ?>">
                                                      </div>
                                                    <div class="form-group">
                                                        <label for="role_id">Level Account</label>
                                                        <select class="form-control" id="role_id" name="role_id">
                                                        <option value="" selected="" disabled="">--- PILIH ROLE---</option>
                                                        <option <?php if ($user['role_id'] == "1") {echo 'selected'; }?> value="1">Superadmin</option>
                                                    <option <?php if ($user['role_id'] == "2") {echo 'selected'; }?> value="2">Petugas</option>
                                                    <option <?php if ($user['role_id'] == "3") {echo 'selected'; }?> value="3">Ketua Bidang</option>
                                                    <option <?php if ($user['role_id'] == "4") {echo 'selected'; }?> value="4">Kasi</option>
                                                    <option <?php if ($user['role_id'] == "7") {echo 'selected'; }?> value="7">Pembimbing</option>
                                                          </select>
                                                      </div>
                                                    <div class="form-group">
                                                        <label for="is_active">Status Account</label>
                                                        <select class="form-control" id="is_active" name="is_active">
                                                        <option value="" selected="" disabled="">--- PILIH ROLE---</option>
                                                        <option <?php if ($user['is_active'] == "0") {echo 'selected'; }?> value="0">Non Active</option>
                                                        <option <?php if ($user['is_active'] == "1") {echo 'selected'; }?> value="1">Active</option>
                                                        <option <?php if ($user['is_active'] == "-1") {echo 'selected'; }?> value="-1">Blokir/Banned</option>
                                                          </select>
                                                      </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button onclick="return confirm('apakah anda yakin ingin menyimpan data ini?')" type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end edit modal -->

            </div>
        </main>
        <!-- END: Content-->
        <script>
          function edit(id, nama, email, v_email, telepon, role_id, is_active, jk){
            document.getElementById("id").value = id;
            document.getElementById("nama").value = nama;
            document.getElementById("email").value = email;
            document.getElementById("v_email").value = v_email;
            document.getElementById("telepon").value = telepon;
            document.getElementById("role_id").value = role_id;
            document.getElementById("is_active").value = is_active;
            document.getElementById("jk").value = jk;
          }
        </script>