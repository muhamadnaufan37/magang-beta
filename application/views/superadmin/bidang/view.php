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
                <div class="row mt-3">
                    <div class="col-12 col-sm-12">

                        <div class="row">
                            <div class="col-12 col-xl-9 mb-5 mb-xl-0">
                                <div class="card mb-4">
                                    <img src="<?php echo base_url('assets/template/dist3')?>/images/courses/pic1.jpg" alt="" class="img-fluid rounded-top">
                                    <div class="card-body">
                                        <ul class="list-inline comment-info font-weight-bold">
                                            <li class="list-inline-item  mr-3"><i class="fa fa-user pr-1 text-primary"></i> <a href="#" class="text-primary">  <?= $edit['kode_bidang']; ?></a></li>
                                            <li class="list-inline-item" style="float: right;"><a href="#" ><?php if ($edit['s_bidang'] == '0') { ?>
                                                            <div class="col-12 badge badge-secondary btn-xs">Pendaftaran Ditutup</div>
                                                          <?php } ?>
                                                      <?php if ($edit['s_bidang'] == '1') { ?>
                                                            <div class="col-12 badge badge-success btn-xs">Pendaftaran Dibuka</div>
                                                          <?php } ?></a></li>
                                        </ul>
                                        <a href="#"><h4><?= $edit['nama_bidang']; ?></h4></a>
                                        <h6>Rincian Kegiatan</h6><p>
                                        <?= $edit['deskripsi']; ?><p>
                                        Pelaksanaan:<br>
                                            Mulai Magang: <?= $edit['tanggal_periode']; ?> <br>
                                            Setiap Hari Senin s/d Jumat (Hari Raya / Tanggal Merah Libur)<br>
                                            Jam Operational: <?= $edit['waktu_in']; ?> Hingga <?= $edit['waktu_out']; ?> <br>
                                        <blockquote class="blockquote my-4 p-5 bg-primary position-relative text-white rounded">
                                            <p class="font-weight-bold">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus</p>
                                            <p>-Someone famous in Source Title</p>
                                        </blockquote>
                                        <div class="text-right">

                                            <a href="#" class="btn btn-social btn-dropbox text-white mb-2">
                                                <i class="ion ion-social-dropbox"></i>
                                            </a>
                                            <a href="#" class="btn btn-social btn-facebook text-white mb-2">
                                                <i class="ion ion-social-facebook"></i>
                                            </a>                                   
                                            <a href="#" class="btn btn-social btn-github text-white mb-2">
                                                <i class="ion ion-social-github"></i>
                                            </a>
                                            <a href="#" class="btn btn-social btn-google text-white mb-2">
                                                <i class="ion ion-social-google"></i>
                                            </a>
                                            <a href="#" class="btn btn-social btn-instagram text-white mb-2">
                                                <i class="ion ion-social-instagram"></i>
                                            </a>
                                            <a href="#" class="btn btn-social btn-linkedin text-white mb-2">
                                                <i class="ion ion-social-linkedin"></i>
                                            </a>                                   
                                            <a href="#" class="btn btn-social btn-pinterest text-white mb-2">
                                                <i class="ion ion-social-pinterest"></i>
                                            </a>
                                            <a href="#" class="btn btn-social btn-tumblr text-white mb-2">
                                                <i class="ion ion-social-tumblr"></i>
                                            </a>
                                            <a href="#" class="btn btn-social btn-twitter text-white mb-2">
                                                <i class="ion ion-social-twitter"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body pb-0">
                                        <h5 class="header-title  text-uppercase mb-0">3 Comments</h5>
                                    </div>
                                    <div class="media d-block d-sm-flex text-center text-sm-left p-4">
                                        <img class="img-fluid d-md-flex mr-sm-4 rounded-circle" src="dist/images/author10.jpg" alt="">
                                        <div class="media-body align-self-center">
                                            <div class="float-sm-right float-none h6 mb-0 my-3 my-sm-0"> <a href="#" class="text-primary"> <i class="icofont icofont-bubble-left pr-1"></i> Reply</a> </div>  
                                            <h6 class="mb-1 font-weight-bold">Sandy Jane</h6>
                                            Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis.
                                        </div>
                                    </div>
                                    <div class="media d-block d-sm-flex text-center text-sm-left p-4 ml-0 ml-sm-5 border-top theme-border">
                                        <img class="img-fluid d-md-flex mr-sm-4 rounded-circle" src="dist/images/author9.jpg" alt="">
                                        <div class="media-body align-self-center">
                                            <div class="float-sm-right float-none h6 mb-0 my-3 my-sm-0"> <a href="#" class="text-primary"> <i class="icofont icofont-bubble-left pr-1"></i> Reply</a> </div>  
                                            <h6 class="mb-1 font-weight-bold">John Smith</h6>
                                            Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis.
                                        </div>
                                    </div>

                                    <div class="media d-block d-sm-flex text-center text-sm-left p-4 border-top them-border">
                                        <img class="img-fluid d-md-flex mr-sm-4 rounded-circle" src="dist/images/author1.jpg" alt="">
                                        <div class="media-body align-self-center">
                                            <div class="float-sm-right float-none h6 mb-0 my-3 my-sm-0"> <a href="#" class="text-primary"> <i class="icofont icofont-bubble-left pr-1"></i> Reply</a> </div>  
                                            <h6 class="mb-1 font-weight-bold">Roma Ellisa</h6>
                                            Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="header-title mb-3 text-uppercase">Leave a comment</h5>
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Name :">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Email :">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea  class="form-control height-200" placeholder="Message :"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <a href="#" class="btn btn-primary btn-md">Submit Comment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <a href="#" type="button" class="btn btn-outline-primary btn-block">Apply Kegiatan Disini</a>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header d-flex justify-content-between align-items-center">                               
                                        <h4 class="card-title">Categories</h4>                                
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled font-weight-bold">
                                            <li class=" mb-2"><a href="#" class="text-muted ">
                                                    <i class="icon-tag pr-2"></i> Photoshop <span class="float-right text-primary">14</span></a></li>
                                            <li class=" mb-2"><a href="#" class="text-muted">
                                                    <i class="icon-tag pr-2"></i> Mobile Devlopment <span class="float-right text-primary">20</span></a></li>
                                            <li class=" mb-2"><a href="#" class="text-muted">
                                                    <i class="icon-tag pr-2"></i> Web Design <span class="float-right text-primary">36</span></a></li>
                                            <li class=" mb-2"><a href="#" class="text-muted">
                                                    <i class="icon-tag pr-2"></i> Video Editing <span class="float-right text-primary">8</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header d-flex justify-content-between align-items-center">                               
                                        <h4 class="card-title">Text Widget</h4>                                
                                    </div>
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header d-flex justify-content-between align-items-center">                               
                                        <h4 class="card-title">Recent Posts</h4>                                
                                    </div>
                                    <div class="card-body">
                                        <div class="media d-block d-sm-flex text-center text-sm-left mb-4">
                                            <img class="img-fluid d-md-flex mr-sm-4" src="dist/images/author1.jpg" alt="">
                                            <div class="media-body align-self-center redial-line-height-1_5">
                                                <h6 class="my-2 my-sm-0 redial-line-height-1_5 mb-xl-2">Maecenas tempus tellus eget luctus.</h6>
                                                10 Dec 2017
                                            </div>
                                        </div>
                                        <div class="media d-block d-sm-flex text-center text-sm-left mb-4">
                                            <img class="img-fluid d-md-flex mr-sm-4" src="dist/images/author10.jpg" alt="">
                                            <div class="media-body align-self-center redial-line-height-1_5">
                                                <h6 class="my-2 my-sm-0 redial-line-height-1_5 mb-xl-2">Maecenas tempus tellus eget luctus.</h6>
                                                15 Dec 2017
                                            </div>
                                        </div>
                                        <div class="media d-block d-sm-flex text-center text-sm-left mb-4">
                                            <img class="img-fluid d-md-flex mr-sm-4" src="dist/images/author9.jpg" alt="">
                                            <div class="media-body align-self-center redial-line-height-1_5">
                                                <h6 class="my-2 my-sm-0 redial-line-height-1_5 mb-xl-2">Maecenas tempus tellus eget luctus.</h6>
                                                25 Dec 2017
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header d-flex justify-content-between align-items-center">                               
                                        <h4 class="card-title">Archives</h4>                                
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled redial-line-height-3 font-weight-bold">
                                            <li class="mb-2"><a href="#" class="text-muted"><i class="icon-tag pr-2"></i> August 2017</a></li>
                                            <li class="mb-2"><a href="#" class="text-muted"><i class="icon-tag pr-2"></i> September 2017 </a></li>
                                            <li class="mb-2"><a href="#" class="text-muted"><i class="icon-tag pr-2"></i> Octomeber 2017 </a></li>
                                            <li class="mb-2"><a href="#" class="text-muted"><i class="icon-tag pr-2"></i> November 2017</a></li>
                                            <li class="mb-2"><a href="#" class="text-muted"><i class="icon-tag pr-2"></i> December 2017 </a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header d-flex justify-content-between align-items-center">                               
                                        <h4 class="card-title">Tags</h4>                                
                                    </div>
                                    <div class="card-body">
                                        <a href="#" class="redial-light border redial-border-light px-2 py-1 mb-2 d-inline-block redial-line-height-1_5 mr-2">Design</a>
                                        <a href="#" class="redial-light border redial-border-light px-2 py-1 mb-2 d-inline-block redial-line-height-1_5 mr-2">Devlopment</a>
                                        <a href="#" class="redial-light border redial-border-light px-2 py-1 mb-2 d-inline-block redial-line-height-1_5 mr-2">Css</a>
                                        <a href="#" class="redial-light border redial-border-light px-2 py-1 mb-2 d-inline-block redial-line-height-1_5 mr-2">Html5</a>
                                        <a href="#" class="redial-light border redial-border-light px-2 py-1 mb-2 d-inline-block redial-line-height-1_5 mr-2">Wordpress</a>
                                        <a href="#" class="redial-light border redial-border-light px-2 py-1 mb-2 d-inline-block redial-line-height-1_5 mr-2">Logo Design</a>
                                        <a href="#" class="redial-light border redial-border-light px-2 py-1 mb-2 d-inline-block redial-line-height-1_5 mr-2">Web Service</a>
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