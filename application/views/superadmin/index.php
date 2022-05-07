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

                            <div class="col-12 col-lg-12  mt-3">

                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mt-3">
                                    <div class="card outline-badge-primary">
                                        <div class="card-body">
                                            <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>                                                   
                                                <span class="cf card-liner-icon cf-user mt-2">
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/pqxdilfs.json"
                                                        trigger="loop"
                                                        style="width:50px;height:50px">
                                                    </lord-icon>
                                                </span>
                                                <div class='card-liner-content'>
                                                    <h2 class="card-liner-title"><?= $jumlahpeserta; ?></h2>
                                                    <h6 class="card-liner-subtitle">Mahasiswa Lolos Seleksi</h6>                                       
                                                </div>                                
                                            </div>
                                            <span class="bg-info card-liner-absolute-icon text-white card-liner-small-tip">+<?= $jumlahpeserta; ?>%</span>           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 mt-3">
                                    <div class="card outline-badge-primary">
                                        <div class="card-body">
                                            <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                                                <span class="cf card-liner-icon cf-user mt-2">
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/ivayzoru.json"
                                                        trigger="loop"
                                                        style="width:50px;height:50px">
                                                    </lord-icon>
                                                </span>
                                                <div class='card-liner-content'>
                                                    <h2 class="card-liner-title"><font color="green"><?= $jumlahsiswa; ?></font></h2>
                                                    <h6 class="card-liner-subtitle"><font color="green">Siswa Lolos Seleksi</font></h6> 
                                                </div>                                
                                            </div>
                                            <span class="bg-success card-liner-absolute-icon text-white card-liner-small-tip">+<?= $jumlahsiswa; ?>%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 mt-3">
                                    <div class="card outline-badge-primary">
                                        <div class="card-body">
                                            <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                                                <span class="cf card-liner-icon cf-user mt-2">
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/osvvqecf.json"
                                                        trigger="loop"
                                                        style="width:50px;height:50px">
                                                    </lord-icon>
                                                </span>
                                                <div class='card-liner-content'>
                                                    <h2 class="card-liner-title"><font color="orange"><?= $jumlahsiswa; ?></font></h2>
                                                    <h6 class="card-liner-subtitle"><font color="orange">Calon Peserta Pending</font></h6> 
                                                </div>                                
                                            </div>
                                            <span class="bg-warning card-liner-absolute-icon text-white card-liner-small-tip">+<?= $jumlahsiswa; ?>%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 mt-3">
                                    <div class="card outline-badge-primary">
                                        <div class="card-body">
                                            <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                                                <span class="cf card-liner-icon cf-user mt-2">
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/exkbusmy.json"
                                                        trigger="loop"
                                                        style="width:50px;height:50px">
                                                    </lord-icon>
                                                </span>
                                                <div class='card-liner-content'>
                                                    <h2 class="card-liner-title"><font color="red"><?= $jumlahsiswa; ?></font></h2>
                                                    <h6 class="card-liner-subtitle"><font color="red">Mahasiswa: </font></h6> 
                                                    <h6 class="card-liner-subtitle"><font color="red">Siswa: </font></h6>
                                                </div>                                
                                            </div>
                                            <span class="bg-danger card-liner-absolute-icon text-white card-liner-small-tip">+100%</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12  col-md-6 col-lg-3 mt-3">
                                    <div class="card border-bottom-0">                            
                                        <div class="card-content border-bottom border-info border-w-5">
                                            <div class="card-body p-4">                                   
                                                <div class="d-flex">                                        
                                                    <div class="circle-50 outline-badge-info"> <span class="cf card-liner-icon cf-user mt-2">
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/dqxvvqzi.json"
                                                        trigger="loop"
                                                        style="width:45px;height:45px">
                                                    </lord-icon>
                                                    </span></div>
                                                    <div class="media-body align-self-center pl-3">
                                                        <span class="mb-0 h6 font-w-600">Total Peserta</span><br>
                                                        <p class="mb-0 font-w-500 h6">Mahasiswa: <?= $jumlahmhs; ?></p>
                                                        <p class="mb-0 font-w-500 h6">Siswa: <?= $jumlahsiswa; ?></p>                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                        
                                </div>
                                    <div class="col-12  col-md-6 col-lg-3 mt-3">
                                        <div class="card border-bottom-0">                            
                                            <div class="card-content border-bottom border-info border-w-5">
                                                <div class="card-body p-4">                                   
                                                    <div class="d-flex">                                        
                                                        <div class="circle-50 outline-badge-info"> <span class="cf card-liner-icon cf-user mt-2">
                                                            <lord-icon
                                                                src="https://cdn.lordicon.com/gqqykmqo.json"
                                                                trigger="loop"
                                                                style="width:50px;height:50px">
                                                            </lord-icon>
                                                        </span></div>
                                                        <div class="media-body align-self-center pl-3">
                                                            <span class="mb-0 h6 font-w-600">Total Admin</span><br>
                                                            <p class="mb-0 font-w-500 h6">Superadmin: <?= $jumlahadmin; ?></p>
                                                            <p class="mb-0 font-w-500 h6">Adminkab: <?= $jumlahadminkab; ?></p>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                        
                                    </div>
                                    <div class="col-12  col-md-6 col-lg-3 mt-3">
                                        <div class="card border-bottom-0">                            
                                            <div class="card-content border-bottom border-info border-w-5">
                                                <div class="card-body p-4">                                   
                                                    <div class="d-flex">                                        
                                                        <div class="circle-50 outline-badge-info"> <span class="cf card-liner-icon cf-users mt-2">
                                                            <lord-icon
                                                                src="https://cdn.lordicon.com/vusrdugn.json"
                                                                trigger="loop"
                                                                style="width:50px;height:50px"></span></div>
                                                        <div class="media-body align-self-center pl-3">
                                                            <span class="mb-0 h6 font-w-600">Staff</span><br>
                                                            <p class="mb-0 font-w-500 h6">Ketua Bidang: </p>
                                                            <p class="mb-0 font-w-500 h6">Kepala S.Informasi: </p>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                        
                                    </div>
                                    <div class="col-12  col-md-6 col-lg-3 mt-3">
                                        <div class="card border-bottom-0">                            
                                            <div class="card-content border-bottom border-danger border-w-5">
                                                <div class="card-body p-4">                                   
                                                    <div class="d-flex">                                        
                                                        <div class="circle-50 outline-badge-danger"> <span class="cf card-liner-icon cf-user mt-2">
                                                            <lord-icon
                                                                src="https://cdn.lordicon.com/nrzqxhfu.json"
                                                                trigger="loop"
                                                                style="width:50px;height:50px">
                                                            </lord-icon>
                                                        </span></div>
                                                        <div class="media-body align-self-center pl-3">
                                                            <span class="mb-0 h6 font-w-600">Akun Blokir</span><br>
                                                            <p class="mb-0 font-w-500 h6">0</p>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                        
                                    </div>
                    </div>


                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <div class="card">
                                              <div class="card-header justify-content-between align-items-center">
                                                <h4 class="card-title">List Token</h4>
                                              </div>
                                              <div class="card-body">
                                                <div class="card-default table-responsive">
                                                <table id="example2" class="display table dataTable table-striped table-bordered">
                                                  <thead>
                                                  <tr>
                                                      <th width="1%">No</th>
                                                      <th>Email</th>
                                                      <th>Token</th>
                                                      <th>Tanggal</th>
                                                      <th>Opsi</th>
                                                  </tr>
                                                  </thead>
                                                  <tbody>
                                                  <?php $no=1; foreach($token as $user_token){ ?>
                                                    <tr>
                                                    <td><?=$no++?></td>
                                                    <td><?= $user_token['email']; ?></td>
                                                    <td><?= $user_token['token']; ?></td>
                                                    <td><?= date('d F Y', $user_token['date_created']); ?></td>
                                                    <td>
                                                          <a onclick="return confirm('apakah anda yakin ingin menghapus token ini?')" href="<?=base_url('admin/token_delete/'.$user_token['id'])?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                                                    </td>
                                                  </tr>
                                                  <?php } ?>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <div class="card">
                                              <div class="card-header justify-content-between align-items-center">
                                                <a style="float: right;" href="" class="btn btn-sm btn-success">Tambah data</a>
                                                <h4 class="card-title">Notifikasi</h4>
                                              </div>
                                              <div class="card-body">
                                                <div class="card-default table-responsive">
                                                <table id="example1" class="display table dataTable table-striped table-bordered">
                                                  <thead>
                                                  <tr>
                                                      <th width="1%">No</th>
                                                      <th>Judul</th>
                                                      <th>Deskripsi</th>
                                                      <th>Status</th>
                                                      <th>Created On</th>
                                                      <th>Action</th>
                                                  </tr>
                                                  </thead>
                                                  <tbody>
                                                  <?php $no=1; foreach($token as $user_token){ ?>
                                                    <tr>
                                                    <td><?=$no++?></td>
                                                    <td><?= $user_token['email']; ?></td>
                                                    <td><?= $user_token['token']; ?></td>
                                                    <td><?= date('d F Y', $user_token['date_created']); ?></td>
                                                    <td>
                                                          <a onclick="return confirm('apakah anda yakin ingin menghapus token ini?')" href="<?=base_url('admin/token_delete/'.$user_token['id'])?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
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
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->