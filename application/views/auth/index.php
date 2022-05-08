        
        <!-- Call to action section-->
        <section class="cta">
            <div class="cta-content">
                <div class="container px-5" style="color: white;">
                    <h1 class="display-1 lh-1 mb-3">Ambil Kendali Masa Depanmu</h1>
                    <p class="lead fw-normal mb-5"><b>Mengasah ilmu yang sudah dipelajari agar bisa di implementasikan dengan cara mengikuti kegiatan magang Dinas Komunikasi Dan Informatika</b></p>
                    <a class="btn btn-danger py-2 px-3 col-4 mx-auto" href="<?php echo base_url('auth/register'); ?>" target="_blank">Daftar Program</a>
                </div>
            </div>
        </section>
        <section id="header" class="text-center">
            <div class="h1">Terkini</div>
            <div class="row justify-content-center">
                <?php for($i=0;$i<5;$i++){ ?>
                <a class="col-md-2 shadow rounded text-start mx-2 p-3" style="text-decoration: none;" href="<?php echo base_url('auth/pengumuman'); ?>">
                    <p class="text-muted">01-01-2001</p>
                    <p class="text-dark textwrapp text-left"><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum placeat quis incidunt suscipit et fuga iste</b></p>
                </a>
                <?php } ?>
                <p><p><p><p>
                <div class="footer">
                    <button class="btn btn-outline-dark" href=""><b>Pengumuman Lainnya</b></button>
                </div>
            </div>
        </section>
        <section id="Pertanyaan" class="px-5 bg-light">
            <div class="text-center h2 mb-5 text-muted">Pertanyaan Umum</div>
            <div class="accordion container" id="accordionExample">
                <?php for($j=0;$j<5;$j++){ ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading<?= $j ?>">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $j ?>" aria-expanded="true" aria-controls="collapse<?= $j ?>">
                      Accordion Item #<?= $j ?>
                    </button>
                  </h2>
                  <div id="collapse<?= $j ?>" class="accordion-collapse collapse <?php echo ($j==0)?"show":""; ?>" aria-labelledby="heading<?= $j ?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <?php } ?>
                <p><p><p><p>
                <div class="footer">
                    <center><button class="btn btn-outline-dark" href=""><b>Pengumuman Lainnya</b></button></center>
                </div>
              </div>
        </section>
        <!-- Quote/testimonial aside-->
        <aside class="text-center bg-gradient-primary-to-secondary">
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <img src="<?php echo base_url('assets/landing')?>/assets/img/logo-blank.png" style="width: 100%;" />
                    </div>
                </div>
        </aside>
        <!-- App features section-->
        <section id="features">
            <div class="container-fluid px-5">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-5">
                        <!-- Feature item-->
                        <div class="text-center">
                            <i class="bi-trophy icon-feature text-gradient d-block mb-3"></i>
                            <h3 class="font-alt">SKILL</h3>
                            <p class="text-muted mb-0">Kegiatan praktik di lapangan langsung membuka banyak peluang!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- Feature item-->
                        <div class="text-center">
                            <i class="bi-list-task icon-feature text-gradient d-block mb-3"></i>
                            <h3 class="font-alt">ACTIVITY</h3>
                            <p class="text-muted mb-0">Eksplorasi pengetahuan dan kemampuan di lapangan selama lebih dari bulan!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- Feature item-->
                        <div class="text-center">
                            <i class="bi-bar-chart icon-feature text-gradient d-block mb-3"></i>
                            <h3 class="font-alt">PLANNING</h3>
                            <p class="text-muted mb-0">Belajar dan memperluas jaringan di luar program studi atau kampus asal!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- Feature item-->
                        <div class="text-center">
                            <i class="bi bi-bank2 icon-feature text-gradient d-block mb-3"></i>
                            <h3 class="font-alt">STUDENT</h3>
                            <p class="text-muted mb-0">Menimba ilmu secara langsung dari dinas berkualitas dan terkemuka!</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Basic features section-->
        <section class="bg-light">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">Asah kemampuanmu dan menjadi yang terbaik dari yang lain</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">dengan belajar lebih dari satu bidang bisa meningkatkan kreatifitas akademik dan menjadi nilai tambah untuk pengalaman dunia kerja.</p>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="circular--landscape">
                            <img src="<?php echo base_url('assets/landing')?>/assets/img/3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5 bg-white">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">Ambil Kendali Masa Depanmu</h1>
                            <p class="lead fw-normal text-muted mb-5">Mengasah ilmu yang sudah dipelajari agar bisa di implementasikan dengan cara mengikuti kegiatan magang Dinas Komunikasi Dan Informatika</p>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="<?php echo base_url('assets/landing')?>/assets/img/google-play-badge.svg" alt="..." /></a>
                                <a href="#!"><img class="app-badge" src="<?php echo base_url('assets/landing')?>/assets/img/app-store-badge.svg" alt="..." /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <img src="<?php echo base_url('assets/landing')?>/assets/img/contract.svg" alt="" style="width: 80%;">
                    </div>
                </div>
            </div>
        </header>
        <!-- App badge section-->
        <!-- <section class="bg-gradient-primary-to-secondary" id="download">
            <div class="container px-5">
                <h2 class="text-center text-white font-alt mb-4">Get the app now!</h2>
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                    <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="<?php echo base_url('assets/landing')?>/assets/img/google-play-badge.svg" alt="..." /></a>
                    <a href="#!"><img class="app-badge" src="<?php echo base_url('assets/landing')?>/assets/img/app-store-badge.svg" alt="..." /></a>
                </div>
            </div>
        </section> -->