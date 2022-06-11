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
                                <h4 class="card-title">Table <?php echo $page_title ?></h4>                                   
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
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
                </div>
            </div>
        </main>