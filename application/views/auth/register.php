
  <!-- START: Main Content-->
        <!-- <main>
            <div class="container-fluid site-width"> -->

                <!-- START: Card Data-->
                <!-- <div class="row">
                    <div class="col-9 mt-3">                          
                        <div class="card">  
                            <div class="card-header d-flex justify-content-between align-items-center">                               
                                <h2 class="card-title">
                                  <b>
                                    Daftar
                                  </b>
                                </h2>                                   
                            </div>

                            <div class="card-body">
                                <form>
                                  <div class="form-group col-md-12">
                                      <label for="inputState">Pilih posisi yang sesuai</label>
                                      <select id="inputState" class="form-control">
                                          <option selected disabled>Pilih Posisi</option>
                                          <option>Mahasiswa</option>
                                          <option>Siswa</option>
                                      </select>
                                  </div>
                                </form>
                            </div>
                            <div class="card-footer">
                            <button type="button" class="col-6 btn btn-danger" style="position: center;">Selanjutnya</button>
                            <p>
                            <p>Sudah Punya Akun? <a href="<?php echo base_url('auth') ?>">Masuk</a></p>
                            </div>                              
                        </div>
                    </div>



                </div> -->
                <!-- END: Card DATA-->
            <!-- </div>
        </main> -->
        <!-- END: Content-->

  <form action="<?php echo base_url('auth/register'); ?>" method="post" class="login-form">
    <h1><?php echo $page_cover ?></h1>

    <div class="textb">
      <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>" required>
      <div class="placeholder">nama</div>
    </div>
    
    <div class="textb">
      <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" required>
      <div class="placeholder">Email</div>
    </div>

    <div class="textb">
      <input type="number" class="form-control" id="telepon" name="telepon" value="<?= set_value('telepon'); ?>" required>
      <div class="placeholder">Contact</div>
    </div>
      <?= form_error('telepon', '<small class="text-danger">','</small>'); ?>

    <div class="textb">
      <input type="password" class="form-control" id="password1" name="password1" required>
      <div class="placeholder">Password</div>
      <div class="show-password fas fa-eye-slash"></div>
    </div>
      <?= form_error('password1', '<small class="text-danger">','</small>'); ?>

    <div class="textb">
      <input type="password" class="form-control" id="password2" name="password2" required>
      <div class="placeholder">Retype Password</div>
      <div class="show-password fas fa-eye-slash"></div>
    </div>
      <?= form_error('password2', '<small class="text-danger">','</small>'); ?>

    <div class="checkbox">
      <input type="checkbox">
      <div class="fas fa-check"></div>
      Stay signed in
    </div>

    <button class="btn fas fa-arrow-right" disabled></button>
    <a href="<?php echo base_url('auth') ?>">Sign In</a>
  </form>

   <script src="<?php echo base_url('assets/plugins/node_modules/sweetalert2')?>/dist/sweetalert2.all.min.js"></script>
   <script src="<?php echo base_url('assets/plugins/node_modules/sweetalert2')?>/dist/sweetalert2.min.js"></script>
   <script src="<?php echo base_url('assets/plugins/') ?>alert.js"></script>
   <?php echo "<script>".$this->session->flashdata('message')."</script>"?>

  <script>
    var fields = document.querySelectorAll(".textb input");
    var btn = document.querySelector(".btn");
    function check(){
      if(fields[0].value != "" && fields[1].value != "")
        btn.disabled = false;
      else
        btn.disabled = true;  
    }

    fields[0].addEventListener("keyup",check);
    fields[1].addEventListener("keyup",check);

    document.querySelector(".show-password").addEventListener("click",function(){
      if(this.classList[2] == "fa-eye-slash"){
        this.classList.remove("fa-eye-slash");
        this.classList.add("fa-eye");
        fields[1].type = "text";
      }else{
        this.classList.remove("fa-eye");
        this.classList.add("fa-eye-slash");
        fields[1].type = "password";
      }
    });
  </script>
</body>
</html>