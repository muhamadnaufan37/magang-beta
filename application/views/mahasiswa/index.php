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
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-info alert-dismissible">
                            <div class="card-body pad table-responsive">
                                Selamat datang <b><?= $user['nama']; ?></b>, saat ini anda login menggunakan akun <b><?= ($user['role_id'] == "5")?'Mahasiswa':'<a class="text-muted">Tidak ada title</a>'; ?></b>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>