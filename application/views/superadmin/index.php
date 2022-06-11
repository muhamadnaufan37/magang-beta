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
                    <div class="col-12  col-md-6 col-lg-4 mt-4">
                        <div class="card border-bottom-0">                            
                            <div class="card-content border-bottom border-warning border-w-5">
                                <div class="card-body p-4">                                   
                                    <div class="d-flex">                                        
                                        <div class="circle-50 outline-badge-warning"> <span class="cf card-liner-icon cf-xlm mt-2"></span></div>
                                        <a href="<?php echo base_url('superadmin/file_pending') ?>">
                                            <div class="media-body align-self-center pl-4">
                                                <span class="mb-0 h6 font-w-600">Surat Rekomendasi Kampus</span><br>
                                                <p class="mb-0 font-w-500 h6">Pending: <?= $file_pending; ?></p>                                                    
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-12  col-md-6 col-lg-4 mt-4">
                        <div class="card border-bottom-0">                            
                            <div class="card-content border-bottom border-success border-w-5">
                                <div class="card-body p-4">                                   
                                    <div class="d-flex">                                        
                                        <div class="circle-50 outline-badge-success"> <span class="cf card-liner-icon cf-link mt-2"></span></div>
                                        <a href="<?php echo base_url('superadmin/file_accept') ?>">
                                            <div class="media-body align-self-center pl-4">
                                                <span class="mb-0 h6 font-w-600">Surat Rekomendasi Kampus</span><br>
                                                <p class="mb-0 font-w-500 h6">Accept: <?= $file_accept; ?></p>                                                    
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-12  col-md-6 col-lg-4 mt-4">
                        <div class="card border-bottom-0">                            
                            <div class="card-content border-bottom border-danger border-w-5">
                                <div class="card-body p-4">                                   
                                    <div class="d-flex">                                        
                                        <div class="circle-50 outline-badge-danger"> <span class="cf card-liner-icon cf-ltc mt-2"></span></div>
                                        <a href="<?php echo base_url('superadmin/file_cancel') ?>">
                                            <div class="media-body align-self-center pl-4">
                                                <span class="mb-0 h6 font-w-600">Surat Rekomendasi Kampus</span><br>
                                                <p class="mb-0 font-w-500 h6">Cancel: <?= $file_cancel; ?></p>                                                    
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
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
<!-- END: Card DATA-->
</div>
</main>
        <!-- END: Content-->