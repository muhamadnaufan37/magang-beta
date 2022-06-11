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
                            <li class="breadcrumb-item active"><a href="<?php echo base_url('bidang/register_mahasiswa'); ?>">Bidang DISKOMINFO</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);"><?php echo $page_title ?></a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-xxl-4 col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <img class="img-fluid" src="<?php echo base_url('assets/template/dist3')?>/images/courses/pic1.jpg" alt="">
                                    <div class="card-body">
                                        <h4 class="mb-0"><?= $edit['kode_bidang']; ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="card-title">About Bidang</h2>
                                    </div>
                                    <div class="card-body pb-0">
                                            <h4 style="text-align: center;">
                                                <b><?= $edit['nama_bidang']; ?></b>
                                            </h4>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex px-0 justify-content-between">
                                                <strong>Ketua Bidang</strong>
                                                <span class="mb-0">Jimmy Morri</span>
                                            </li>
                                            <li class="list-group-item d-flex px-0 justify-content-between">
                                                <strong>Kasi</strong>
                                                <span class="mb-0">Jimmy Morris</span>
                                            </li>
                                            <li class="list-group-item d-flex px-0 justify-content-between">
                                                <strong>Periode</strong>
                                                <span class="mb-0">-</span>
                                            </li>
                                            <li class="list-group-item d-flex px-0 justify-content-between">
                                                <strong>Date</strong>
                                                <span class="mb-0"><?= $edit['date_created']; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer pt-0 pb-0 text-center">
                                        <div class="row">
                                            <div class="col-4 pt-3 pb-3 border-right">
                                                <h3 class="mb-1 text-primary"><?= $edit['slot_siswa']; ?></h3>
                                                <span>Siswa/i</span>
                                            </div>
                                            <div class="col-4 pt-3 pb-3 border-right">
                                                <h3 class="mb-1 text-primary"><?= $edit['slot_mhs']; ?></h3>
                                                <span>Mahasiswa/i</span>
                                            </div>
                                            <div class="col-4 pt-3 pb-3">
                                                <h3 class="mb-1 text-primary"><?= $edit['slot_mhs_penelitian']; ?></h3>
                                                <span>Penelitian</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-xxl-8 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <p>
                                    <?= $edit['deskripsi']; ?>
                                </p>
                                        Pelaksanaan:<br>
                                            Mulai Magang: <?= $edit['tanggal_periode']; ?> <br>
                                            Setiap Hari Senin s/d Jumat (Hari Raya / Tanggal Merah Libur)<br>
                                            Jam Operational: <?= $edit['waktu_in']; ?> Hingga <?= $edit['waktu_out']; ?> <p>
                                <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                <p class="mb-5">A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p> -->
                                <h4 class="text-primary">Our Courses</h4>
                                <div class="profile-skills pt-2 border-bottom-1 pb-2">
                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-3 m-b-10">Computer</a>
                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-3 m-b-10">Programming</a>
                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-3 m-b-10">Photoshop</a>
                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-3 m-b-10">Management</a>
                                </div>
                                <!-- <div class="profile-lang pt-5 border-bottom-1 pb-5">
                                    <h4 class="text-primary mb-4">Language</h4><a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a> <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                                    <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
                                </div>
                                <h4 class="text-primary">Courses Information</h4>
                                <ul class="list-group mb-3 list-group-flush">
                                    <li class="list-group-item border-0 px-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</li>
                                    <li class="list-group-item -0 px-0">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</li>
                                    <li class="list-group-item -0 px-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.</li>
                                    <li class="list-group-item -0 px-0">A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</li>
                                    <li class="list-group-item border-0 px-0">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>