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
                    <?php foreach($bidang1 as $bidang){ ?>
                        <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="card">
                                <img class="img-fluid" src="<?php echo base_url('assets/template/dist3')?>/images/courses/pic1.jpg" alt="">
                                <div class="card-body">
                                    <h4 style="text-align: center"><?= $bidang['nama_bidang']; ?></h4>
                                    <ul class="list-group mb-3 list-group-flush">
                                        <li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">Kode</span>
                                            <a href="javascript:void(0);"><strong><?= $bidang['kode_bidang']; ?></strong></a></li>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="mb-0">Status :</span><strong>
                                                <?php if ($bidang['s_bidang'] == '0') { ?>
                                                    <div class="col-12 badge badge-secondary btn-xs">Pendaftaran Tidak Dibuka</div>
                                                <?php } ?>
                                                <?php if ($bidang['s_bidang'] == '1') { ?>
                                                    <div class="col-12 badge badge-success btn-xs">Pendaftaran Dibuka</div>
                                                <?php } ?>
                                                <?php if ($bidang['s_bidang'] == '2') { ?>
                                                    <div class="col-12 badge badge-info btn-xs">Pendaftaran Ditutup</div>
                                                <?php } ?>
                                            </strong></li>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="mb-0">Tanggal :</span><strong><?= date('l, d F Y', $bidang['date_created']); ?></strong></li>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span><i class="fa fa-graduation-cap text-primary mr-2"></i>Student</span><strong>+120</strong></li>
                                    </ul>
                                    <?php if ($bidang['s_bidang'] == '0') { ?>
                                        <a href="<?php echo base_url('bidang/view/?id_bidang='.$bidang['id_bidang'])?>" class="btn btn-block btn-dark disabled">Read More</a>
                                        <a href="<?php echo base_url('bidang/register_mahasiswa/?id_bidang='.$bidang['id_bidang'])?>" class="btn btn-block btn-dark disabled">Register</a>
                                    <?php } ?>
                                    <?php if ($bidang['s_bidang'] == '1') { ?>
                                        <a href="<?php echo base_url('bidang/view/?id_bidang='.$bidang['id_bidang'])?>" class="btn btn-block btn-primary">Read More</a>
                                        <a href="<?php echo base_url('bidang/register_mahasiswa/?id_bidang='.$bidang['id_bidang'])?>" class="btn btn-block btn-danger">Register</a>
                                    <?php } ?>
                                    <?php if ($bidang['s_bidang'] == '2') { ?>
                                        <a href="<?php echo base_url('bidang/view/?id_bidang='.$bidang['id_bidang'])?>" class="btn btn-block btn-dark disabled">Read More</a>
                                        <a href="<?php echo base_url('bidang/register_mahasiswa/?id_bidang='.$bidang['id_bidang'])?>" class="btn btn-block btn-dark disabled">Register</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>