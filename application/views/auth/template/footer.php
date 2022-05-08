
        <!-- Footer-->
        <footer class="bg-black text-start py-5">
            <div class="container text-white">
                <div class="row justify-content-center ">
                    <div class="col-md-2">
                        <img src="<?php echo base_url('assets/landing')?>/assets/img/logo-purwakarta.png" alt="" style="width: 100px;">
                    </div>
                    <div class="col-md-4">
                        <p><h4><?= $web['title']; ?></h4></p>
                        <div class="d-flex">
                            <div class="judul me-2">
                                <p>Email:</p>
                                <p>Telepon:</p>
                                <p>Alamat:</p>
                            </div>
                            <div class="titik me-2">
                                <p>:</p><p>:</p><p>:</p>
                            </div>
                            <div class="ket">
                                <p> info@diskominfo.purwakartakab.go.id</p>
                                <p> (0264) 200036</p>
                                <p> Jl. Gandanegara No.25, Nagri Kidul, Kec. Purwakarta,
                                    Kabupaten Purwakarta, Jawa Barat 41111</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-white">
                        <p>Navigasi</p>
                        <a href="#">Beranda</a><br>
                        <a href="<?php echo base_url('auth/pengumuman'); ?>">Pengumuman</a><br>
                        <a href="#">FAQ</a><br>
                        <a href="#">Program</a><br>
                        <a href="<?php echo base_url('auth/register'); ?>">Daftar</a><br>
                        <a href="<?php echo base_url('auth/visimisi'); ?>">Privacy Policy</a><br>
                        <a href="<?php echo base_url('auth/disclaimer'); ?>">Disclaimer</a><br>
                    </div>
                    <div class="col-md-3">
                        <p>Devaloper</p>
                        <a target="_blank" href="<?php echo base_url('dev'); ?>" class="text-white">Admin 1</a>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-white">
                        <a href="#"><i class="bi bi-github h2 me-3"></i></a>
                        <a href="#"><i class="bi bi-facebook h2 me-3"></i></a>
                        <a href="#"><i class="bi bi-instagram h2 me-3"></i></a>
                        <a href="#"><i class="bi bi-whatsapp h2 me-3"></i></a>
                        <a href="#"><i class="bi bi-youtube h2 me-3"></i></a>
                        <a href="#"><i class="bi bi-globe2 h2 me-3"></i></a>
                    </div>
                    <div class="col-md-6 text-white text-start">
                        <p>Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script> by Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi RI</p> 
                        <p>Photos by ITS, ITERA, and UI</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Feedback Modal-->
        
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Login</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form action="<?php echo base_url('auth'); ?>" method="post"/>
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" name="email" value="<?= set_value('email'); ?>" required/>
                                <label for="email">Email</label>
                                <?= form_error('email', '<small class="text-danger">','</small>'); ?>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" type="password" name="password" required/>
                                <label for="password">Password</label>
                                <?= form_error('password', '<small class="text-danger">','</small>'); ?>
                            </div>
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg " type="submit">Submit</button></div>
                            <p class="text-muted pt-3">Belum punya akun? <a href="<?php echo base_url('register')?>">Daftar Disini</a></p>
                            <p class="text-muted pt-3">Saya tidak bisa masuk <a href="#">Perbaiki Disini</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url('assets/plugins/') ?>alert.js"></script>
        <?php echo "<script>".$this->session->flashdata('message')."</script>"?>
        <!-- Core theme JS-->
        <script src="<?php echo base_url('assets/landing')?>/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
                page = document.getElementById('page');
                s1 = document.getElementById("sectionOne");
                s2 = document.getElementById("sectionTwo");
                s3 = document.getElementById("sectionthree");
                document.getElementById("next").addEventListener('click', function(){
                    if(this.name == 1){
                        s1.style.display = "none";
                        s2.style.display = "block";
                        s3.style.display = "none";
                        page.innerHTML = 2;
                        this.name = 2;
                        this.innerHTML = "selanjutnya";
                    }else if(this.name == 2){
                        s1.style.display = "none";
                        s2.style.display = "none";
                        s3.style.display = "block";
                        page.innerHTML = 3;
                        this.name = 3;
                        this.innerHTML = "submit";
                    }
                })
            </script>
    </body>
</html>
